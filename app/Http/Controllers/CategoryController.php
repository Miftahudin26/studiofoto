<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Stmt\Return_;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class CategoryController extends Controller
{

    // keamanan untuk diteruskan ke page login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        // (ORM)mau get semua data (tanggal) dari model & pemanggilan data name lewat category model
        $categories = Category::latest()->paginate(9);

        // Query builder againnn ngambil lansung dari database & panggil name pencocokan tabel users dan categories
        // $categories = DB::table('categories')
        //     ->join('users', 'categories.id_user', 'users.id')
        //     ->select('categories.*', 'users.name')
        //     ->latest()->paginate(9);

        return view('admin.category.index', compact('categories'));
    }
    
    public function addCategory(Request $request){
        
        $validated = $request->validate([
            'name_category' => 'required|unique:categories|max:255'
        ],[
            'name_category.required' => 'Nama kategori tidak boleh kosong!'
        ]);

        // CARA 1 INPUT Eloquent ORM
        // Category::insert([
        //     'name_category' => $request->name_category,
        //     'id_user' => Auth::user()->id,
        //     'created_at' => Carbon::now(),
        // ]);

        
        // CARA 2
        // $category = new Category();
        // $category->name_category = $request->name_category;
        // $category->id_user = Auth::user()->id;
        // $category->save();

        // Insert with query builder
        $data = array();
        $data['name_category'] = $request->name_category;
        $data['id_user'] = Auth::user()->id;
        $data['created_at'] = date('y-m-d');
        DB::table('categories')->insert($data);
        // DB::table('users')('categories')->insert($data);

        return redirect()->back()->with('succes', 'Data Berhasil Disimpan');

    }

    public function editCategory($id){

        //ORM
        // $categories = Category::find($id);

        //Query builder
        $categories = DB::table('categories')->where('id', $id)->first();

        return view('admin.category.edit_category', compact('categories'));
    }

    public function updateCategory(Request $request, $id){

        //ORM
        // $update = Category::find($id)->update([
        //     'name_category' => $request->name_category,
        //     'id_user' => Auth::user()->id,

        // ]);

        //query builder
        $data = array();
        $data['name_category'] = $request->name_category;
        $data['id_user'] = Auth::user()->id;
        DB::table('categories')->where('id', $id)->update($data);

        return redirect()->route('all.category')->with('succes', 'Data Berhasil Diupdate');
    }

    public function trashCat(){

        $trashCat = Category::onlyTrashed()->latest()->paginate(9);

        return view('admin.category.trash', compact('trashCat'));

    }

    public function softDelete($id)
    {
        $delete = Category::find($id)->delete();
        return redirect()->back()->with('succes', 'Data Berhasil Dihapus');
    }

    // public function softDelete ($id){
    //     $delete = Category::find::class($id)->delete();
    //     return redirect()->back()->with('succes', 'Data Berhasil Dihapus');
    // }

    public function restoreCat($id){
        $delete = Category::withTrashed()->find($id)->restore();
        return redirect()->route('all.category')->with('succes', 'Data Berhasil Direstore');

    }

    public function permanentDelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('succes', 'Data Berhasil Dihapus');

    }
}

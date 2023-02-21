<?php

namespace App\Http\Controllers;

use App\Models\Multipic;
use App\Models\Produk;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{

        // keamanan untuk diteruskan ke page login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $images = Produk::latest()->paginate(9);
        return view('admin.image.index', compact('images'));
    }


    // ERORR VALIDASI IMAGE CEK LAGI!
    public function addImage(Request $request){

        $validated = $request->validate([
            'image_name' => 'required|unique:images|max:255',
            'image' => 'required|mimes : jpeg,jpg,png',
        ],[
            'image_name.required' => 'Nama Image tidak boleh kosong!'
        ]);

        $image = $request->file('image');

        // CARA KONVENSIONAL
        // MAPPING generate unik id
        // $generate_id = hexdec(uniqid());
        // $img_extension = strtolower($image->getClientOriginalExtension());

        //concat generate (namafile1234.png)
        // $img_name = $generate_id. '.' .$img_extension;

        // roote location
        // $location = 'image/file/';
        // $last_img = $location.$img_name;
        // $image->move($location, $img_name);

        $generate_id = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        
        // \Intervention\Image\Facades\Image::make('image')->resize(300, 200)->save('image/file/'.$generate_id);
        Image::make($image)->resize(300, 200)->save('image/file/'. $generate_id);

        $last_img = 'image/file/'.$generate_id;

        // ORM
        Produk::insert([
            'image_name' => $request->image_name,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('succes', 'Data berhasil ditambahkan');
    }

    public function editImage($id){

        $images = Produk::find($id);
        return view('admin.image.edit_image', compact('images'));
    }

    public function updateImage(Request $request, $id){

        $validated = $request->validate([
            'image_name' => 'required|unique:images|max:255',
            'image' => 'required|mimes : jpeg,jpg,png',
        ],[
            'image_name.required' => 'Nama Image tidak boleh kosong!'
        ]);

        $old_image = $request->old_image;
        $image = $request->file('image');

        // MAPPING generate unik id
        $generate_id = hexdec(uniqid());
        $img_extension = strtolower($image->getClientOriginalExtension());

        //concat generate (namafile1234.png)
        $img_name = $generate_id. '.' .$img_extension;

        // roote location
        $location = 'image/file/';
        $last_img = $location.$img_name;
        $image->move($location, $img_name);

        // menimpa dan menghapus file lama
        unlink($old_image);

        // ORM
        Produk::find($id)->update([
            'image_name' => $request->image_name,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.image')->with('succes', 'Data Image berhasil ditambahkan');

    }

    public function deleteImage($id){
        $image = Produk::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Produk::find($id)->delete();
        return redirect()->back()->with('succes', 'Data berhasil di hapus');

    }

    // ini multiple image
    public function multiPic(){
        $images = Multipic::all();
        return view('admin.multipic.index', compact('images'));
    }


    public function multiAdd(Request $request){

        $image = $request->file('image');

        foreach($image as $multi_img){
    
            $generate_id = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300, 200)->save('image/multipic/'. $generate_id);
    
            $last_img = 'image/multipic/'.$generate_id;
    
            // ORM
            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        } // endforeach

        return redirect()->back()->with('succes', 'Data berhasil ditambahkan');

    }

    public function deleteMulti($id){
        $image = Multipic::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Multipic::find($id)->delete();
        return redirect()->back()->with('succes', 'Data berhasil di hapus');
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('succes', 'Anda berhasil logout!');
    }

}

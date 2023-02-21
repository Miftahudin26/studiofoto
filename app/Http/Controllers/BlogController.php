<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    // keamanan untuk diteruskan ke page login
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // return view('blog');
        $blogs = Blog::paginate();
        return response()->json($blogs);
    
    }

    public function store(Request $request){
        $blog = Blog::create([
            'title' => $request->title,
            'quote' => $request->quote,
            'description' => $request->description,
            'image' => $request->image
        ]);
        return response()->json($blog);
    }
    
    public function detail(){
        return view('blog_single');
    }
}

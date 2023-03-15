<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    public function homeSlider(){

        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function addSlider(){
        return view('admin.slider.form_add_slider');
    }

    public static function storeSlider(Request $request){
        $image = $request->file('image');

        $generate_id = hexdec(uniqid().'.'.$image->getClientOriginalExtension());
        Image::make($image)->resize(1920, 1088)->save('image/file/'.$generate_id);

        $last_img = 'image/file/'.$generate_id;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.slider')->with('succes', 'Data berhasil ditambahkan');
    }

    public function editSlider($id){

        $slider = Slider::find($id);
        return view('admin.slider.edit_slider', compact('slider'));
    }

    public function updateSlider(Request $request, $id){

        $validated = $request->validate([
            'title' => 'required|unique:text|max:100',
            'description' => 'required|unique:images|max:255',
            'image' => 'required|mimes : jpeg,jpg,png',
        ],[
            'title.required' => 'Judul Image tidak boleh kosong!'
        ]);

        $old_image = $request->old_image;
        $image = $request->file('image');

        // MAPPING generate unik id
        $generate_id = hexdec(uniqid());
        $img_extension = strtolower($image->getClientOriginalExtension());

        //concat generate (namafile1234.png)
        $img_name = $generate_id. '.' .$img_extension;

        // roote location
        $location = 'image/multipic/';
        $last_img = $location.$img_name;
        $image->move($location, $img_name);

        // menimpa dan menghapus file lama
        unlink($old_image);

        // $data = Slider::find($id);
        // $data->update($request->all());

        // ORM
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.slider')->with('succes', 'Data Image berhasil ditambahkan');

    }

    public function deleteSlider($id){
        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Slider::find($id)->delete();
        return redirect()->back()->with('succes', 'Data berhasil di hapus');

    }
} 

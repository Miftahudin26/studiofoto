<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(){
        $datas = Reservasi::all();
        return view('admin.reservasi.index', compact('datas'));
    }

    public function addReservasi(){
        return view('reservasi');
    }

    public function insertdata(Request $request){
        dd($request->all());
        Reservasi::create($request->all());
        
    }
}

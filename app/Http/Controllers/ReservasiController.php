<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Barryvdh\DomPDF\PDF;
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

        Reservasi::insert([
            'name' => $request->name,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'paket' => $request->paket,
        ]);
        return view('popup');
    }

    public function exportpdf(){
        $data = Reservasi::all();
        view()->share('data', $data);
        $pdf = app('dompdf.wrapper')->loadView('reservasi-pdf'); // Menggunakan app() untuk membuat objek PDF
        return $pdf->stream();
        // return $pdf->download('reservasi.pdf');
        }
}

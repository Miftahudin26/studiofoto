<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{

        // keamanan untuk diteruskan ke page login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('portofolio');
    }
}

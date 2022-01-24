<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negara;
use App\Calon_konsumen;

class C_clnKonsumen extends Controller
{
    //
    public function index(){

        Negara::all();
        $calon_konsumen = Calon_konsumen::all();
        return view('calon_konsumen',compact('calon_konsumen'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_penawaran;
use App\Penawaran;
use App\Calon_konsumen;

class C_detail_penawaran extends Controller
{
    //
    public function index(){
    Penawaran::all();
    Calon_konsumen::all();
    $detail_penawaran = Detail_penawaran::all();
    return view('detail_penawaran',compact('detail_penawaran'));
    }    
}

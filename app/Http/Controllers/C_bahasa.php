<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahasa;


class C_bahasa extends Controller
{
    //
    function index() 
    { 
        //memanggil fungsi dari Eloquent untuk get all data 
        $bahasa = Bahasa::all(); 
        return view('bahasa_page',compact('bahasa'));
    }
    function tambahBahasa() 
    { 
        return view('tambahBahasa'); 
    }
    function insertData(Request $req) 
    { 
       Bahasa::create([ 
            'id_bhs' => $req->id_bhs, 
            'nama_bhs' => $req->nama_bhs
        ]); 
        return redirect('/bahasa');
    }  
}

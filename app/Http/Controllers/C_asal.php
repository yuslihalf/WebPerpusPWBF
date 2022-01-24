<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asal;


class C_asal extends Controller
{
    //
    function index() 
    { 
        //memanggil fungsi dari Eloquent untuk get all data 
        $asal = Asal::all(); 
        return view('asal_page',compact('asal'));
    }
    function tambahAsal() 
    { 
        return view('tambahAsal'); 
    }
    function insertData(Request $req) 
    { 
       Asal::create([ 
            'id_asal' => $req->id_asal, 
            'asal' => $req->nama_asal
        ]); 
        return redirect('/asal');
    }  
}

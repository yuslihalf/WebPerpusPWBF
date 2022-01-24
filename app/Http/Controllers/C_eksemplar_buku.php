<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Eksemplar_buku;

class C_eksemplar_buku extends Controller
{
    //
    public function index(){
        Buku::all();
        $eks = Eksemplar_buku::all();
        return view('blank_page_eksemplar_buku',compact('eks'));
    }   
    public function tambahEksemplarBuku() 
    { 
        $bk = Buku::all();
        return view('tambah_eksemplar_buku',compact('bk')); 
    }
    function insertData(Request $req) 
    { 
    
       Eksemplar_buku::create([ 
            'kode_buku' => $req->kode_buku, 
            'status' => $req->radio1, 
            'kondisi_eksemplar' => $req->radio2,
            'no_isbn' => $req->no_isbn
        ]);
        return redirect('/eksemplar_buku'); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Jenis_buku;
use App\Penerbit;
use App\Bahasa;

class C_buku extends Controller
{
    //
    public function index(){
        Jenis_buku::all();
        Penerbit::all();
        Bahasa::all();
        $buku = Buku::all();
        return view('blank_page_buku',compact('buku'));
    }   
    public function tambahBuku() 
    { 
        $jb = Jenis_buku::all();
        $pnb = Penerbit::all();
        $bhs = Bahasa::all();
        return view('tambah_buku',compact('jb','pnb','bhs')); 
    }
    function insertData(Request $req) 
    { 
    
       Buku::create([ 
            'no_isbn' => $req->no_isbn, 
            'judul_buku' => $req->judul, 
            'tahun_terbit' => $req->tahun,
            'penulis' => $req->penulis,
            'cetakan_ke' => $req->cetakan,
            'harga' => $req->harga,
            'jml_eksemplar' => $req->jml_eksemplar,
            'kategori_buku' => $req->radio1,
            'id_jb' => $req->id_jb,
            'id_penerbit' => $req->id_penerbit,
            'id_bhs' => $req->id_bhs
        ]);
        return redirect('/buku'); 
    }
}

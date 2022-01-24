<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_buku;

class C_jenis_buku extends Controller
{
    //
    public function index(){
        
        $jenis_buku = Jenis_buku::all();
        return view('blank_page_jenisbuku',compact('jenis_buku'));
    }   
    public function tambahJenisBuku() 
    { 
        return view('tambah_jenis_buku'); 
    }
    // public function insertData(Request $post) 
    // { 
    //     // tabel jenis buku 
    //      $jenis_buku = new Jenis_buku;
    //      $jenis_buku->id_jd = $post->id_jd;
    //      $jenis_buku->nama_jb = $post->nama_jb; 
    //      $jenis_buku->kode_jb = $post->kode_jb;

    //      $jenis_buku->safe();
 
    //     //kembali ke halaman data customer 
    //     return view('blank_page_jenisbuku',compact('jenis_buku'));
    // }
    function insertData(Request $req) 
    { 
       Jenis_buku::create([ 
            'id_jb' => $req->id_jb, 
            'nama_jb' => $req->nama_jb, 
            'kode_jb' => $req->kode_jb
        ]);
        return redirect('/jenisbuku'); 
    }
    function editJenisBuku($id_jb) 
    { 
        $data = Jenis_buku::where('id_jb', $id_jb)->get(); 
        return view('editJenisBuku', ['jenisbuku' => $data]); 
    } 
    function updateJenisBuku(Request $req) 
    { 
        $jenisbuku = Jenis_buku::where('id_jb', $req->id_jb) 


                    ->update([ 
                        'nama_jb' => $req->nama_jb,
                        'kode_jb' => $req->kode_jb
                    ]); 
 
        return redirect('/jenisbuku'); 
    }  
}

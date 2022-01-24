<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;
class C_penerbit extends Controller
{
    //
    public function index(){
        
        $penerbit = Penerbit::all();
        return view('blank_page_penerbit',compact('penerbit'));
    }   
    public function tambahPenerbit() 
    { 
        return view('tambah_penerbit'); 
    }
    function insertData(Request $req) 
    { 
       Penerbit::create([ 
            'id_penerbit' => $req->id_penerbit, 
            'nama_penerbit' => $req->nama_penerbit, 
            'alamat_penerbit' => $req->alamat_penerbit,
            'no_telp_penerbit' => $req->no_telp_penerbit, 
            'email_penerbit' => $req->email_penerbit
        ]);
        return redirect('/penerbit'); 
    } 
}

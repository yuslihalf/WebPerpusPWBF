<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerimaan;
use App\Pegawai;
use App\Asal;
use Auth;

class C_penerimaan extends Controller
{
    //
    public function index(){

        Pegawai::all();
        Asal::all();
        $penerimaan = Penerimaan::all();
        

        return view('penerimaan',compact('penerimaan'));
    }
    public function tambahPenerimaan() 
    { 
        $asal = Asal::all();
        // $pegawai = Pegawai::all();
        $pegawai= Pegawai::where('email_pegawai',Auth::user()->email)->first();
        return view('tambah_penerimaan',compact('asal','pegawai')); 
    }
    function insertData(Request $req) 
    { 
        $todayDate = date("Y-m-d");
       Penerimaan::create([ 
            'id_penerimaan' => $req->id_penerimaan, 
            'tgl_penerimaan' => $todayDate, 
            'jml_buku_diterima' => $req->jml_buku_diterima,
            'ket' => $req->keterangan,
            'nip' => $req->nip,
            'id_asal' => $req->id_asal
        ]);
        return redirect('/penerimaan'); 
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_login extends Controller
{
    //
    public function loginUser(Request $req){
        
        $pegawai = DB::table('pegawai')
         ->where('username','=',$req->uname)
         ->where('password','=',$req->pass)
         ->get();
        if($pegawai->isNotEmpty()){
            $req->session()->put('id',$pegawai[0]->nip);
            $req->session()->put('nama',$pegawai[0]->nama_pegawai);
            // return view('blank_page',['pegawai' => $pegawai]);
            return view ('blank_page');
        }else{
            return view('login');
        }
    } 
}

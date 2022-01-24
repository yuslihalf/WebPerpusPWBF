<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

use App\Pegawai; //panggil Model Pegawai 
class C_pegawai extends Controller
{
    //
    function index() 
    { 
        //memanggil fungsi dari Eloquent untuk get all data 
        $pegawai = Pegawai::all(); 
        return view('pegawai_page',compact('pegawai'));
    } 
    function tambahPegawai() 
    { 
        return view('tambahPegawai'); 
    } 
    function insertData(Request $req) 
    { 
       Pegawai::create([ 
            'nip' => $req->nip, 
            'nama_pegawai' => $req->nama_peg, 
            'email_pegawai' => $req->email_peg, 
            'password' => Hash::make($req->pass),
            'status' => "1" 
        ]); 
        User::create([
            'name' => $req->nama_peg,
            'email' => $req->email_peg,
            'password' => Hash::make($req->pass),
            'role' => "pegawai"
        ]);
        return redirect('/pegawai');
    }     
       
    function editPegawai($nip) 
    { 
        $data = Pegawai::where('nip', $nip)->get(); 
        return view('editPegawai', ['pegawai' => $data]); 
    } 
    function updatePegawai(Request $req) 
    { 
        $pegawai = Pegawai::where('nip', $req->nip) 


                    ->update([ 
                        'nama_pegawai' => $req->nama_pegawai,
                        'username' => $req->username, 
                        'password' => $req->password,
                        'status' => $req->status 
                    ]); 
 
        return redirect('/pegawai'); 
    }    
}

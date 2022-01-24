<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Peminjaman;
use App\Anggota;
use App\Pegawai;
use App\Detail_peminjaman;
use App\Buku;
use App\Eksemplar_buku;

class C_peminjaman extends Controller
{
    //
    
    public function index(){
        
        
        $anggota = Anggota::all();
        return view('blank_page_peminjaman',compact('anggota'));
        
    }
    public function cariAnggota(Request $req){

        $anggota= Anggota::where('nama_anggota','LIKE','%'.$req->nama_anggota.'%')->get();
        return view('blank_page_peminjaman',compact('anggota'));
    }   
    public function tambah_Peminjaman($nis_nip){
        // $pegawai = Pegawai::all();
        // $email = Auth::user()->email;
        // $pegawai = DB::table('pegawai')
        //  ->where('email_pegawai','=',$email)
        //  ->get();
        // $pinjam = Peminjaman::all()->last();
        $pegawai= Pegawai::where('email_pegawai',Auth::user()->email)->first();
        $data = Anggota::where('nis_nip', $nis_nip)->get(); 

        return view('tambahPeminjaman',compact('data','pegawai') ); 
    }
    function insertData(Request $req) 
    { 
        
        $todayDate = date("Y-m-d");
       Peminjaman::create([ 
            'id_peminjaman' => $req->id_peminjaman, 
            'jml_buku' => $req->jml_buku, 
            'tgl_pinjam' => $todayDate,
            'nis_nip' => $req->nis_nip,
            'nip' => $req->nip
        ]);
        $id_pinjam=$req->id_peminjaman;
        $eksemplar_buku = Eksemplar_buku::all();
        $buku = Buku::all(); 
        $data = Peminjaman::where('id_peminjaman', $id_pinjam)->get(); 
        return view('tambahDetailPeminjaman', ['peminjaman' => $data],compact('buku'),compact('eksemplar_buku')); 
    }
    public function tambahDetailPeminjaman($id_pinjam){
       
        $eksemplar_buku = Eksemplar_buku::all();
        $buku = Buku::all(); 
        $data = Peminjaman::where('id_peminjaman', $id_pinjam)->get(); 
        return view('tambahDetailPeminjaman', ['peminjaman' => $data],compact('buku'),compact('eksemplar_buku')); 
    }    
    function insertDetailPeminjaman(Request $req) 
    { 
        $id_pinjam=$req->id_peminjaman;
        $eksemplar_buku = Eksemplar_buku::all();
        $buku = Buku::all(); 
        $data = Peminjaman::where('id_peminjaman', $id_pinjam)->get(); 
        
        $todayDate = date("Y-m-d");
        $besokDate = date("Y-m-d",strtotime( "$todayDate +14 day" ));
       Detail_peminjaman::create([ 
            'kode_buku' => $req->kode_buku,
            'id_peminjaman' => $req->id_peminjaman,	
            'status_peminjaman' => $req->radio1,	
            'denda_perbuku' => $req->denda_perbuku,	
            'tgl_harusKembali' => $besokDate,
            'tgl_kembali' => null,
            'perpanjangan' => null,
            'status_verif' => $req->radio2
        ]);
        $cf= $req->btn1;
        if ($cf==1){
            return view('tambahDetailPeminjaman', ['peminjaman' => $data],compact('buku'),compact('eksemplar_buku'));
          } else {
            return redirect('/peminjaman');
          }
        
    }


    
}

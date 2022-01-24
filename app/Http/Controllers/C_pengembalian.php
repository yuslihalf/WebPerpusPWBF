<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use App\Anggota;
use App\Pegawai;
use App\Detail_peminjaman;
use App\Buku;
use App\Eksemplar_buku;

class C_pengembalian extends Controller
{
    //
    public function index(){
        
        
        $anggota = Anggota::all();
        return view('blank_page_pengembalian',compact('anggota'));
        
    }
    public function cariAnggota(Request $req){

        $anggota= Anggota::where('nama_anggota','LIKE','%'.$req->nama_anggota.'%')->get();
        return view('blank_page_pengembalian',compact('anggota'));
    }
    function listPengembalian(Request $req) 
    { 
        // Detail_peminjaman::all();
        // Eksemplar_buku::all();
        $peminjaman = DB::table('peminjaman')
         ->join('det_peminjaman','det_peminjaman.id_peminjaman','=','peminjaman.id_peminjaman')
         ->join('eksemplar_buku','eksemplar_buku.kode_buku','=','det_peminjaman.kode_buku')
         ->join('buku','buku.no_isbn','=','eksemplar_buku.no_isbn')
         ->where('peminjaman.nis_nip','=',$req->nis_nip)
         ->whereNull('det_peminjaman.tgl_kembali')
         ->get();
        
         
        return view('listPengembalianBuku', ['peminjaman' => $peminjaman]); 
        // Anggota::all();
        // Detail_peminjaman::all();
        // Eksemplar_buku::all();
        // $peminjaman = Peminjaman::where('nis_nip', $req->nis_nip)->get(); 
        //return view('listPengembalianBuku', compact('peminjaman')); 
    } 
    function insertPengembalian($id_peminjaman,$kode_buku,$nis_nip){
        $todayDate = date("Y-m-d");
        $data=$nis_nip;
        $pengembalian= DB::table('det_peminjaman')
        ->where('det_peminjaman.id_peminjaman','=',$id_peminjaman)
        ->where('det_peminjaman.kode_buku','=',$kode_buku)
        ->update(['tgl_kembali'=>$todayDate]);
        // $result=$this->listPengembalian($nis_nip);
        return redirect('/pengembalian');
    }
    
}

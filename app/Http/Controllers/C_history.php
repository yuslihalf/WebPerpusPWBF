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

class C_history extends Controller
{
    //
    public function index(){
        
        
        return view('history_peminjaman_index');
        
    }
    public function cariBuku(){
        
            $buku = DB::table('buku')
             ->join('eksemplar_buku','buku.no_isbn','=','eksemplar_buku.no_isbn')
             ->join('det_peminjaman','eksemplar_buku.kode_buku','=','det_peminjaman.kode_buku')
             ->join('peminjaman','peminjaman.id_peminjaman','=','det_peminjaman.id_peminjaman')
             ->join('anggota','anggota.nis_nip','=','peminjaman.nis_nip')
             
             ->get();
            return view('history_peminjaman_buku', ['buku' => $buku]);
        
        


    }
    public function cariBukuUp(Request $req){
        
            $buku = DB::table('buku')
             ->join('eksemplar_buku','buku.no_isbn','=','eksemplar_buku.no_isbn')
             ->join('det_peminjaman','eksemplar_buku.kode_buku','=','det_peminjaman.kode_buku')
             ->join('peminjaman','peminjaman.id_peminjaman','=','det_peminjaman.id_peminjaman')
             ->join('anggota','anggota.nis_nip','=','peminjaman.nis_nip')
             ->where('buku.no_isbn','LIKE','%'.$req->inp.'%')
             ->get();
            return view('history_peminjaman_buku', ['buku' => $buku]);
        
        


    }
    public function cariAnggota(){
        
        $peminjaman = DB::table('anggota')
         ->join('peminjaman','anggota.nis_nip','=','peminjaman.nis_nip')
         ->join('det_peminjaman','det_peminjaman.id_peminjaman','=','peminjaman.id_peminjaman')
         ->join('eksemplar_buku','eksemplar_buku.kode_buku','=','det_peminjaman.kode_buku')
         ->join('buku','buku.no_isbn','=','eksemplar_buku.no_isbn')
         ->get();
         return view('history_peminjaman_anggota', ['peminjaman' => $peminjaman]);
    
    


    }  
    public function cariAnggotaUp(Request $req){
        
            $peminjaman = DB::table('anggota')
             ->join('peminjaman','anggota.nis_nip','=','peminjaman.nis_nip')
             ->join('det_peminjaman','det_peminjaman.id_peminjaman','=','peminjaman.id_peminjaman')
             ->join('eksemplar_buku','eksemplar_buku.kode_buku','=','det_peminjaman.kode_buku')
             ->join('buku','buku.no_isbn','=','eksemplar_buku.no_isbn')
             ->where('peminjaman.nis_nip','=',$req->inp)
             ->orWhere('anggota.nama_anggota','LIKE','%'.$req->inp.'%')
             ->get();
             return view('history_peminjaman_anggota', ['peminjaman' => $peminjaman]);
        
        


    }  
}

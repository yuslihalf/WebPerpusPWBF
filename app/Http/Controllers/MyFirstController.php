<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index(){ 
    	 return view('webtest'); 
        // return "Hi, anda membuka view ini dari Controller."; 
    } 
    // public function nama() 
    // { 
    //     $nama = "Jendral Sudirman"; 
    //     return view('shownama', ['nama' => $nama]); 
    // }
    public function nama() 
    { 
        $nama = "Jendral Suharto"; 
        return view('showname', ['nama' => $nama]); 
    } 
     public function matkul() 
    { 
        $nama = "Udin Sarudin"; 
        $mk = ["alpro", "matdas", "pemrograman web", "jaringan komputer"]; 
        return view('matakuliah', ['nama'=>$nama, 'matkul'=>$mk]); 
    } 
    public function getNameFromUrl($nama) 
    { 
        return view('showname', ['nama' => $nama]);  
    } 
    public function formulir() 
    { 
        return view('formulir'); 
    } 
 
    public function proses(Request $req) 
    { 
        $nama = $req->input('nama'); 
        $alamat = $req->input('alamat'); 
        return "Nama : ".$nama." dan Alamat :".$alamat; 
    } 
    public function home() 
    { 
        return view('home'); 
    } 
 
    public function tentang() 
    { 
        return view('tentang'); 
    } 

 

}

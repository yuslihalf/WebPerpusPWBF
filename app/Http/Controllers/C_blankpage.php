<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class C_blankpage extends Controller
{
	
    
	// public function home()
	//     {
	//         $data = array(
	//             'menu' => 'Home',
	//             'submenu' => ''
	//         );
	
	//         return view('blank_page',$data);
	//     }	
    // public function jenisbuku()
	//     {
	//         $data = array(
	//             'menu' => 'data_master',
	//             'submenu' => 'jenisbuku'
	//         );
	
	//         return view('blank_page_jenisbuku',$data);
	// 	}
	public function blankpage(Request $req){
		if(Auth::check()){
			return view('blank_page');
		}else{
			return view('welcome');
		}
	}
	// di blank_page.blade modul {{ session()->get('nama') }}
	

}

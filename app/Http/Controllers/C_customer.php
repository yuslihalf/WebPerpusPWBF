<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class C_customer extends Controller
{
	public function index()
	{

		$customer = DB::table('customer')->get();

    
	    return view('customer_page',['customer' => $customer]);



	}
    public function tambahCustomer() 
    { 
        return view('tambah_customer_page'); 
    } 
    public function insertData(Request $post) 
    { 
        // tabel customer 
        DB::table('customer')->insert([ 
            'first_name' => $post->f_name, 
            'last_name' => $post->l_name, 
            'phone' => $post->phone, 
            'email' => $post->email, 
            'street' => $post->street, 
            'city' => $post->city, 
            'state' => $post->state, 
            'zip_code' => $post->zip_code 
        ]); 
 
        //kembali ke halaman data customer 
        return redirect('/customer'); 
    } 
    public function editCustomer($idCustomer) 
    { 
        $customer = DB::table('customer')->where('customer_id', $idCustomer)->get(); 
        return view('customer_edit',['customer' => $customer]); 
    } 
    public function updateCustomer(Request $post) 
    { 
        // update tabel customer 
        DB::table('customer')->where('customer_id', $post->customer_id)->update([ 
            'first_name' => $post->f_name, 
            'last_name' => $post->l_name, 
            'phone' => $post->phone, 
            'email' => $post->email, 
            'street' => $post->street, 
            'city' => $post->city, 
            'state' => $post->state, 
            'zip_code' => $post->zip_code 
        ]); 
 
        //kembali ke halaman data customer 
        return redirect('/customer'); 
    } 


}

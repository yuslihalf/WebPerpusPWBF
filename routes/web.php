<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hi', function () {
    return "Hi,lagi belajar laravel ni yee ....";
});

Route::get('myView', function () {
    return view('webtest');
});

Route::get('viewcontroll', 'MyfirstController@index'); 

Route::get('tampilnama', 'MyfirstController@nama'); 
Route::get('matkul', 'MyfirstController@matkul');

Route::get('getname/{nama}', 'MyfirstController@getNameFromUrl');  

Route::get('formulir', 'MyfirstController@formulir'); 
Route::post('formulir/proses', 'MyfirstController@proses'); 

Route::get('home', 'MyfirstController@home'); 
Route::get('tentang', 'MyfirstController@tentang'); 

 
Route::get('/my_blankpage','C_blankpage@blankpage');

Route::get('/login',function(){
	return view('login');
}); 
Route::post('/login/loginUser', 'C_login@loginUser');


Route::get('/customer', 'C_customer@index'); 
Route::get('/customer/tambahCustomer','C_customer@tambahCustomer'); 
Route::post('/customer/insertData','C_customer@insertData'); 
Route::get('/customer/editCustomer/{idCustomer}','C_customer@editCustomer'); 
Route::post('/customer/updateCustomer','C_customer@updateCustomer'); 

Route::get('/my_blank_page', 'C_blankpage@home');
Route::get('/jenisbuku', 'C_jenis_buku@index');
Route::get('/jenisbuku/tambahJenisBuku', 'C_jenis_buku@tambahJenisBuku');
Route::post('/jenisbuku/insertData','C_jenis_buku@insertData'); 
Route::get('/jenisbuku/editJenisBuku/{id_jb}', 'C_jenis_buku@editJenisBuku');
Route::post('/jenisbuku/updateJenisBuku','C_jenis_buku@updateJenisBuku'); 

Route::get('/pegawai', 'C_pegawai@index');
Route::get('/pegawai/tambahPegawai', 'C_pegawai@tambahPegawai'); 
Route::post('/pegawai/insertData', 'C_pegawai@insertData'); 
Route::get('/pegawai/editPegawai/{nip}','C_pegawai@editPegawai'); 
Route::post('/pegawai/updatePegawai', 'C_pegawai@updatePegawai'); 

Route::get('/penerimaan', 'C_penerimaan@index');
Route::get('/penerimaan/tambahPenerimaan', 'C_penerimaan@tambahpenerimaan');
Route::post('/penerimaan/insertData', 'C_penerimaan@insertData'); 

Route::get('/calon_konsumen', 'C_clnKonsumen@index');
Route::get('/detail_penawaran', 'C_detail_penawaran@index');	

Route::get('/penerbit', 'C_penerbit@index');
Route::get('/penerbit/tambahPenerbit', 'C_penerbit@tambahPenerbit');
Route::post('/penerbit/insertData','C_penerbit@insertData'); 

Route::get('/peminjaman', 'C_peminjaman@index');
Route::get('/peminjaman/cariAnggota', 'C_peminjaman@cariAnggota');
Route::get('/peminjaman/tambahPeminjaman/{nis_nip}', 'C_peminjaman@tambah_Peminjaman');
Route::post('/peminjaman/insertData', 'C_peminjaman@insertData'); 
Route::get('/peminjaman/tambahDetailPeminjaman/{id_pinjam}', 'C_peminjaman@tambahDetailPeminjaman');
Route::post('/peminjaman/insertDetailPeminjaman', 'C_peminjaman@insertDetailPeminjaman');

Route::get('/pengembalian', 'C_pengembalian@index');
Route::get('/pengembalian/cariAnggota', 'C_pengembalian@cariAnggota');
Route::get('/pengembalian/listPengembalianBuku/{nis_nip}', 'C_pengembalian@listPengembalian');
Route::get('/pengembalian/insertPengembalian/{id_peminjaman}/{kode_buku}/{nis_nip}', 'C_pengembalian@insertPengembalian');

Route::get('/historyPeminjaman', 'C_history@index');
Route::get('/historyPeminjaman/cariBuku', 'C_history@cariBuku');
Route::get('/historyPeminjaman/cariBukuUp', 'C_history@cariBukuUp');
Route::get('/historyPeminjaman/cariAnggota', 'C_history@cariAnggota');
Route::get('/historyPeminjaman/cariAnggotaUp', 'C_history@cariAnggotaUp');

Route::get('/asal', 'C_asal@index');
Route::get('/asal/tambahAsal', 'C_asal@tambahAsal'); 
Route::post('/asal/insertData', 'C_asal@insertData'); 
Route::get('/pegawai/editPegawai/{nip}','C_pegawai@editPegawai'); 
Route::post('/pegawai/updatePegawai', 'C_pegawai@updatePegawai'); 

Route::get('/bahasa', 'C_bahasa@index');
Route::get('/bahasa/tambahBahasa', 'C_bahasa@tambahBahasa'); 
Route::post('/bahasa/insertData', 'C_bahasa@insertData'); 

Route::get('/buku', 'C_buku@index');
Route::get('/buku/tambahBuku', 'C_buku@tambahBuku'); 
Route::post('/buku/insertData', 'C_buku@insertData'); 

Route::get('/eksemplar_buku', 'C_eksemplar_buku@index');
Route::get('/eksemplar_buku/tambahEksemplarBuku', 'C_eksemplar_buku@tambahEksemplarBuku'); 
Route::post('/eksemplar_buku/insertData', 'C_eksemplar_buku@insertData'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

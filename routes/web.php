<?php
use Illuminate\Routing\RouteGroup;
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
    return 'hallo';
});

Route::get('/home', function () {
    return 'halaman home';
});

Route::get('/beranda', function () {
    return 'halaman beranda';
});

Route::get('/about', function () {
    return 'halaman about';
});

Route::get('/laravel', function () {
    return 'halaman laravel';
});

Route::get('/nama-framework/{nama}/{tahun}', function ($nama,$tahun) {
    return 'nama framework yang dimasukan adalah :' .$nama. '<br> tahun <b>rilis</b> :' .$tahun;
});
//optional parameter
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'wajib diisi') {
    return 'nama saya adalah :'.$nama;
});

Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas,$tinggi) {
    return 'hasil luas segitiga :' .($alas * $tinggi) * 0.5 ;
});

//route group
Route::group(['prefix' => 'jurusan'], function () {
    Route ::get('/' ,function (){
        return 'berhasil' ;
    });
    Route ::get('/kelas/{namakelas}' ,function ($namakelas){
        return $namakelas ;
    });
    Route ::get('/walikelas/{nama}' ,function ($nama){
        return $nama ;
    });
});


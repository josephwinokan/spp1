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
    return view('/auth/login');
});
Route::get('/home', function () {
    return view('SELAMAT DATANG');
});

//route siswa
Route::group(['middleware' => ['auth','cekrole:admin']],function(){
    Route::get('/siswa/tambah','SiswaController@tambah');
    Route::post('/siswa/store','SiswaController@store');
    Route::get('/siswa/edit/{id}','SiswaController@edit');
    Route::post('/siswa/update','SiswaController@update');
    Route::get('/siswa/hapus/{id}','SiswaController@hapus');
});
    Route::get('/siswa','SiswaController@index');
//routepetugas
Route::group(['middleware' => ['auth','cekrole:admin']],function(){
    Route::get('/petugas/tambah','PetugasController@tambah');
    Route::post('/petugas/store','PetugasController@store');
    Route::get('/petugas/edit/{id}','PetugasController@edit');
    Route::post('/petugas/update','PetugasController@update');
    Route::get('/petugas/hapus/{id}','PetugasController@hapus');
    Route::post('/pegawai/update','PegawaiController@update');
});
Route::get('/petugas','PetugasController@index');

//route kelas
Route::group(['middleware' => ['auth','cekrole:admin']],function(){
    Route::get('/kelas/tambah','KelasController@tambah');
    Route::post('/kelas/store','KelasController@store');
    Route::get('/kelas/edit/{id}','KelasController@edit');
    Route::post('/kelas/update','KelasController@update');
    Route::get('/kelas/hapus/{id}','KelasController@hapus');
});
Route::get('/kelas','KelasController@index');

//route spp
Route::group(['middleware' => ['auth','cekrole:admin']],function(){
    Route::get('/spp/tambah','SppController@tambah');
    Route::post('/spp/store','SppController@store');
    Route::get('/spp/edit/{id}','SppController@edit');
    Route::post('/spp/update','SppController@update');
    Route::get('/spp/hapus/{id}','SppController@hapus');
});
Route::get('/spp','SppController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/credit', 'CreditController@index')->name('credit');

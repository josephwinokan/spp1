<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetugasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table petugas
    	$petugas = DB::table('petugas')->get();

    	// mengirim data petugas ke view index
    	return view('petugas/index',['petugas' => $petugas]);

    }
	// method untuk menampilkan view form tambah petugas
public function tambah()
{

	// memanggil view tambah
	return view('petugas/tambah');

}
// method untuk insert data ke table petugas
public function store(Request $request)
{
	// insert data ke table petugas
	DB::table('petugas')->insert([
		'id_petugas' => $request->id_petugas,
		'username' => $request->username,
		'password' => $request->password,
		'nama_petugas' => $request->nama_petugas,
		'level' => $request->level
	]);
	// alihkan halaman ke halaman petugas
	return redirect('/petugas');

}
// method untuk hapus data petugas
public function hapus($id)
{
	// menghapus data petugas berdasarkan id yang dipilih
	DB::table('petugas')->where('id_petugas',$id)->delete();
		
	// alihkan halaman ke halaman petugas
	return redirect('/petugas');
}
// method untuk edit data petugas
public function edit($id)
{
	// mengambil data petugas berdasarkan id yang dipilih
	$petugas = DB::table('petugas')->where('id_petugas',$id)->get();
	// passing data petugas yang didapat ke view edit.blade.php
	return view('petugas/edit',['petugas' => $petugas]);

}
// update data petugas
public function update(Request $request)
{
	// update data petugas
	DB::table('petugas')->where('id_petugas',$request->id)->update([
		'id_petugas' => $request->id_petugas,
		'username' => $request->username,
		'password' => $request->password,
		'nama_petugas' => $request->nama_petugas,
		'level' => $request->level
	]);
	// alihkan halaman ke halaman petugas
	return redirect('/petugas');
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kelas
    	$kelas = DB::table('kelas')->get();

    	// mengirim data kelas ke view index
    	return view('kelas/index',['kelas' => $kelas]);

    }
	// method untuk menampilkan view form tambah kelas
public function tambah()
{

	// memanggil view tambah
	return view('kelas/tambah');

}
// method untuk insert data ke table kelas
public function store(Request $request)
{
	// insert data ke table kelas
	DB::table('kelas')->insert([
		'id_kelas' => $request->id_kelas,
		'nama_kelas' => $request->nama_kelas,
		'kompetensi_keahlian' => $request->kompetensi_keahlian
	]);
	// alihkan halaman ke halaman kelas
	return redirect('/kelas');

}
// method untuk hapus data kelas
public function hapus($id_kelas)
{
	// menghapus data kelas berdasarkan id_kelas yang dipilih
	DB::table('kelas')->where('id_kelas',$id_kelas)->delete();
		
	// alihkan halaman ke halaman kelas
	return redirect('/kelas');
}
// method untuk edit data kelas
public function edit($id_kelas)
{
	// mengambil data kelas berdasarkan id_kelas yang dipilih
	$kelas = DB::table('kelas')->where('id_kelas',$id_kelas)->get();
	// passing data kelas yang did_kelasapat ke view edit.blade.php
	return view('kelas/edit',['kelas' => $kelas]);

}
// update data kelas
public function update(Request $request)
{
	// update data kelas
	DB::table('kelas')->where('id_kelas',$request->id_kelas)->update([
		'id_kelas' => $request->id_kelas,
		'nama_kelas' => $request->nama_kelas,
		'kompetensi_keahlian' => $request->kompetensi_keahlian
	]);
	// alihkan halaman ke halaman kelas
	return redirect('/kelas');
}
}
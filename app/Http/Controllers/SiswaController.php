<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table siswa
    	$siswa = DB::table('siswa')->get();

    	// mengirim data siswa ke view index
    	return view('siswa/index',['siswa' => $siswa]);

    }
	// method untuk menampilkan view form tambah siswa
public function tambah()
{

	// memanggil view tambah
	return view('siswa/tambah');

} 
// method untuk insert data ke table siswa
public function store(Request $request)
{
	// insert data ke table siswa
	DB::table('siswa')->insert([
		'nisn' => $request->nisn,
		'nis' => $request->nis,
		'nama' => $request->nama,
		'id_kelas' => $request->id_kelas,
		'alamat' => $request->alamat,
		'no_telp' => $request->no_telp,
		'id_spp' => $request->id_spp,
	]);
	// alihkan halaman ke halaman siswa
	return redirect('/siswa');

}
// method untuk hapus data siswa
public function hapus($id)
{
	// menghapus data siswa berdasarkan nisn yang dipilih
	DB::table('siswa')->where('nisn',$id)->delete();
		
	// alihkan halaman ke halaman siswa
	return redirect('/siswa');
}
// method untuk edit data siswa
public function edit($nisn)
{
	// mengambil data siswa berdasarkan nisn yang dipilih
	$siswa = DB::table('siswa')->where('nisn',$nisn)->get();
	// passing data siswa yang dnisnapat ke view edit.blade.php
	return view('siswa/edit',['siswa' => $siswa]);

}
// update data siswa
public function update(Request $request)
{
	// update data siswa
	DB::table('siswa')->where('nisn',$request->id)->update([
		'nisn' => $request->nisn,
		'nis' => $request->nis,
		'nama' => $request->nama,
		'id_kelas' => $request->id_kelas,
		'alamat' => $request->alamat,
		'no_telp' => $request->no_telp,
		'id_spp' => $request->id_spp,
	]);
	// alihkan halaman ke halaman siswa
	return redirect('/siswa');
}

public function getubah()
{
	echo 'ok';
}

}
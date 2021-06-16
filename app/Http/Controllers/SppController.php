<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SppController extends Controller
{
    public function index()
    {
    	// mengambil data dari table spp
    	$spp = DB::table('spp')->get();

    	// mengirim data spp ke view index
    	return view('spp/index',['spp' => $spp]);

    }
	// method untuk menampilkan view form tambah spp
public function tambah()
{

	// memanggil view tambah
	return view('spp/tambah');

}
// method untuk insert data ke table spp
public function store(Request $request)
{
	// insert data ke table spp
	DB::table('spp')->insert([
		'id_spp' => $request->id_spp,
		'tahun' => $request->tahun,
		'nominal' => $request->nominal
	]);
	// alihkan halaman ke halaman spp
	return redirect('/spp');

}
// method untuk hapus data spp
public function hapus($id_spp)
{
	// menghapus data spp berdasarkan id_spp yang dipilih
	DB::table('spp')->where('id_spp',$id_spp)->delete();
		
	// alihkan halaman ke halaman spp
	return redirect('/spp');
}
// method untuk edit data spp
public function edit($id_spp)
{
	// mengambil data spp berdasarkan id_spp yang dipilih
	$spp = DB::table('spp')->where('id_spp',$id_spp)->get();
	// passing data spp yang did_sppapat ke view edit.blade.php
	return view('spp/edit',['spp' => $spp]);

}
// update data spp
public function update(Request $request)
{
	// update data spp
	DB::table('spp')->where('id_spp',$request->id_spp)->update([
		'id_spp' => $request->id_spp,
		'tahun' => $request->tahun,
		'nominal' => $request->nominal
	]);
	// alihkan halaman ke halaman spp
	return redirect('/spp');
}
}
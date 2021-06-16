@extends('layouts/app')

<!DOCTYPE html>
<html>
<head>
	<title>SMKN6 BALIKPAPAN</title>
</head>
<body>
@section('container')
	<div class="container">
		<h1 class="mt-3">SMKN6 BALIKPAPAN</h1>
	</div>
@endsection

@section('isi')
	<div class="container">
	@foreach($siswa as $p)
	<form action="/siswa/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->nisn }}"> <br/>
		<label for="nisn" class="form-label">NISN </label>
    	<input type="text" class="form-control" id="nisn" name="nisn" required="required" value="{{ $p->nisn }}">
		<label for="nis" class="form-label">nis </label>
    	<input type="text" class="form-control" id="nis" name="nis" required="required" value="{{ $p->nis }}">
		<label for="nama" class="form-label">nama </label>
    	<input type="text" class="form-control" id="nama" name="nama" required="required" value="{{ $p->nama }}">
		<label for="id_kelas" class="form-label">id_kelas </label>
    	<input type="text" class="form-control" id="id_kelas" name="id_kelas" required="required" value="{{ $p->id_kelas }}">
		<label for="alamat" class="form-label">alamat </label>
    	<input type="text" class="form-control" id="alamat" name="alamat" required="required" value="{{ $p->alamat }}">
		<label for="no_telp" class="form-label">no_telp </label>
    	<input type="text" class="form-control" id="no_telp" name="no_telp" required="required" value="{{ $p->no_telp }}">
		<label for="id_spp" class="form-label">id_spp </label>
    	<input type="text" class="form-control" id="id_spp" name="id_spp" required="required" value="{{ $p->id_spp }}">
		
		<!-- <input type="hidden" name="id" value="{{ $p->nisn }}"> <br/> -->
		<!-- nisn <input type="text" required="required" name="nisn" value="{{ $p->nisn }}"> <br/> -->
		<!-- nis <input type="text" required="required" name="nis" value="{{ $p->nis }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		id_kelas <input type="text" required="required" name="id_kelas" value="{{ $p->id_kelas }}"> <br/>
		alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		no_telp <input type="text" required="required" name="no_telp" value="{{ $p->no_telp }}"> <br/>
		id_spp <input type="text" required="required" name="id_spp" value="{{ $p->id_spp }}"> <br/> -->
		<!-- <input type="submit" value="Simpan Data"> -->
		<br>
		<button class="btn btn-secondary"><a href="/siswa" class="text-light"> Kembali</a></button>
		<button type="submit" values="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	
	@endforeach
	</div>
@endsection
		

</body>
</html>
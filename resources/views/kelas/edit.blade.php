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
	@foreach($kelas as $p)
	<form action="/kelas/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->id_kelas }}"> <br/>
		<label for="id_kelas" class="form-label">id_kelas </label>
    	<input type="text" class="form-control" id="id_kelas" name="id_kelas" required="required" value="{{ $p->id_kelas }}">
		<label for="nama_kelas" class="form-label">nama_kelas </label>
    	<input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required="required" value="{{ $p->nama_kelas }}">
		<label for="kompetensi_keahlian" class="form-label">kompetensi_keahlian </label>
    	<input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" required="required" value="{{ $p->kompetensi_keahlian }}">
		<br>
		<button class="btn btn-secondary"><a href="/kelas" class="text-light"> Kembali</a></button>
		<button type="submit" values="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	
	@endforeach
	</div>
@endsection
		

</body>
</html>
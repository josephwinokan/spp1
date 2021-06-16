@extends('layouts/master')

<!DOCTYPE html>
<html>
<head>
	<title>SMKN6 BALIKPAPAN</title>
</head>
<body>
@section('container')
	<div class="container">
		<h1>SMKN6 BALIKPAPAN</h1>
	</div>
@endsection
<!-- <div class="mb-3"> -->
   
  <!-- </div> -->
@section('content')
	<div class="container">
	<form action="/kelas/store" method="post">
		{{ csrf_field() }}
		<br>
		<label for="id_kelas" class="form-label">ID KELAS </label>
    	<input type="text" class="form-control" id="id_kelas" name="id_kelas" required="required">
		<label for="nama_kelas" class="form-label">KELAS </label>
    	<input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required="required">
		<label for="kompetensi_keahlian" class="form-label">KOMPETENSI KEAHLIAN </label>
    	<input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" required="required">
		<br>
		<button class="btn btn-secondary"><a href="/kelas" class="text-light">kembali</a></button>
		<button type="submit" value="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	<!-- <a href="/kelas"> Kembali</a> -->
	</div>
@endsection
</body>
</html>
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
	<form action="/spp/store" method="post">
		{{ csrf_field() }}
		<br>
		<label for="id_spp" class="form-label">ID SPP </label>
    	<input type="text" class="form-control" id="id_spp" name="id_spp" required="required">
		<label for="tahun" class="form-label">TAHUN </label>
    	<input type="text" class="form-control" id="tahun" name="tahun" required="required">
		<label for="nominal" class="form-label">NOMINAL </label>
    	<input type="text" class="form-control" id="nominal" name="nominal" required="required">
		<br>
		<button class="btn btn-secondary"><a href="/spp" class="text-light">kembali</a></button>
		<button type="submit" value="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	<!-- <a href="/spp"> Kembali</a> -->
	</div>
@endsection
</body>
</html>
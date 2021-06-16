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
	@foreach($spp as $p)
	<form action="/spp/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->id_spp }}"> <br/>
		<label for="id_spp" class="form-label">ID SPP </label>
    	<input type="text" class="form-control" id="id_spp" name="id_spp" required="required" value="{{ $p->id_spp }}">
		<label for="tahun" class="form-label">TAHUN </label>
    	<input type="text" class="form-control" id="tahun" name="tahun" required="required" value="{{ $p->tahun }}">
		<label for="nominal" class="form-label">NOMINAL </label>
    	<input type="varchar" class="form-control" id="nominal" name="nominal" required="required" value="{{ $p->nominal }}">
		<br>
		<button class="btn btn-secondary"><a href="/spp" class="text-light"> Kembali</a></button>
		<button type="submit" values="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	
	@endforeach
	</div>
@endsection
		

</body>
</html>
@extends('layouts/master')

<!DOCTYPE html>
<html>
<head>
	<title>Joseph Alexander Winokan</title>
	@section('container')
		<div class="container">
			<h1 class="mt-3">SMKN6 BALIKPAPAN</h1>
		</div>
	@endsection
</head>
<body>
@section('isi')
<main class="">
        <!-- <div class="container"> -->
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header bg-secondary">{{ __('SMKN6BALIKPAPAN') }}
		<img src="{{ ('css/smkn6.png') }}" width="5%" class="rounded float-right" ></div>
                
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/siswa">Siswa</a>
            <a class="nav-link" href="/kelas">Kelas</a>
            <a class="nav-link" href="/spp">Spp</a>
            <a class="nav-link" href="/petugas">Petugas</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Pembayaran</a>
        </div>
        </div>
        </div>
        </nav>
<div class="container"> -->
	<!-- <h3>Data kelas</h3> -->

	<!-- <a href="/kelas/tambah"> + Tambah kelas Baru</a> -->
	<!-- <button type="button" class="btn btn-primary btn-sm"><a href="/kelas/tambah" class="text-dark" data-toggle="modal" data-target="#exampleModal">Tambah</a></button> -->
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Kelas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
    </div>
  </div>
</div>

	<table class="table table-striped">
	<thead class="table-dark">
		<tr>
			<th class="text-success">#</th>
			<th class="text-success">KELAS</th>
			<th class="text-success">JURUSAN</th>
			<th class="text-success">OPSI</th>
		</tr>
	</thead>
		@foreach($kelas as $p)
	<tbody>
		<tr>
			<td>{{ $p->id_kelas }}</td>
			<td>{{ $p->nama_kelas }}</td>
			<td>{{ $p->kompetensi_keahlian }}</td>
			<td>
				<button type="button" class="btn btn-warning btn-sm"><a href="/kelas/edit/{{ $p->id_kelas }}" class="text-dark">Edit</a></button>
				|
				<button type="button" class="btn btn-danger btn-sm"><a href="/kelas/hapus/{{ $p->id_kelas }}" onclick="return confirm('apakah anda yakin')" class="text-dark">Hapus</a></button>
			</td>
		</tr>
	</tbody>
		@endforeach
	</table>
	</div>

@endsection
</body>
</html>
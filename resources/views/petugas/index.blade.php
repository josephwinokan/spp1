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

		<!-- <div class="container">   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        </div>
        </nav>
<div class="container"> -->
<!-- <button type="button" class="btn btn-dark btn-sm"><a href="/siswa/tambah" class="text-light">Tambah Data Petugas</a></button> -->
	<!-- <h3>Data petugas</h3> -->

	<!-- <button type="button" class="btn btn-primary btn-sm"><a href="/petugas/tambah" class="text-dark">Tambah</a></button> -->
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Tambah Data Petugas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
	<form action="/petugas/store" method="post">
		{{ csrf_field() }}
		<br>
		<label for="id_petugas" class="form-label">ID </label>
    	<input type="text" class="form-control" id="id_petugas" name="id_petugas" required="required">
		<label for="username" class="form-label">USERNAME </label>
    	<input type="text" class="form-control" id="username" name="username" required="required">
		<label for="password" class="form-label">PASSWORD </label>
    	<input type="password" class="form-control" id="password" name="password" required="required">
		<label for="nama_petugas" class="form-label">NAMA PETUGAS </label>
    	<input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required="required">
		<br>
		<tr><td><div class="input-group mb-3">                                  
                        <div class="input-group-prepend">                                       
                           <label class="input-group-text">                                         
                              Level 
                           </label>
                        </div>
                        <select name="level" class="aria-label=">                           
                        <option value="">Silahkan Pilih</option>                                            
                              <option value="admin">admin</option>
                              <option value="petugas">petugas</option>
                       </select>
                     </div></tr></td>
			<!-- ID <input type="text" name="id_petugas" required="required"> <br/>
			USERNAME <input type="text" name="username" required="required"> <br/>
			PASSWORD <input type="password" name="password" required="required"> <br/>
			NAMA<input type="text" name="nama_petugas" required="required"> <br/>
			LEVEL <input type="text" name="level" required="required"> <br/> -->
			<!-- <input type="submit" value="Simpan Data"> -->

			<br>
		<button class="btn btn-secondary"><a href="/petugas" class="text-light"> Kembali</a></button>
		<button type="submit" value="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	
	</div>
      </div>
    </div>
  </div>
</div>
	<table class="table table-striped">
	<thead class="table-dark">
		<tr>
			<th class="text-success">#</th>
			<th class="text-success">USERNAME</th>
			<th class="text-success">PASSWORD</th>
			<th class="text-success">NAMA</th>
			<th class="text-success">LEVEL</th>
			<th class="text-success">OPSI</th>
		</tr>
	</thead>
		@foreach($petugas as $p)
	<tbody>
		<tr>
			<td>{{ $p->id_petugas }}</td>
			<td>{{ $p->username }}</td>
			<td>{{ $p->password }}</td>
			<td>{{ $p->nama_petugas }}</td>
            <td>{{ $p->level }}</td>
			<td>
				<button type="button" class="btn btn-warning btn-sm"><a href="/petugas/edit/{{ $p->id_petugas }}" class=text-dark>Edit</a></button>
				|
				<button type="button" class="btn btn-danger btn-sm"><a href="/petugas/hapus/{{ $p->id_petugas }}" onclick="return confirm('apakah anda yakin')"  class="text-dark">Hapus</a></button>
			</td>
		</tr>
	</tbody>
		@endforeach
	</table>
	</div>

@endsection
</body>
</html>
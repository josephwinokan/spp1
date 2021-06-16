@extends('layouts/master')



<!DOCTYPE html>
<html>
<head>
	<title>Joseph Alexander Winokan</title>
	@section('container')
		<div class="container">
			<h1 class="">SMKN6 BALIKPAPAN</h1>
		</div>
	@endsection
</head>
<body>


@section('isi')
<main class="">
        <!-- <div class="container"> -->
			
        <!-- <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header bg-secondary">{{ __('SMKN6BALIKPAPAN') }}
		<img src="{{ ('css/smkn6.png') }}" width="5%" class="rounded float-right" ></div> -->
                
	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Tambah Data Siswa
	</button> -->

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
		<form action="/siswa/store" method="post">
			{{ csrf_field() }}
			<br>
			<label for="nisn" class="form-label">NISN </label>
			<input type="text" class="form-control" id="nisn" name="nisn" required="required">
			<label for="nis" class="form-label">NIS </label>
			<input type="text" class="form-control" id="nis" name="nis" required="required">
			<label for="nama" class="form-label">NAMA </label>
			<input type="text" class="form-control" id="nama" name="nama" required="required">
			<label for="id_kelas" class="form-label">ID KELAS </label>
			<input type="text" class="form-control" id="id_kelas" name="id_kelas" required="required">
			<label for="alamat" class="form-label">ALAMAT </label>
			<input type="text" class="form-control" id="alamat" name="alamat" required="required">
			<label for="no_telp" class="form-label">TELP </label>
			<input type="text" class="form-control" id="no_telp" name="no_telp" required="required">
			<label for="id_spp" class="form-label">ID SPP </label>
			<input type="text" class="form-control" id="id_spp" name="id_spp" required="required">
			<br>
			<button class="btn btn-secondary"><a href="/siswa" class="text-light">kembali</a></button>
			<button type="submit" value="Simpan Data" class="btn btn-primary">SUBMIT</button>
		</form>
		</div>
		</div>
		</div>
	</div>
	</div>
	
	<table class="table table-striped ">
		<thead class="table-dark">
		<tr class="text-success">
			<br>
	<button type="button" class="btn btn-success btn-sm"><a href="/siswa/tambah" class="text-light" data-toggle="modal" data-target="#exampleModal">Tambah Data Siswa</a></button>
	<br>
			<th class="text-success">NISN</th>
			<th class="text-success">NIS</th>
			<th class="text-success">NAMA</th>
			<th class="text-success">KELAS</th>
			<th class="text-success">ALAMAT</th>
			<th class="text-success">TELP</th>
			<th class="text-success">ID SPP</th>
			<th class="text-center text-success">OPSI</th>
		</tr>
		</thead>
		@foreach($siswa as $p)
		<tbody>
		<tr>
			<td>{{ $p->nisn }}</td>
			<td>{{ $p->nis }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->id_kelas }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->no_telp }}</td>
            <td>{{ $p->id_spp }}</td>
			<td>
				
				<button type="button" class="btn btn-warning btn-sm"><a href="/siswa/edit/{{ $p->nisn }}" class="text-dark"data-toggle="modal" data-target="#editmodal"
					data-toggle="modal"
					data-target="#editmodal-{{ $p->nisn }}"
					data-nis = "{{$p->nis}}"
					data-nama = "{{$p->nama}}"
					data-id_kelas = "{{$p->id_kelas}}"
					data-alamat = "{{$p->alamat}}"
					data-no_telp = "{{$p->no_telp}}"
					data-id_spp = "{{$p->id_spp}}"
				>Edit</a></button>
				|<!-- Button trigger modal -->


				<button type="button" class="btn btn-danger btn-sm"><a href="/siswa/hapus/{{ $p->nisn }}" onclick="return confirm('apakah anda yakin')" class="text-dark">Hapus</a></button>
			</td>
		</tr>
		</tbody>
		@endforeach
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
		
		<br>
		<button class="btn btn-secondary"><a href="/siswa" class="text-light"> Kembali</a></button>
		<button type="submit" values="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	@endforeach
	
	</div>
      </div>
    </div>
  </div>
</div>
	</table>
	<!-- </div> -->

@endsection
</body>
</html>
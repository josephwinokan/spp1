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
	@foreach($petugas as $p)
	<form action="/petugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_petugas }}"> <br/>
		<label for="id_petugas" class="form-label">ID PETUGAS </label>
    	<input type="text" class="form-control" id="id_petugas" name="id_petugas" required="required" value="{{ $p->id_petugas }}">
		<label for="username" class="form-label">USERNAME </label>
    	<input type="text" class="form-control" id="username" name="username" required="required" value="{{ $p->username }}">
		<label for="password" class="form-label">PASSWORD </label>
    	<input type="password" class="form-control" id="password" name="password" required="required" value="{{ $p->password }}">
		<label for="nama_petugas" class="form-label">NAMA PETUGAS </label>
    	<input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required="required" value="{{ $p->nama_petugas }}">
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
		<!-- <input type="hidden" name="id" value="{{ $p->id_petugas }}"> <br/> -->
		<!-- id_petugas <input type="text" required="required" name="id_petugas" value="{{ $p->id_petugas }}"> <br/>
		username <input type="text" required="required" name="username" value="{{ $p->username }}"> <br/>
		password <input type="password" required="required" name="password" value="{{ $p->password }}"> <br/>
		nama_petugas <input type="text" required="required" name="nama_petugas">{{ $p->nama_petugas }}</textarea> <br/>
        level <input type="text" required="required" name="level" value="{{ $p->level }}"> <br/> -->
		<!-- <input type="submit" value="Simpan Data"> -->
		<br>
		<button class="btn btn-secondary"><a href="/petugas" class="text-light"> Kembali</a></button>
		<button type="submit" values="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>

	@endforeach
	</div>
@endsection
		

</body>
</html>
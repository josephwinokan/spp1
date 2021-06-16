@extends('layouts/master')

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
@endsection
</body>
</html>
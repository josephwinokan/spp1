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
	<form action="/siswa/store" method="post">
		{{ csrf_field() }}
		<br>
		<label for="nisn" class="form-label">NISN </label>
    	<input type="text" class="form-control" id="nisn" name="nisn" required="required">
		<label for="nis" class="form-label">NIS </label>
    	<input type="text" class="form-control" id="nis" name="nis" required="required">
		<label for="nama" class="form-label">NAMA </label>
    	<input type="text" class="form-control" id="nama" name="nama" required="required">
		
		<!-- <label for="id_kelas" class="form-label">ID KELAS </label>
    	<input type="text" class="form-control" id="id_kelas" name="id_kelas" required="required"> -->
		<label for="alamat" class="form-label">ALAMAT </label>
    	<input type="text" class="form-control" id="alamat" name="alamat" required="required">
		<label for="no_telp" class="form-label">TELP </label>
    	<input type="text" class="form-control" id="no_telp" name="no_telp" required="required">
		<label for="id_spp" class="form-label">ID SPP </label>
    	<input type="text" class="form-control" id="id_spp" name="id_spp" required="required">
		<br>
		<tr><td><div class="input-group mb-3">                                  
                        <div class="input-group-prepend">                                       
                           <label class="input-group-text">                                         
                             ID KELAS 
                           </label>
                        </div>
                        <select name="level" class="aria-label=">                           
                        <option value="">Silahkan Pilih</option>                                            
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                       </select>
                     </div></tr></td>
			<!-- ID <input type="text" name="id_petugas" required="required"> <br/>
			USERNAME <input type="text" name="username" required="required"> <br/>
			PASSWORD <input type="password" name="password" required="required"> <br/>
			NAMA<input type="text" name="nama_petugas" required="required"> <br/>
			LEVEL <input type="text" name="level" required="required"> <br/> -->
			<!-- <input type="submit" value="Simpan Data"> -->
		<!-- nisn <input type="text" name="nisn" required="required"> <br/> -->
		<!-- nis <input type="text" name="nis" required="required"> <br/> -->
		<!-- nama <input type="text" name="nama" required="required"> <br/>
		id_kelas <input type="text" name="id_kelas" required="required"> <br/>
		alamat <input type="text" name="alamat" required="required"> <br/>
		no_telp <input type="text" name="no_telp" required="required"> <br/>
		id_spp<input type="text" name="id_spp" required="required"> <br/> -->
		<!-- <input type="submit" value="Simpan Data"> -->
		<br>
		<button class="btn btn-secondary"><a href="/siswa" class="text-light">kembali</a></button>
		<button type="submit" value="Simpan Data" class="btn btn-primary">SUBMIT</button>
	</form>
	<!-- <a href="/siswa"> Kembali</a> -->
	</div>
@endsection
</body>
</html>
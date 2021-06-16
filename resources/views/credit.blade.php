@extends('layouts/master')

@section('isi')

  <div class="row mt-2 pl-4">
    <div class="col">
        <div class="card text" style="width: 40rem;">
        <img src="{{ ('css/ntt.jpg') }}" width="300px" height="550px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Joseph Alexander winokan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
        </div>
    </div>

    <div class="col pr-2">
        <div class="card" style="width: 30rem;">
        <img src="{{ ('css/smkn6.png') }}" width="200px" height="240px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SMKN6 BALIKPAPAN</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
        </div>

    <div class="card" style="width: 30rem; height:15rem;">
    <div class="card-header">
         <h5>Biodata</h5>
    </div>
    <ul class="list-group list-group-flush">
        <h5 class="list-group-item">Joseph Alexander Winokan</h5>
        <h5 class="list-group-item">XII</h5>
        <h5 class="list-group-item">Rekayasa Perangkat Lunak</h5>
    </ul>
    </div>


  </div>

@endsection
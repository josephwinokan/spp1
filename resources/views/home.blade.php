@extends('layouts/master')

@section('isi')
<main>
  
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('SMKN6BALIKPAPAN') }}
        <img src="{{ ('css/smkn6.png') }}" width="5%" class="rounded float-right" > </div>
                
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
        </div> -->
        </div>

        </nav>

        <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="{{ ('css/smkn6.png') }}" width="35%" > 
            <h1 class="display-4">SMKN6BALIKPAPAN</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
        </div>

    <section id="about" class="about">  
        <div class="container">
        <div class="row">
        <div class="col text-center">
            <h2>About</h2>
        </div>
        </div>

        <div class="row">
        <div class="col">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In dicta voluptas fuga maxime, voluptate aut minus. Corrupti iste sed laboriosam consectetur asperiores? Nisi est iure harum. Eius cupiditate vitae fuga.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam officia quibusdam explicabo eius ullam ex sapiente eveniet vitae rerum, modi, consequuntur consequatur possimus praesentium quis doloremque harum perferendis quasi sequi?</p>
        </div>
                
        <div class="col">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A similique nostrum autem at, accusamus velit perferendis voluptas explicabo dolorum officiis optio unde cum ipsum, accusantium molestias totam nobis soluta recusandae?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, vero? Tempore voluptatem consequatur laudantium odit? Amet quibusdam, eaque ex dolore unde, eligendi harum neque corrupti veniam reprehenderit vitae iusto deleniti!</p>
        </div>
        </div>
        </div>

    </section>

    <section id="slide" class="slide bg-light mb-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{ ('css/kepsek.jpeg') }}" width="380px" height="240px" class="mt-2 mb-2 pl-2" > 
      <div class="carousel-caption d-none d-md-block text-dark pb-5">
        <h5 class="text-right">Penyerahan SK Plt. Kepala SMKN 6 Balikpapan</h5>
        <div class="text-right">(09/09/2020) bertempat di Aula SMKN 6 Balikpapan berlangsung acara </div>
        <div class="text-right">penyerahan SK Plt Kepala Sekolah SMKN 6 Balikpapan oleh Kepala Cabang .</div>
        <div class="text-right">Dinas Provinsi Kaltim, Bpk Muhtanto, disaksikan oleh Bpk dan Ibu Pengawas SMK.</div>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ ('css/pls.jpg') }}" width="380px" height="240px" class="mt-2 mb-2 pl-2" > 
      <div class="carousel-caption d-none d-md-block text-dark pb-5">
        <h5 class="text-right">Pelaksanaan PLS Bagi Siswa Baru thn 2019 / 2020 mulai </h5>
        <div class="text-right">Siswa baru SMKN 6 Balikpapan tahun pelajaran 2019 / 2020 selama tiga hari</div>
        <div class="text-right">tanggal 15 – 18 Juli 2019 sedang mengikuti kegiatan Pengenalan Lingkungan Sekolah  </div>
        <div class="text-right">(PLS) Kegiatan ini wajib diikuti oleh semua siswa baru yang pada tahun berjumlah 320 siswa.</div>
      </div>
    </div>
    <div class="carousel-item">
         <img src="{{ ('css/pelepasan.jpg') }}" width="380px" height="240px" class="mt-2 mb-2 pl-2" > 
      <div class="carousel-caption d-none d-md-block text-dark pb-5">
        <h5 class="text-right">Pelepasan Siswa SMKN 6 Balikpapan Angkatan ke 4 </h5>
        <div class="text-right">Pelepasan siswa SMK Negeri 6 Balikpapan angkatan ke 4 berlangsung </div>
        <div class="text-right">meriah yang digelar di Grand Ballroom Hotel Platinum Balikpapan (28/4/2018), </div>
        <div class="text-right">dihadiri sebanyak 408 siswa dari enam jurusan yaitu TITL, TP, TKR, TKJ, RPL dan MMM.</div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

    <section id="portfolio" class="portfolio bg-light mb-3">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <h2>Portfolio</h2>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/1.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/2.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/4.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/5.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/6.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/7.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/8.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>

                <div class="col-md">
                <div class="card">
                <img src="{{ ('css/card/9.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
                </div>
            </div>

            </div>
        </section>

        <footer class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col text-white text-center pt-3">
                        <p>Joseph Alexander Winokan</p>
                    </div>
                </div>
            </div>
        </footer>


        @endsection
     
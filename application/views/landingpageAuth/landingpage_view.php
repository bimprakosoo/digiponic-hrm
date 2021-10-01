<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" />
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
  </head>
  <body>
       <!-- Awal menu -->
       <header class="body-warp">
       <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/image/Logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>LandingPage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Departemen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>LandingPage/departemen">Departemen</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>LandingPage/karyawan">Karyawan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/Lowongan">Lowongan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/kontak">Kontak</a>
                        </li>

                    </ul>
                    <div class="gap-3 ms-auto">
                    <div class="flex-shrink-0 dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="45" height="45" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</header>

     <!-- Awal menu -->
     <section class="slider">
      <div class="slider w-100">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>/assets/image/slide/slide-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>/assets/image/slide/slide-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>/assets/image/slide/slide-3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
        </section>

        <section class="landTentang" id="landTentang">
          <h2>
            Tentang Kami
          </h2>

          <div class="container d-flex justify-content-center">
          <div class="card mb-3 pt-3" style="max-width: 1240px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="<?php echo base_url();?>assets/image/landingpage/tentang.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title text-start">PT MAJU BERSAMA</h5>
                            <p class="card-text text-start">PT. MAJU BERSAMA perusahaan yang telah berdiri sejak tahun dengan berbagai bidang kegiatan. 
                              Perusahaan kami berdiri dengan motto “memberikan kepuasan kepada relasi” 
                              sebagai acuan dalam bekerja sehingga kami mendapat kepercayaan penuh dalam mengembangkan bisnis. </p>
                              <a href="<?php echo base_url();?>Tentang/Tentang" class="btn btn-primary">Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
         
        </section>

        <section class="landDepartemen" id="landDepartemen">
        <h2>
            Departemen
          </h2>

          <div class="container-fluid py-5">
                <div class="card-group">
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Departemen</a>

                        </div>
                        <div class="card me-3 ms-3">
                            <img src="<?php echo base_url();?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">Departemen Sekertaris Perusahaan</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Departemen</a>
                        </div>
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">Departemen Keuangan</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                           </div>
                           <a href="#" class="btn btn-primary">Lihat Departemen</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto">
                    <a href="<?php echo base_url();?>LandingPage/departemen" class="btn btn-primary">Selengkapnya</a>
                    </div>
        </section >
        
        <section class="landKaryawan" id="landKaryawan">
        <h2>
            Karyawan Berprestasi
          </h2>
          <p>
          Inilah beberapa karyawan yang bekerja di PT MAJU BERSAMA
          </p>
          <div class="container-fluid py-5">
                <div class="card-group">
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start">
                            <div class="row justify-content-between">
                                <div class="col-6 text-start">
                                    Nama  
                                    </div>
                                    <div class="col-6 text-end">
                                    Sean zayn
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2">
                                    <div class="col-6 text-start">
                                    Departemen  
                                    </div>
                                    <div class="col-6 text-end">
                                    Produksi
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2 pb-3">
                                    <div class="col-6 text-start">
                                    Divisi  
                                    </div>
                                    <div class="col-6 text-end">
                                    Operation
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                              <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                              </div>
                              </div>
                              </div>
                        <div class="card  ms-2">
                            <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start ">
                            <div class="row justify-content-between">
                                <div class="col-6 text-start">
                                    Nama  
                                    </div>
                                    <div class="col-6 text-end">
                                    Sean zayn
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2">
                                    <div class="col-6 text-start">
                                    Departemen  
                                    </div>
                                    <div class="col-6 text-end">
                                    Produksi
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2 pb-3">
                                    <div class="col-6 text-start">
                                    Divisi  
                                    </div>
                                    <div class="col-6 text-end">
                                    Operation
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                              <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                              </div>
                              </div>
                              </div>
                        <div class="card me-2 ms-2">
                            <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start ">
                            <div class="row justify-content-between">
                                <div class="col-6 text-start">
                                    Nama  
                                    </div>
                                    <div class="col-6 text-end">
                                    Sean zayn
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2">
                                    <div class="col-6 text-start">
                                    Departemen  
                                    </div>
                                    <div class="col-6 text-end">
                                    Produksi
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2 pb-3">
                                    <div class="col-6 text-start">
                                    Divisi  
                                    </div>
                                    <div class="col-6 text-end">
                                    Operation
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                              <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                              </div>
                              </div>
                              </div>
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start ">
                            <div class="row justify-content-between">
                                <div class="col-6 text-start">
                                    Nama  
                                    </div>
                                    <div class="col-6 text-end">
                                    Sean zayn
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2">
                                    <div class="col-6 text-start">
                                    Departemen  
                                    </div>
                                    <div class="col-6 text-end">
                                    Produksi
                                    </div>
                                </div>
                                <div class="row justify-content-between pt-2 pb-3">
                                    <div class="col-6 text-start">
                                    Divisi  
                                    </div>
                                    <div class="col-6 text-end">
                                    Operation
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                              <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                              </div>
                              </div>
                              </div>
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto">
                    <a href="<?php echo base_url();?>LandingPage/karyawan" class="btn btn-primary">Selengkapnya</a>
                    </div>
        </section>

        <section class="landLowongan" id="landLowongan">
        <h2>
            Lowongan
        </h2>
        <p>
          Beberapa lowongan pekerjaan yang sedang dibutuhkan, bagi yang minat langsung bisa melamar dibawah ini
        </p>

        <div class="container py-5">
                <div class="card-group">
                        <div class="card">
                            <div class="d-flex justify-content-center pt-4" style="width: 100%;">
                            <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url();?>assets/image/lowongan/icon-analityc.svg" class="card-img-top"/>
                            </div>
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title text-center">Accounting staff</h5>
                            <p class="card-text">
                              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
                              penyusunan laporan keuangan dan perpajakan.
                            </p>
                            <p>Lokasi - Malang</p>
                            <p>
                            <strong>Posted Date</strong> <br /> 11 September 2021
                            </p>
                            <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                              </a>
                            </div>
                              
                            </div>
                        </div>
                        <div class="card me-4 ms-4">
                        <div class="d-flex justify-content-center pt-4" style="width: 100%;">
                            <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url();?>assets/image/lowongan/icon-analityc.svg" class="card-img-top"/>
                            </div>
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title text-center">Accounting staff</h5>
                            <p class="card-text">
                              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
                              penyusunan laporan keuangan dan perpajakan.
                            </p>
                            <p>Lokasi - Malang</p>
                            <p>
                            <strong>Posted Date</strong> <br /> 11 September 2021
                            </p>
                            <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                              </a>
                            </div>
                              
                            </div>
                        </div>
                        <div class="card h-100 ">
                        <div class="d-flex justify-content-center pt-4" style="width: 100%;">
                            <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url();?>assets/image/lowongan/icon-analityc.svg" class="card-img-top"/>
                            </div>
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title text-center">Accounting staff</h5>
                            <p class="card-text">
                              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
                              penyusunan laporan keuangan dan perpajakan.
                            </p>
                            <p>Lokasi - Malang</p>
                            <p>
                            <strong>Posted Date</strong> <br /> 11 September 2021
                            </p>
                            <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                              </a>
                            </div>
                              
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="selengkapnya d-grid gap-2 col-2 mx-auto">
                    <a href="<?php echo base_url();?>LandingPage/lowongan" class="btn btn-primary">Selengkapnya</a>
                    </div>
        </section>

        <section class="landArtikel" id="landArtikel">
        <h2>
            Artikel
        </h2>
        <p>
        Beberapa artikel tentang pentang perusahaan yang bisa anda baca
        </p>
        <div class="container py-5">
                <div class="card-group">
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card me-3 ms-3">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                    </div>
                    <div class="selengkapnya d-grid gap-2 col-2 mx-auto">
                    <a href="<?php echo base_url();?>LandingPage/artikel" class="btn btn-primary">Selengkapnya</a>
                    </div>
        </section>
        
        <section class="landKontak" id="landKontak">
        <h2>
            Kontak Kami
        </h2>

        <div class="container px-4 py-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 ">
                    <h4>Kontak Informasi</h4>
                    <div class="jalan pt-5">
                        <div class="d-inline pe-2">
                        <img src="<?php echo base_url();?>assets/image/hubungi/lokasi.svg"/>
                        </div>
                        <div class="d-inline">Jl. Raya Tidar No.100, Karangbesuki,
                        Kec. Sukun, Kota Malang, Jawa Timur</div>
                    </div>
                    <div class="tlpn pt-4">
                        <div class="d-inline pe-2">
                        <img src="<?php echo base_url();?>assets/image/hubungi/tlpn.svg"/>
                        </div>
                        <div class="d-inline">021 6010948/ 6269552/ 62203958</div>
                    </div>
                    <div class="mailo pt-4">
                        <div class="d-inline pe-2">
                        <img src="<?php echo base_url();?>assets/image/hubungi/email.svg"/>
                        </div>
                        <div class="d-inline">MajuJaya@gmail.com</div>
                    </div>
                    <div class="wa py-4">
                        <div class="d-inline pe-2">
                        <img src="<?php echo base_url();?>assets/image/hubungi/wa.svg"/>
                        </div>
                        <div class="d-inline">085282832341</div>
                    </div>
                </div>
            </div>
            <div class="col">
                 <div class="HubungiKami p-3">
                 <h4>Hubungi Kami</h4>
                    <form class="row g-3 pt-5">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="Notlpn" placeholder="No. Telp/WA">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="Subjek" placeholder="Subjek">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="TextAreaPesan" rows="4" placeholder="Pesan"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="kirim btn btn-primary">Kirim</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
        </section>
         <!-- Akhir menu -->
    <footer id="footer">
      <div class="container-fluid">
        <div class="copyright">
          &copy;21
          <span>
            PT. Maju Bersama - Nelongso.com - All rights reserved.
            <br />
            Develop by
          </span>
          <span id="digi"> Digiponic.co.id</span>
        </div>

        <div class="credits">
          <div class="social-links">
            <a href="#" class="twitter">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot01.svg"/>
            </a>
            <a href="#" class="facebook">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot02.svg" />
            </a>
            <a href="#" class="instagram">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot03.svg" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>
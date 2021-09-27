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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
  </head>
  <body>
       <!-- Awal menu -->
       <header class=body-warp>
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
                            <a class="nav-link" href="<?php echo base_url(); ?>Tentang/tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Departemen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Departemen</a></li>
                                <li><a class="dropdown-item" href="#">Karyawan</a></li>
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
                        <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    <header>

     <!-- Awal menu -->
    <section class="hubungi" id="hubungi">
    <div className="row">
           <img src="<?php echo base_url();?>assets/image/hubungi/slide-hubungi.svg" class="d-block w-100" />
        </div>
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
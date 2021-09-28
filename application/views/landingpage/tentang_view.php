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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
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
                        <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    <header>
<!-- Akhir menu -->
    <!-- <footer id="footer ">
      <div className="container ">
        <div className="copyright bg-dark">
          &copy;21
          <span>
            PT. Maju Bersama - Nelongso.com - All rights reserved.
            <br />
            Develop by
          </span>
          <span id="digi"> Digiponic.co.id</span>
        </div>

        <div className="credits">
          <div className="social-links">
            <a href="#" className="twitter">
              <img src="<?php echo base_url();?>assets/image/Footer/foot01.svg"/>
            </a>
            <a href="#" className="facebook">
              <img src="<?php echo base_url();?>assets/image/Footer/foot02.svg" />
            </a>
            <a href="#" className="instagram">
              <img src="<?php echo base_url();?>assets/image/Footer/foot03.svg" />
            </a>
          </div>
        </div>
      </div>
    </footer> -->
     <!-- Awal menu -->
     
     <img src="<?php echo base_url();?>assets/image/Tentang/slide-tentang.svg" class="d-block w-100" />

<section class="container page-1">
    
    <div class="tentang">
            <h2 class="pt">PT. MAJU BERSAMA</h2>
            <p class="text-break-1">
                PT. MAJU BERSAMA perusahaan yang telah berdiri sejak tahun
                dengan berbagai bidang kegiatan. Perusahaan kami berdiri dengan
                motto “memberikan kepuasan kepada relasi” sebagai acuan dalam
                bekerja sehingga kami mendapat kepercayaan penuh dalam
                mengembangkan bisnis. Oleh karena itu kepercayaan yang telah
                diberikan oleh relasi kami dan atas dasar itu pula kami terus
                mengembangkan sumber daya manusia agar dapat menjalankan tugas
                dan pekerjaannya dengan baik dan terampil.
            </p>
            <p class="text-break-2">
                Keterampilan dan keuletan para staf dan karyawan dapat
                menghasilkan pola management yang lebih efektif dan ekonomis.
                Adalah suatu kehormatan besar apabila para Relasi dan Client
                kami yang baru dapat kiranya mengikut sertakan kami dalam
                menerima segala bentuk kepercayaan untuk kerja sama, sehingga
                dapat dibuktikan kinerja PT.MAJU BERSAMA
            </p>
    </div>
    <div class="visiMisi pb-5">
        <center>
       <img src="<?php echo base_url();?>assets/image/Tentang/frame.svg" class="img-fluid" alt="...">
        </center>
       <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title pt-lg-5 pb-lg-3">Visi</h5>
                            <p class="card-text pt-lg-4 pb-lg-4 m-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body pb-2">
                        <h5 class="card-title pt-lg-5 pb-lg-3">Misi</h5>
                        <p class="card-text pt-lg-4 pb-lg-4 m-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
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
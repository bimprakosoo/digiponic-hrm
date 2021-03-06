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
    <header>
     <!-- Awal menu -->
     <section className="container-fluid">
        <div className="row">
           <img src="<?php echo base_url();?>assets/image/artikel/slide-artikel.svg" class="d-block w-100" />
        </div>
        <div class="slider w-100" style="padding-top: 100px; padding-bottom: 100px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
            <div class="container py-5">
                <div class="card-group">
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card h-100 me-1 ms-1">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <div class="container py-5">
                <div class="card-group">
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card h-100 me-1 ms-1">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small>/h5>
                            </div>
                        </div>
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <div class="container py-5">
                <div class="card-group">
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card h-100 me-1 ms-1">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                        <div class="card h-100 ">
                            <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                            <div class="card-body text-start pt-5">
                            <h5 class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                            <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                            <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- <div class="container py-5">
       <div class="card-group">
            <div class="card h-100 ">
                <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                <div class="card-body pt-5">
                <h class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h>
                <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                <h5 class="card-text pt-5">Jan 26, 2021</h5>
                </div>
            </div>
            <div class="card h-100 me-1 ms-1">
                <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                <div class="card-body pt-5">
                <h class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h>
                <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                <h5 class="card-text pt-5">Jan 26, 2021</h5>
                </div>
            </div>
            <div class="card h-100 ">
                <img src="<?php echo base_url();?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                <div class="card-body pt-5">
                <h class="card-title">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h>
                <p class="card-text pt-5">???Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.???</p>
                <h5 class="card-text pt-5">Jan 26, 2021</h5>
                </div>
            </div>
        </div>
    </div> -->

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
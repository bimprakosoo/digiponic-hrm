<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />

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
                        <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <!-- Awal menu -->

            <section class="artikel pb-5" id="artikel">
                <img src="<?php echo base_url(); ?>assets/image/artikel/slide-artikel.svg" class="d-block w-100" />

                <div id="carouselExampleControls" class="carousel slide pt-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid pt-5 px-5">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid pt-5 px-5">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card " style="border-radius: 10px;">
                                            <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                            <div class="card-body text-start pt-5">
                                                <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                                <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                                <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-5">
                    <div class="btn-group">
                        <button type="button" class="carousel-control-prev mx-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/prev.svg"></span>
                        </button>
                        <button type="button" class="carousel-control-next mx-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/next.svg"></span>
                        </button>
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
                                <img src="<?php echo base_url(); ?>assets/image/Footer/Foot01.svg" />
                            </a>
                            <a href="#" class="facebook">
                                <img src="<?php echo base_url(); ?>assets/image/Footer/Foot02.svg" />
                            </a>
                            <a href="#" class="instagram">
                                <img src="<?php echo base_url(); ?>assets/image/Footer/Foot03.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>
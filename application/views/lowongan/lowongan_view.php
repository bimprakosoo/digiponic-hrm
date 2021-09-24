<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" />
  </head>
  <body>
       <!-- Awal menu -->
       <header class=body-warp>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/assets/image/Logo.svg" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                         </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>Tentang/tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departemen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>LandingPage/Lowongan">Lowongan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="<?php echo base_url();?>login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="<?php echo base_url();?>register">Register</a>
                        </li>
                        </ul>
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
     <?php $this->load->view('lowongan/main_lowongan_view');?>
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
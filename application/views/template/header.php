<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />

  <!-- Title -->
  <title>Maju Bersama</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/Logo2.png" />


  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Awal menu -->
  <header class=body-warp>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/image/Logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem" src="<?php echo base_url(); ?>/assets/image/Logo.svg" alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
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
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <div class="gap-3 ms-auto">
                  <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                  ?>
                    <!-- <a href="logout.php">Logout</a> -->
                    <a class="btn btn-success" href="<?php echo base_url(); ?>logout">logout</a>

                  <?php } else { ?>
                    <!-- <a href="login.php">Login</a>
                    <a href="register.php">Register</a> -->
                    <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                  <?php } ?>

                </div>
              </div>
            </div>
          </div>
        </div>

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
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            ?>
              <!-- <a href="logout.php">Logout</a> -->
              <a class="btn btn-success" href="<?php echo base_url(); ?>logout">logout</a>

            <?php } else { ?>
              <!-- <a href="login.php">Login</a>
              <a href="register.php">Register</a> -->
              <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
              <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
            <?php } ?>

          </div>
        </div>
      </div>
    </nav>
    <header>

      <!-- Awal menu -->
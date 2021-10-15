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
      <section class="departemen" id="departemen">

        <img src="<?php echo base_url(); ?>assets/image/departemen/departemen.svg" class="d-block w-100" />

        <div class="container-fluid pb-5">
          <h4 class="text-center pb-3" id="strukturDept">Struktur Departemen</h4>

          <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-struktur.svg" alt="" class="container d-flex justify-content-center">

          <h4 class="text-center pb-3" id="daftarDept">Daftar Departemen</h4>

          <div class="container-fluid pt-5 px-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card " style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button class="btn btn-primary" type="button">Lihat Selengkapnya</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button class="btn btn-primary" type="button">Lihat Selengkapnya</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button class="btn btn-primary" type="button">Lihat Selengkapnya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid py-5 px-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card " style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button class="btn btn-primary" type="button">Lihat Selengkapnya</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button class="btn btn-primary" type="button">Lihat Selengkapnya</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="border-radius: 10px;">
                  <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
                  <div class="card-body text-start pt-5">
                    <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                  </div>
                  <div class="d-grid gap-2 mx-3 pb-4">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="departemenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <div class="text-center">
                  <h4>Departemen Akutansi dan Keuangan</h4>
                </div>
                <div class="container text-center">
                  <h5>Fungsi</h5>
                  <p>Keuangan mengatur dana perusahaan agar secara efektif digunakan untuk memaksimalkan keuntungan usaha sekaligus menjaga
                    penggunaan dana tersebut secara efisien dan akuntansi bertugas mengumpulkan bukti-bukti segala jenis
                    transaksi yang telah terjadi atau akan terjadi (berdasarkan metode akrual), mencatat dan mengelompokkannya,
                    mudian membuat laporan keuangan perusahaan sesuai dengan prinsip-prinsip Akuntansi yang berlaku umum atau
                    Standar Akuntansi Keuangan yang berlaku.</p>
                </div>
                <div class="container text-start">
                  <h5 class="text-center">Peran</h5>
                  <p>
                    1. Akuntansi keuangan, berkaitan dengan mencatat semua transaksi, menggunakan sistem pembukuan entri ganda dan menyiapkan laporan keuangan. <br>
                    2. Sistem keuangan, menganalisis kebutuhan informasi keuangan organisasi dan meninjau sistem yang ada dan bertanggung jawab atas desain dan pemeliharaan sistem keuangan.<br>
                    3. Penganggaran, berkaitan dengan analisis dan kontrol informasi keuangan untuk membantu operasi sehari-hari perusahaan. <br>
                    4. Penggajian <br>
                    5. Treasuri dan perencanaan keuangan <br>
                    6. Perpajakan, menangani semua urusan perpajakan. <br>
                  </p>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
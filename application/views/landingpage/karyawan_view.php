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
      <section class="karyawan pb-5" id="karyawan">

        <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan.svg" class="d-block w-100" />

        <div class="container text-center">

          <h4>Inilah beberapa karyawan terbaik yang bekerja di PT MAJU BERSAMA</h4>

        </div>

        <div class="container-fluid px-5">
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid px-5">
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
                <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                      Lihat Selengkapnya
                    </button>
                  </div>
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
      <!-- Modal -->
      <div class="modal fade" id="karyawanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container px-4">
                <div class="row gx-5">
                  <div class="col d-flex justify-content-center">
                    <div class="p-3 ">
                      <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" style="border-radius: 10px;" />

                    </div>
                  </div>

                  <div class="col">
                    <div class="p-3 ">
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
                      <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                          Alamat
                        </div>
                        <div class="col-6 text-end">
                          Jl. Surabaya, Ijen, Lowokwaru, Malang
                        </div>
                      </div>
                      <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                          Tanggal Lahir
                        </div>
                        <div class="col-6 text-end">
                          20-09-1997
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
                      <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                          Golongan
                        </div>
                        <div class="col-6 text-end">
                          A
                        </div>
                      </div>
                      <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                          Posisi
                        </div>
                        <div class="col-6 text-end">
                          Staff
                        </div>
                      </div>
                      <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                          Penempatan
                        </div>
                        <div class="col-6 text-end">
                          Cabang A
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>
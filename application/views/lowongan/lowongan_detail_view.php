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
                        <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    <header>
    <!-- Awal menu -->
    <section class="container-fluid" id="lamaran">

    <div class="container overflow-hidden pt-3 pb-4">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Lowongan</a></li>
        <li class="breadcrumb-item"><a href="#">Staff HRD</a></li>
    </ol>
    </nav>
    </div>

    <div class="container overflow-hidden">
    <div class="row gy-5">
        <div class="col-5">
        <div class="p-3 ">
        <div class="card" style="width: 100%; ">
        <div class="card-body">
        <h3 class="text-center pt-4 pb-2"> <strong>Staff HRD</strong></h3>
            <p class="text-start">
                <strong>Lokasi</strong> <br> Malang
            </p>
            <p class="text-start">
                <strong>Perusahaan</strong> <br> PT MAJU JAYA
            </p>
            <p class="text-start">
                <strong>Industri</strong> <br> Manukfaturing
            </p>
            <p class="text-start">
                <strong>Tipe Pekerjaan</strong> <br> Kontrak
            </p>
            <p class="text-start">
                <strong>Pengalaman Kerja</strong> <br> 2 tahun
            </p>
            <p class="text-start">
                <strong>Insentif</strong> <br> Insentif Lembur
            </p>
            <p class="text-start">
                <strong>Level Pekerjaan</strong> <br> Staff (non-management & non-supervisor)
            </p>
            <p class="text-start">
                <strong>Pendidikan</strong> <br> Diploma / D1/D2/D3, Sarjana / S1
            </p>
            <p class="text-start">
                <strong>Waktu bekerja</strong> <br> Senin – Jumat : Jam 08.00 s/d 16.00 <br>
                Sabtu : Jam 08.00 s/d 13.00
            </p>
            <p class="text-start">
                <strong>Gaji</strong> <br> IDR 4.500.000 - IDR 5.500.000
            </p>
            <p class="text-start">
                <strong>Posted Date</strong> <br> 11 September 2021
            </p>
             <div class="d-grid gap-2 mx-3 pb-4">
                <a class="btn btn-primary" href="<?php echo base_url();?>karyawan/lamaran">Lamaran</a>
                </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-7">
        <div class="p-3 ">
        <div class="card" style="width: 100%;">
        <div class="card-body">
        <h3 class="text-center pt-4 pb-2"> <strong>Keterangan Pekerjaan</strong></h3>
            <p class="card-text text-start">
                <ul class="card-text text-start"><li>
                Menangani hal yang berkaitan dengan absensi, lembur, cuti karyawan
                </li>
                <li>Mampu menjalin hubungan baik kepada pihak Internal & eksternal</li>
                <li>Pengurusan dokumen untuk kepentingan Internal Perusahaan</li>
                <li>Mengawasi kinerja dan kedisiplinan karyawan per-periode</li>
                <li>Menjaga, mendata dan merawat seluruh asset perusahaan</li>
                <li>Melakukan proses pengadaan & pendistribusian kebutuhan operasional Perusahaan</li>
            </ul>
            </p>
            <h5 class="text-start">Syarat Pengalaman</h5>
            <p class="card-text text-start">
                <ul class="card-text text-start"><li>
                Usia maksimal 30 tahun
                </li>
                <li>Pendidikan minimal Diploma / Sarjana Strata-1 IPK minimal 3.00</li>
                <li>Memiliki pengalaman dalam bidang Staff HRD minimal 2 tahun</li>
                <li>Memahami Undang-Undang Ketenagakerjaan</li>
                <li>Memahami segala bentuk perizinan yang dibutuhkan oleh perusahaan dan pengurusannya</li>
                <li>Menguasai Microsoft Office, minimal Word, Excel (Pivot, Formula), Power Point</li>
                <li>Berintegrasi dalam bekerja (teliti, rajin, tanggung jawab, sigap, cepat belajar/tanggap, disiplin)</li>
                <li>Memiliki wibawa yang bagus dan dapat bekerja sama secara kelompok maupun individual</li>
                <li>Memiliki kemampuan bekerja dibawah tekanan dan dapat memastikan segala kegiatan operasional di HRD/GA dapat berjalan lancar dan tidak ada masalah</li>
                <li>Berpenampilan rapi, jujur, komunikatif, inovatif, interaktif, dan kreatif
Bersedia ditempatkan di cabang Jakarta dan/atau Surabaya</li>
            </ul>
            </p>
            <h5 class="text-start">Tunjangan</h5>
            <p class="card-text text-start">
                <ul class="card-text text-start"><li>
                Uang Makan,
                </li>
                <li>Uang Transport,</li>
                <li>Tunjangan Hari Raya (THR),</li>
                <li>Jaminan Kecelakaan Kerja,</li>
                <li>Jaminan Hari Tua,</li>
                <li>Jaminan Pensiun,</li>
                <li>BPJS Kesehatan (Kelas 1)</li>
            </ul>
            </p>
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
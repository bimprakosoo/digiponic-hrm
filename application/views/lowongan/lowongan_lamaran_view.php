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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
        $.datepicker.setDefaults({
            showOn: "button",
            buttonImage: "<?php echo base_url(); ?>assets/image/datepicker_icon.png",
            buttonText: "Date Picker",
            buttonImageOnly: true
        });
        $(function() {
            $("#txtFromDate").datepicker();
        });
    </script>

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
                            <li class="breadcrumb-item active" aria-current="page">Lamar Pekerjaan</li>
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- From Lamaran -->
                        <div class="col-7">
                            <div class="p-3 ">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h3 class="text-center pt-4 pb-2"> <strong>Masukan Data Lamaran Anda</strong></h3>
                                        <form action="<?= base_url('pelamar/create'); ?>" method="POST" enctype="multipart/form-data">

                                            <!-- <div class="row mb-3">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Nama</label>
                                            <div class="col-sm-8">
                                                <label for="colFormLabel" class="col-sm-12 col-form-label text-start">Aprilda Peter Sandoria Makatita</label>
                                            </div>
                                            </div> -->

                                            <!-- Nama Lengkap -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Nama Lengkap</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <!-- -->

                                            <!-- Provinsi -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <select name="provinsi" id="provinsi" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="sumantra">sumantra</option>
                                                        <option value="kalimantan">kalimantan</option>
                                                        <option value="jawa timur">jawa timur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Kabupaten -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kota/Kabupaten</label>
                                                <div class="col-sm-8">
                                                    <select name="kota_kabupaten" id="kota_kabupaten" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="aceh">aceh</option>
                                                        <option value="samarinda">samarinda</option>
                                                        <option value="malang">malang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Kecamatan -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="kecamatan" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="pukau">pukau</option>
                                                        <option value="sanggata">sanggata</option>
                                                        <option value="pakis">pakis</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Alamat Lengkap -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Alamat Lengkap</label>
                                                <div class="col-sm-8">
                                                    <textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Jenis Kelamin -->
                                            <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Jenis Kelamin</label>
                                                <div class="col-sm-8 d-flex justify-content-start">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--  -->

                                            <!-- Jenis Kelamin -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <select name="jk" id="jk" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Tanggal Lahir -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3 date">
                                                        <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                                        <input type="text" class="form-control" id="txtFromDate" name="tgl_lahir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                        <span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url(); ?>assets/calendar-event-fill.svg" alt=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- No.Tlpn -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">No.Tlpn</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No. Tlpn">

                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Status Perkawinan -->
                                            <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Status Perkawinan</label>
                                                <div class="col-sm-8">
                                                    <div class="col-sm-10 d-flex justify-content-start">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Belum Menikah</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">Cerai</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                            <label class="form-check-label" for="inlineRadio2">Menikah</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--  -->

                                            <!-- Pendidikan Terakhir -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Status Perkawinan</label>
                                                <div class="col-sm-8">
                                                    <select name="status_perkawinan" id="status_perkawinan" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="belum kawin">belum kawin</option>
                                                        <option value="kawin">kawin</option>
                                                        <!-- <option value="3">Three</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Pendidikan Terakhir -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Pendidikan Terakhir</label>
                                                <div class="col-sm-8">
                                                    <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="S1">S1</option>
                                                        <option value="SMK">SMK</option>
                                                        <!-- <option value="3">Three</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Upload Surat Lamaran -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Upload Surat Lamaran</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="file" id="file_lamaran" name="up_lamaran">
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!-- Upload CV -->
                                            <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Uploda CV</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="file" id="file_cv" name="up_cv">
                                                </div>
                                            </div>
                                            <!--  -->

                                            <div class="d-grid gap-2 mx-3 pt-4 pb-4">
                                                <!-- <a class="btn btn-primary" href="<?php echo base_url(); ?>">Lamaran</a> -->
                                                <div class="d-grid gap-2">
                                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">
                                                        Lamaran
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
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
            <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
            <script>
                // Data Picker Initialization
                $('.datepicker').datepicker();
            </script>
</body>

</html>
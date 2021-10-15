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

                        <!-- From Lamaran -->
                        <div class="col-7">
                            <div class="p-3 ">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h3 class="text-center pt-4 pb-2"> <strong>Masukan Data Lamaran Anda</strong></h3>
                                        <?php echo form_open('pelamar/create') ?>

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
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Provinsi</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">sumantra</option>
                                                        <option value="2">kalimantan</option>
                                                        <option value="3">jawa timur</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <!-- Kabupaten -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kota/Kabupaten</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">aceh</option>
                                                        <option value="2">samarinda</option>
                                                        <option value="3">malang</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <!-- Kecamatan -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kecamatan</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">pukau</option>
                                                        <option value="2">sanggata</option>
                                                        <option value="3">pakis</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <!-- Alamat Lengkap -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Alamat Lengkap</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="Alamat Lengkap" name="Alamat Lengkap" rows="3"></textarea>
                                                </div>
                                            </div> -->
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

                                        <!-- Tanggal Lahir -->

                                        <!--  -->

                                        <!-- No.Tlpn -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">No.Tlpn</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="colFormLabel" placeholder="No. Tlpn">

                                                </div>
                                            </div> -->
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
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Pendidikan Terakhir</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <!-- Upload Surat Lamaran -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Upload Surat Lamaran</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="file" id="formFile" name="up_lamaran" id="up_lamaran">
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <!-- Upload CV -->
                                        <!-- <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Uploda CV</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="file" id="formFile" name="up_cv" id="up_cv">
                                                </div>
                                            </div> -->
                                        <!--  -->

                                        <div class="d-grid gap-2 mx-3 pt-4 pb-4">

                                            <div class="d-grid gap-2">
                                                <button type="submit" name="submit" class="btn btn-primary">
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
            <footer id=" footer">
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
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
            buttonImage: "<?php echo base_url(); ?>assets/calendar.svg",
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
                <?= form_open('palamar/lamaran' . $lowongan['id_lowongan']); ?>

                <div class="container overflow-hidden pt-3 pb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Lowongan</a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $lowongan['nama_lowongan']; ?></a></li>
                        </ol>
                    </nav>
                </div>

                <div class="container overflow-hidden">

                    <div class="row pb-5">
                        <div class="col-12 col-xl-12">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="card">
                                        <div class="card-body text-start text-capitalize">


                                            <h3 class="text-center text-capitalize pt-4 pb-2"> <strong><?php echo $lowongan['nama_lowongan']; ?></strong></h3>
                                            <p class="text-start">
                                                <strong>Lokasi</strong> <br> <?php echo $lowongan['lokasi']; ?>
                                            </p>
                                            <p class="text-start">
                                                <strong>Perusahaan</strong> <br> <?php echo $lowongan['nama_perusahaan']; ?>

                                            </p>
                                            <p class="text-start">
                                                <strong>Industri</strong> <br> <?php echo $lowongan['industri']; ?>
                                            </p>
                                            <p class="text-start">
                                                <strong>Tipe Pekerjaan</strong> <br> <?php echo $lowongan['tipe_pekerjaan']; ?>
                                            </p>
                                            <p class="text-start">
                                                <strong>Pengalaman Kerja</strong> <br> <?php echo $lowongan['pengalaman_kerja']; ?> tahun
                                            </p>
                                           
                                            <p class="text-start">
                                                <strong>Level Pekerjaan</strong> <br> <?php echo $lowongan['level_pekerjaan']; ?>
                                            </p>
                                            <p class="text-start">
                                                <strong>Pendidikan</strong> <br> <?php echo $lowongan['pendidikan']; ?>
                                            </p>
                                           
                                            <p class="text-start">
                                                <strong>Gaji</strong> <br> IDR <?php echo $lowongan['gaji']; ?>
                                            </p>
                                            <p class="text-start">
                                                <strong>Posted Date</strong> <br> <?php echo $lowongan['post_date']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                                <div class="col-sm-7">
                                    <div class="card">
                                        <div class="card-body text-start">

                                            <h3 class="text-center pt-4 pb-2"> <strong>Masukan Data Lamaran Anda</strong></h3>
                                            <form action="<?= base_url('pelamar/create'); ?>" method="POST" enctype="multipart/form-data">


                                                <input type="hidden" id="IDlowongan" name="IDlowongan" value="<?= $lowongan['id_lowongan']; ?>">
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
                                                        <select name="provinsi" id="provinsi" class="form-control" aria-label="Default select example">
                                                            <option value="">-- Pilih Provinsi --</option>
                                                            <?php foreach ($provinsi as $prov) : ?>
                                                                <option value="<?= $prov['id'] ?>"><?= $prov['nama'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <!-- Kabupaten -->
                                                <div class="row mb-3">
                                                    <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kota/Kabupaten</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="kota" name="kota" required>
                                                            <option value="">-- Pilih Kota --</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <!-- Kecamatan -->
                                                <div class="row mb-3">
                                                    <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Kecamatan</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                                                            <option value="">-- Pilih Kecamatan --</option>
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
                                                <div class="row mb-3">
                                                    <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Jenis Kelamin</label>
                                                    <div class="col-sm-8">
                                                        <select name="jk" id="jk" class="form-select" aria-label="Default select example">
                                                            <option value="">Pilih</option>
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

                                                <!-- Pendidikan Terakhir -->
                                                <div class="row mb-3">
                                                    <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Pendidikan Terakhir</label>
                                                    <div class="col-sm-8">
                                                        <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-select" aria-label="Default select example">
                                                            <option value="">Pilih</option>
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
                                                        <input class="form-control" type="file" id="up_lamaran" name="up_lamaran">
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <!-- Upload CV -->
                                                <div class="row mb-3">
                                                    <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Uploda CV</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="file" id="up_cv" name="up_cv">
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

            <script>
                $(document).ready(function() {
                    $('#provinsi').change(function() {
                        var id = $(this).val();
                        // console.log(id); // cek id
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('pelamar/getKota') ?>",
                            data: {
                                id: id
                            },
                            dataType: "JSON",
                            success: function(response) {
                                // console.log(response);
                                $('#kota').html(response);
                                // get id kota by provinsi
                            }
                        });
                    });

                    $('#kota').change(function() {
                        var id = $(this).val();
                        // console.log(id); // cek id
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('pelamar/getKecamatan') ?>",
                            data: {
                                id: id
                            },
                            dataType: "JSON",
                            success: function(response) {
                                // console.log(response);
                                $('#kecamatan').html(response);
                                // get id kecamtan by kota
                            }
                        });
                    });


                });
            </script>
</body>

</html>
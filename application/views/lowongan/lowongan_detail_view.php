<!-- Awal menu -->
<section class="container-fluid" id="lamaran">
    <?= form_open('landingpage/lowongan_detail' . $lowongan['id_lowongan']); ?>

    <div class="container overflow-hidden pt-3 pb-2">
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
                    <div class="col-xl-4 col-md-5 mb-4">
                        <div class="card">
                            <div class="card-body text-start text-capitalize">


                                <h3 class="text-center text-capitalize pt-4 pb-2"> <strong><?php echo $lowongan['nama_lowongan']; ?></strong></h3>
                                <p class="text-start">
                                    <strong>Lokasi</strong> <br> <?php echo $lowongan['kota']; ?>, <?php echo $lowongan['provinsi']; ?>
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
                                    <strong>Posted Date</strong> <br> <?php echo $lowongan['post_date']; ?>
                                </p>
                                <div class="d-grid gap-2 mx-3 pb-4">
                                    <a class="btn btn-primary" href="<?php echo base_url('pelamar/lamaran/') . $lowongan['id_lowongan']; ?>">Lamaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-7 mb-4">
                        <div class="card">
                            <div class="card-body text-start">

                                <h3 class="text-center pt-4 pb-2"> <strong>Tugas dan Tanggung Jawab</strong></h3>
                                <p class="card-text text-start">
                                    <?php echo $lowongan['ket']; ?>
                                </p>
                                <h3 class="text-center pt-4 pb-2"> <strong>Persyaratan</strong></h3>
                                <!-- <h5 class="text-start">Persyaratan</h5> -->
                                <p class="card-text text-start">
                                    <?php echo $lowongan['syarat_pengalaman']; ?>
                                </p>
                                <h3 class="text-center pt-4 pb-2"> <strong>Tunjangan</strong></h3>
                                <!-- <h5 class="text-start">Tunjangan</h5> -->
                                <p class="card-text text-start">
                                    <?php echo $lowongan['tunjangan']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>

</section>
<!-- Akhir menu -->
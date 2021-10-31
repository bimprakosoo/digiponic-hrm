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
    <?= form_open('admin/lowongan_detail' . $lowongan['id_lowongan']); ?>

        <div class="row gy-5">

            <div class="col-5">

                <div class="p-3 ">
                    <div class="card" style="width: 100%; ">
                        <div class="card-body">
                            <h3 class="text-center pt-4 pb-2"> <strong><?php echo $lowongan['nama_lowongan']; ?></strong></h3>
                            <p class="text-start">
                                <strong>Lokasi</strong> <br> <?php echo $lowongan['lokasi']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Perusahaan</strong> <br> <?php echo $lowongan['perusahaan']; ?>
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
                                <strong>Insentif</strong> <br> <?php echo $lowongan['insentif_lembur']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Level Pekerjaan</strong> <br> <?php echo $lowongan['level_pekerjaan']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Pendidikan</strong> <br> <?php echo $lowongan['pendidikan']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Waktu bekerja</strong> <br> <?php echo $lowongan['waktu_bekerja']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Gaji</strong> <br> IDR <?php echo $lowongan['gaji']; ?>
                            </p>
                            <p class="text-start">
                                <strong>Posted Date</strong> <br> <?php echo $lowongan['post_date']; ?>
                            </p>
                            <div class="d-grid gap-2 mx-3 pb-4">
                                <a class="btn btn-primary" href="<?php echo base_url(); ?>pelamar/lamaran">Lamaran</a>
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
                            <ul class="card-text text-start">
                                <?php echo $lowongan['ket']; ?>
                            </ul>
                            </p>
                            <h5 class="text-start">Syarat Pengalaman</h5>
                            <p class="card-text text-start">
                            <ul class="card-text text-start">
                                <?php echo $lowongan['syarat_pengalaman']; ?>
                            </ul>
                            </p>
                            <h5 class="text-start">Tunjangan</h5>
                            <p class="card-text text-start">
                            <ul class="card-text text-start">
                                <?php echo $lowongan['tunjangan']; ?>
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
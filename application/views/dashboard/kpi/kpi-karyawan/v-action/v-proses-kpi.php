<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Penilaian Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">KPI Karyawan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">


        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow">
                <div class="card-body py-3" style="background: #fff;">
                    <div class="row my-2 my-xl-3 m-2">
                        <div class="col-auto d-none d-sm-block ">
                            <h3><strong>KPI Karywaan</strong></h3>
                        </div>

                        <div class="col-auto ml-auto ">
                            <!-- delete -->
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-body" style="margin-top: -30px;">
                    <form action="<?= base_url('admin2/penilaian_kerja/kpi_karyawan/proses_data'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <!-- data karyawan ----------------------------------->
                            <div class="col-12 col-xl-4">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <!-- Karyawan -->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Karyawan</label>
                                        <input type="hidden" class="form-control" id="IDkaryawan" name="IDkaryawan" value="<?= $karyawan['karyawan_id']; ?>" readonly>
                                        <input type="text" class="form-control" value="<?= $karyawan['nama']; ?>" readonly>
                                    </div>

                                    <!-- Department -->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Department</label>
                                        <input type="text" class="form-control" value="<?= $karyawan['nama_department']; ?>" readonly>
                                    </div>

                                    <!-- Divisi -->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Divisi</label>
                                        <input type="text" class="form-control" value="<?= $karyawan['nama_divisi']; ?>" readonly>
                                    </div>

                                    <!-- Jabatan -->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Jabatan</label>
                                        <input type="text" class="form-control" value="<?= $karyawan['nama_jabatan']; ?>" readonly>
                                    </div>

                                    <!-- Posisi -->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Posisi</label>
                                        <input type="text" class="form-control" value="<?= $karyawan['nama_posisi']; ?>" readonly>
                                    </div>

                                    <!-- keterangan -->
                                    <div class="mb-3">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <!-- ----------------------------------------------- -->

                            <!-- Proses KPI ----------------------------->
                            <div class="col-12 col-xl-8">
                                <div class="card" style="background: #FFFFFF;box-shadow: 0px 4px 44px rgba(0, 0, 0, 0.15);border-radius: 5px;">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <h5 class="col-sm-4 text-sm-left"><strong>Indikator</strong></h5>
                                            <div class="col-sm-6 ml-auto">
                                                <h5><strong>Tetapkan Nilai</strong></h5>
                                            </div>
                                        </div>
                                        <!-- <form> -->
                                        <h5 class="col-sm-4 text-left"><strong>1. Kedisiplinan</strong></h5>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Kehadiran</label>
                                            <div class="col-sm-6 ml-auto">
                                                <!-- <input type="text" type="disable" value="100%"> -->
                                                <input type="text" class="form-control" id="kehadiran" name="kehadiran" value="<?= $kehadiran['prosentase'] . '%'; ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- 
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">SP</label>
                                            <div class="col-sm-6 ml-auto">
                                                <span>2</span>
                                            </div>
                                        </div> -->

                                        <!-- KPI ----------------------------------------------------------->
                                        <h5 class="col-sm-4 text-sm-left"><strong>2. KPI</strong></h5>
                                        <!-- jabatan = user-> jabatan -->

                                        <?php foreach ($KPI as $k) {
                                            if ($k['divisi_id'] == $karyawan['divisi_id']) { ?>
                                                <!-- indikator 1 -->
                                                <div class="mb-3 row">
                                                    <label class="col-form-label col-sm-4 text-sm-left"><?= $k['indikator_1'] ?></label>
                                                    <div class="col-sm-6 ml-auto">
                                                        <input type="text" class="form-control" id="indikator1" name="indikator1">
                                                    </div>
                                                </div>
                                                <!-- indikator 2 -->
                                                <div class="mb-3 row">
                                                    <label class="col-form-label col-sm-4 text-sm-left"><?= $k['indikator_2'] ?></label>
                                                    <div class="col-sm-6 ml-auto">
                                                        <input type="text" class="form-control" id="indikator2" name="indikator2">
                                                    </div>
                                                </div>
                                                <!-- indikator 3 -->
                                                <div class="mb-3 row">
                                                    <label class="col-form-label col-sm-4 text-sm-left"><?= $k['indikator_3'] ?></label>
                                                    <div class="col-sm-6 ml-auto">
                                                        <input type="text" class="form-control" id="indikator3" name="indikator3">
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>


                                        <h5 class="col-sm-5 text-sm-left"><strong>3. Budaya</strong></h5>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Kerjasama Tim</label>
                                            <div class="col-sm-6 ml-auto">
                                                <input type="text" class="form-control" id="tim" name="tim">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Inisiatif dan Kreatif</label>
                                            <div class="col-sm-6 ml-auto">
                                                <input type="text" class="form-control" id="inisiatif" name="inisiatif">
                                            </div>
                                        </div>

                                        <br>
                                        <div class="mb-3 row">
                                            <p style="font-size: 13px;">keterangan* <br> - isi nilai mulai dari 0 - 10</p>

                                        </div>


                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="col-auto ml-auto ">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Proses</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</main>
<!-- End Content -->

<!-- chain struktur posisi karyawan -->
<script>
    $(document).ready(function() {

        // devisi
        $('#department').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/penilaian_kerja/kpi_karyawan/getDivisi') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#divisi').html(response);
                    // get id kota by provinsi
                }
            });
        });

        //  karyawan
        $('#divisi').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/penilaian_kerja/kpi_karyawan/getkaryawanByDivisi') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#karyawan1').html(response);
                    $('#karyawan2').html(response);

                }
            });
        });

    });
</script>
<div class="tab-pane fade" id="selesai">
    <h4 class="mt-3">Data Karyawan</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable1" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama </th>
                        <th>posisi training</th>
                        <th>tgl Mulai</th>
                        <th>tgl Selesai</th>
                        <th>status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($dataprobation as $kb) : ?>
                        <?php if ($kb['status'] == 3) { ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $kb['nama']; ?></td>
                                <td><?= $kb['nama_posisi']; ?></td>
                                <td><?= $kb['tgl_mulai']; ?></td>
                                <td><?= $kb['tgl_selesai']; ?></td>
                                <td><?php if ($kb['status'] == 3) { ?>
                                        Selesai
                                    <?php } ?>
                                </td>
                                <td>

                                    <?php if ($kb['status'] == 3) { ?>
                                        <button name="submit" class="btn btn-danger" data-toggle="modal" data-target="#ProbationLulus-<?= $kb['probation_id']; ?>">delete</button>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>

</div>
</div>
</div>

<!-- kelolah data karyawan -->
<div class="modal fade" id="ModalReadyProbation2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="m-0 font-weight-bold ">Managemt Probation</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?= base_url('admin2/karyawan/probation/tambah_ProbationKaryawan'); ?>" method="POST">

                    <div class="row">
                        <!-- karyawan -->
                        <div class="col-md-6">
                            <div class="modal-body">

                                <label for="title">karyawan</label>
                                <input type="text" value="">
                            </div>
                        </div>

                        <!-- dekspripsi -->
                        <div class="col-md-12">
                            <div class="modal-body">

                                <label for="title">Deskripsi</label>
                                <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea>


                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- jenis pelatihan -->
                    </div>

                    <div class="row">
                        <!-- karyawan -->

                    </div>

                    <div class="row">
                        <!-- Tanggal Mulai -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Mulai</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_mulai" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>

                        <!-- Tanggal Berakhir -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Berakhir</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_berakhir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- proses probation -->
<?php $i = 1;
foreach ($karyawan_probation as $m) : ?>
    <div class="modal fade" id="ModalReadyProbation-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proses Probation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin2/karyawan/probation/tambah_ProbationKaryawan/') . $m['id']; ?>" method="POST">

                    <div class="row">
                        <!-- karyawan -->
                        <div class="col-md-6">
                            <div class="modal-body">

                                <h5>nama : <?= $m['nama']; ?></h5>
                            </div>
                        </div>

                        <!-- dekspripsi -->
                        <div class="col-md-12">
                            <div class="modal-body">

                                <label for="title">Deskripsi</label>
                                <!-- <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea> -->
                                <div>

                                    <textarea name="deskripsi" id="deskripsi" cols="60" rows="10"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- jenis pelatihan -->
                    </div>

                    <div class="row">
                        <!-- karyawan -->

                    </div>

                    <div class="row">
                        <!-- Tanggal Mulai -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Mulai</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_mulai" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                        <!-- Tanggal Berakhir -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Berakhir</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_berakhir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Process</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>


<!-- diterima -->
<?php $i = 1;
foreach ($karyawan_probation as $m) : ?>
    <div class="modal fade" id="ProbationLulus-<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proses Evaluasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url("admin2/karyawan/probations/evaluasi/ProbationLulus/") . $m['id']; ?>" method="POST">
                    <div class="modal-body">
                        <div class="row">


                            <div class="col-lg-5">
                                <!--Carousel Wrapper-->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="" alt="" id="dtl_image" alt="Profile">
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="col-lg-7">
                                <h2 class="h2-responsive product-name">
                                    <strong id="dtl-karyawan"></strong>
                                </h2>
                                <h5 class="h4-responsive">
                                    Pengajuan
                                    <span class="green-text">
                                        <strong id="dtl-jenismutasi"></strong>
                                    </span>

                                    </h6>
                                    <!--Accordion wrapper1-->
                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                        <!-- Accordion card -->
                                        <div class="card">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingOne1">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1 collapseOne2">
                                                    <h5 class="mb-0">
                                                        Detail Karyawan <i class="fas fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>Nama</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="nama"><?= $m['nama'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Provinsi</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="provinsi"><?= $m['nama_provinsi'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Kota</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="kota"><?= $m['nama_kota'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Kecamatan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="kecamatan"><?= $m['nama_kecamatan'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Alamat Lengkap</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="alamat"><?= $m['alamat_lengkap'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Jenis Kelamin</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="jk"><?= $m['jk'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Tgl Lahir</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="tgl"><?= $m['tgl_lahir'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>No. Telp</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="telp"><?= $m['no_telp'] ?></span>
                                                        </div>
                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Jenjang Pendidikan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="pendidikan"><?= $m['pendidikan_terakhir'] ?></span>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->
                                    </div>
                                    <!-- Accordion wrapper -->

                                    <!--Accordion wrapper2-->
                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                        <!-- Accordion card -->
                                        <div class="card">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingOne1">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1 collapseOne2">
                                                    <h5 class="mb-0">
                                                        Detail Karyawan <i class="fas fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>Nama</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="nama"><?= $m['nama_perusahaan'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Department</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="department"><?= $m['nama_department'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Divisi</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="divisi"><?= $m['nama_divisi'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Jabatan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="jabatan"><?= $m['nama_jabatan'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Posisi</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="posisi"><?= $m['nama_posisi'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Golongan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="nama"><?= $m['nama_golongan'] ?></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Penempatan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="nama"><?= $m['nama_penempatan'] ?></span>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->
                                    </div>
                                    <!-- Accordion wrapper -->




                                    <div class="row-md-6">
                                        <div class="modal-body">
                                            <label for="title"> ID karyawan </label>
                                            <input type="text" class="form-control" id="IDkaryawan" name="IDkaryawan" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        </div>
                                        <div class="modal-body">
                                            <label for="title">Golongan</label>
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="">-- Pilih Golongan --</option>
                                                <?php foreach ($roles as $org) : ?>
                                                    <option value="<?= $org['id'] ?>"><?= $org['role'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="modal-body">
                                            <label for="title">Hari Efektif </label>
                                            <input type="date" class="form-control" id="txtFromDate" name="hari_efektif" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="text-center">

                                            <button type="button" class="btn btn-danger">gagal</button>
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary">lulus</button>
                                            <!-- <button type="submit" name="submit" value="submit" class="btn btn-primary">Di Tolak</button> -->
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $i++;
endforeach; ?>




</main>
<!-- End Content -->

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>
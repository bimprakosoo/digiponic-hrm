<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lowongan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Lowongan</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?php echo base_url() ?>admin/tambah_lowongan" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Lowongan</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pekerjaan</th>
                                    <th>Lokasi</th>
                                    <th>Perusahaan</th>
                                    <th>Industri</th>
                                    <th>Tipe Pekerjaan</th>
                                    <th>Pengalaman Pekerjaan</th>
                                    <th>Insentif</th>
                                    <th>Level Pekerjaan</th>
                                    <th>Pendidikan</th>
                                    <th>Waktu bekerja</th>
                                    <th>Gaji</th>
                                    <th>Post Date</th>
                                    <th>Keterangan Pekerjaan</th>
                                    <th>Syarat Pengalaman</th>
                                    <th>Tunjangan</th>
                                    <th>Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($lowongan as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['nama_lowongan']; ?></td>
                                        <td><?= $m['lokasi']; ?></td>
                                        <td><?= $m['perusahaan']; ?></td>
                                        <td><?= $m['industri']; ?></td>
                                        <td><?= $m['tipe_pekerjaan']; ?></td>
                                        <td><?= $m['pengalaman_kerja']; ?> </td>
                                        <td><?= $m['insentif_lembur']; ?></td>
                                        <td><?= $m['level_pekerjaan']; ?></td>
                                        <td><?= $m['pendidikan']; ?></td>
                                        <td><?= $m['waktu_bekerja']; ?></td>
                                        <td><?= $m['gaji']; ?></td>
                                        <td><?= $m['post_date']; ?></td>
                                        <td>
                                            <!-- BEGIN  modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sizedModalLg">
                                                Keterangan
                                            </button>
                                            <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content ">
                                                        <div class="modal-header">
                                                            <h2 class="modal-title">Keterangan</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body m-3 text-truncate" style="text-align: start !important;">
                                                            <?= $m['ket']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END  modal -->
                                        </td>
                                        <td>
                                            <!-- BEGIN  modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#syarat">
                                                Syarat Pengalaman
                                            </button>
                                            <div class="modal fade" id="syarat" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg text-start" role="document">
                                                    <div class="modal-content ">
                                                        <div class="modal-header">
                                                            <h2 class="modal-title">Syarat Pengalaman</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body m-3 text-truncate" style="text-align: start !important;">
                                                            <?= $m['syarat_pengalaman']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END  modal -->
                                        </td>
                                        <td>
                                            <!-- BEGIN  modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tunjangan">
                                                Tunjangan
                                            </button>
                                            <div class="modal fade" id="tunjangan" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-md " role="document">
                                                    <div class="modal-content ">
                                                        <div class="modal-header">
                                                            <h2 class="modal-title">Tunjangan</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body m-3 text-truncate" style="text-align: start !important;">
                                                            <?= $m['tunjangan']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END  modal -->
                                        </td>
                                        <td><?= $m['image']; ?></td>
                                        <td>
                                            <button class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true

        });
    });
</script>
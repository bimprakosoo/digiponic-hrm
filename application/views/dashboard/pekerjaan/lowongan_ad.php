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
                    <a href="<?php echo base_url() ?>admin2/pekerjaan/pekerjaanmaster/tambah_lowongan" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3">
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
                                        <td><img src="<?= base_url('assets/image/lowongan/') . $m['image']; ?>" style="width: 50px; height: 50px;"></td>
                                        <td>
                                            <button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-nama_lowongan="<?= $m['nama_lowongan']; ?>" data-lokasi="<?= $m['lokasi']; ?>" data-perusahaan="<?= $m['perusahaan']; ?>" data-industri="<?= $m['industri']; ?>" data-tipe_pekerjaan="<?= $m['tipe_pekerjaan']; ?>" data-pengalaman_kerja="<?= $m['pengalaman_kerja']; ?>" data-insentif_lembur="<?= $m['insentif_lembur']; ?>" data-level_pekerjaan="<?= $m['level_pekerjaan']; ?>" data-pendidikan="<?= $m['pendidikan']; ?>" data-waktu_bekerja="<?= $m['waktu_bekerja']; ?>" data-gaji="<?= $m['gaji']; ?>" data-post_date="<?= $m['post_date']; ?>" data-ket="<?= $m['ket']; ?>" data-syarat_pengalaman="<?= $m['syarat_pengalaman']; ?>" data-tunjangan="<?= $m['tunjangan']; ?>" data-image="<?= base_url('assets/image/lowongan/') . $m['image']; ?>"><i class="fas fa-eye"></i></button>
                                            <a class="btn btn-primary" href="<?php echo base_url("admin/edit/") . $m['id_lowongan']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin/hapus/") . $m['id_lowongan']; ?>"><i class="fas fa-trash-alt"></i></a>
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

    <!-- BEGIN  modal -->
    <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive ">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th>Nama Lowongan</th>
                                <td><span id="dtl_nama"></span></td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td><span id="dtl_lokasi"></span></td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td><span id="dtl_perusahaan"></span></td>
                            </tr>
                            <tr>
                                <th>Industri</th>
                                <td><span id="dtl_industri"></span></td>
                            </tr>
                            <tr>
                                <th>Tipe Pekerjaan</th>
                                <td><span id="dtl_tipe"></span></td>
                            </tr>
                            <tr>
                                <th>Pengalaman Kerja</th>
                                <td><span id="dtl_pengalaman"></span></td>
                            </tr>
                            <tr>
                                <th>Insentif</th>
                                <td><span id="dtl_insentif"></span></td>
                            </tr>
                            <tr>
                                <th>Level Kerja</th>
                                <td><span id="dtl_level"></span></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <td><span id="dtl_pendidikan"></span></td>
                            </tr>
                            <tr>
                                <th>Waktu Bekerja</th>
                                <td><span id="dtl_waktu"></span></td>
                            </tr>
                            <tr>
                                <th>Gaji</th>
                                <td><span id="dtl_gaji"></span></td>
                            </tr>
                            <tr>
                                <th>Post Date</th>
                                <td><span id="dtl_post"></span></td>
                            </tr>
                            <tr>
                                <th>Keterangan Kerja</th>
                                <td><span id="dtl_ket"></span></td>
                            </tr>
                            <tr>
                                <th>Syarat Kerja</th>
                                <td><span id="dtl_syarat"></span></td>
                            </tr>
                            <tr>
                                <th>Tunjangan</th>
                                <td><span id="dtl_tunjangan"></span></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="" alt="" id="dtl_image"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END  modal -->


</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var nama_lowongan = $(this).data('nama_lowongan');
            var lokasi = $(this).data('lokasi');
            var perusahaan = $(this).data('perusahaan');
            var industri = $(this).data('industri');
            var tipe_pekerjaan = $(this).data('tipe_pekerjaan');
            var pengalaman_kerja = $(this).data('pengalaman_kerja');
            var insentif_lembur = $(this).data('insentif_lembur');
            var level_pekerjaan = $(this).data('level_pekerjaan');
            var pendidikan = $(this).data('pendidikan');
            var waktu_bekerja = $(this).data('waktu_bekerja');
            var gaji = $(this).data('gaji');
            var post_date = $(this).data('post_date');
            var ket = $(this).data('ket');
            var syarat_pengalaman = $(this).data('syarat_pengalaman');
            var tunjangan = $(this).data('tunjangan');
            var image = $(this).data('image');
            $('#dtl_nama').text(nama_lowongan);
            $('#dtl_lokasi').text(lokasi);
            $('#dtl_perusahaan').text(perusahaan);
            $('#dtl_industri').text(industri);
            $('#dtl_tipe').text(tipe_pekerjaan);
            $('#dtl_pengalaman').text(pengalaman_kerja);
            $('#dtl_insentif').text(insentif_lembur);
            $('#dtl_level').text(level_pekerjaan);
            $('#dtl_pendidikan').text(pendidikan);
            $('#dtl_waktu').text(waktu_bekerja);
            $('#dtl_gaji').text(gaji);
            $('#dtl_post').text(post_date);
            $('#dtl_ket').text(ket);
            $('#dtl_syarat').text(syarat_pengalaman);
            $('#dtl_tunjangan').text(tunjangan);
            $('#dtl_image').attr("src", image);
        });
    });
</script>
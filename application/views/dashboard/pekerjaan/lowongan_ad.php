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
                    <a href="<?php echo base_url() ?>admin2/pekerjaan/lowongan/tambah_lowongan" class="btn btn-primary">Tambah Data</a>
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
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Lowongan</th>
                                    <th>Lokasi</th>
                                    <th>Perusahaan</th>
                                    <th>Industri</th>
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
                                        <td><?= $m['nama_perusahaan']; ?></td>
                                        <td><?= $m['industri']; ?></td>
                                        <td>
                                            <button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-nama_lowongan="<?= $m['nama_lowongan']; ?>" data-deskripsi="<?= $m['deskripsi']; ?>" data-lokasi="<?= $m['lokasi']; ?>" data-perusahaan="<?= $m['nama_perusahaan']; ?>" data-industri="<?= $m['industri']; ?>" data-tipe_pekerjaan="<?= $m['tipe_pekerjaan']; ?>" data-pengalaman_kerja="<?= $m['pengalaman_kerja']; ?>"  data-level_pekerjaan="<?= $m['level_pekerjaan']; ?>" data-pendidikan="<?= $m['pendidikan']; ?>"  data-gaji="<?= $m['gaji']; ?>" data-post_date="<?= $m['post_date']; ?>" data-ket="<?= $m['ket']; ?>" data-syarat_pengalaman="<?= $m['syarat_pengalaman']; ?>" data-tunjangan="<?= $m['tunjangan']; ?>" ><i class="fas fa-eye"></i></button>
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/pekerjaan/lowongan/edit/") . $m['id_lowongan']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/pekerjaan/lowongan/hapus/") . $m['id_lowongan']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
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
                <!-- <div class="modal-header ">
                    <h5 class="modal-title ">Detail Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body table-responsive ">
                    <h4 class="text-center pt-3" style="color: #335C32;"><Strong>Lowongan</Strong></h4>
                    <h5 class="text-center"><span id="dtl_nama"></span> di perusahaan <span id="dtl_perusahaan"></span></h5>
                    <div class="container text-center px-4 py-4">
                        <div class="row gx-5 ">
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Lokasi</Strong></p>
                                <span id="dtl_lokasi"></span>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Industri</Strong></p>
                                <span id="dtl_industri"></span>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Tipe Pekerjaan</Strong></p>
                                <span id="dtl_tipe"></span>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Pendidikan</Strong></p>
                                <span id="dtl_pendidikan">
                            </div>
                        </div>
                        <div class="row gx-5 pt-4">
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Pengalaman Kerja</Strong></p>
                                <span id="dtl_pengalaman"></span>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Level Pekerjaan</Strong></p>
                                <span id="dtl_level"> </span>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Gaji</Strong></p>
                                <p>Rp &nbsp;<span id="dtl_gaji"></span></p>
                            </div>
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Post date</Strong></p>
                                <span id="dtl_post"></span>
                            </div>
                        </div>
                        <div class="row gx-5 pt-4">
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Deskripsi Singkat</Strong></p>
                                <span class="text-justify" id="dtl_desk"></span>
                            </div>
                        </div>
                        <div class="row gx-5 pt-4">
                            <div class="col ">
                                <p style="color: #335C32;"><Strong>Tugas dan Tanggungjawab</Strong></p>
                                <span class="text-justify" id="dtl_ket"></span>
                            </div>
                        </div>
                        <div class="row gx-5 pt-4">
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Persayaratan</Strong></p>
                                <span class="text-justify" id="dtl_syarat"></span>
                            </div>
                        </div>
                        <div class="row gx-5 pt-4">
                            <div class="col">
                                <p style="color: #335C32;"><Strong>Tunjangan</Strong></p>
                                <span class="text-justify" id="dtl_tunjangan"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <table class="table table-striped no-margin">
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
                                <th>Deskripsi Singkat</th>
                                <td><span id="dtl_desk"></span></td>
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
                                <td><img src="" alt="" id="dtl_image" ></td>
                            </tr>
                        </tbody> -->
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            var deskripsi = $(this).data('deskripsi');
            var ket = $(this).data('ket');
            var syarat_pengalaman = $(this).data('syarat_pengalaman');
            var tunjangan = $(this).data('tunjangan');
            // var image = $(this).data('image');
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
            $('#dtl_desk').text('');
            $('#dtl_desk').append(deskripsi);
            $('#dtl_ket').text('');
            $('#dtl_ket').append(ket);
            $('#dtl_syarat').text('');
            $('#dtl_syarat').append(syarat_pengalaman);
            $('#dtl_tunjangan').text('');
            $('#dtl_tunjangan').append(tunjangan);
            // $('#dtl_image').attr("src", image);
        });
    });
</script>
<script>
    var x = document.getElementById("dtl_ket").innerHTML;
</script>
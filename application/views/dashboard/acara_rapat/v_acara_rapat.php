<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Acara dan Rapat</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Acara dan Rapat </strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?php echo base_url() ?>admin2/acara_rapat/acara_rapat/tambah" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Acara dan Rapat</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tgl Kegiatan</th>
                                    <th>Waktu Dimulai</th>
                                    <th>Waktu Berakhir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($acara as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['jenis_kegiatan']; ?></td>
                                        <td><?= $d['nama_kegiatan']; ?></td>
                                        <td><?= $d['tgl_kegiatan']; ?></td>
                                        <td><?= $d['waktu_dimulai']; ?></td>
                                        <td><?= $d['waktu_berakhir']; ?></td>
                                        <td>
                                            <!-- <button class="btn btn-secondary" id="set_dtl"><i class="fas fa-eye"></i></button> -->
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/artikel/artikel/edit/") . $d['id']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/artikel/artikel/hapus/") . $d['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Tambah  modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data Acara dan Rapat</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/acara_rapat/acara_rapat/tambah'); ?>" method="POST" enctype="multipart/form-data">

                        <!-- jenis -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Jenis Kegiatan</label>
                                <select id="jenis_kegiatan" name="jenis_kegiatan"class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kegiatan</option>
                                    <option value="Rapat">Rapat</option>
                                    <option value="Acara">Acara</option>
                                </select>
                                <!-- <input type="text" class="form-control" id="tipe_pekerjaan" name="tipe_pekerjaan"> -->
                            </div>
                        </div>

                        <!-- nama kegiatan -->
                        <!-- <div class="mb-3 col-md-6"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- nama kegiatan -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Tgl Kegiatan</label>
                                <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan">
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- Waktu dimulai -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_dimulai" name="waktu_dimulai">
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- waktu berakhir -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Waktu Berakhir</label>
                                <input type="time" class="form-control" id="waktu_berakhir" name="waktu_berakhir">
                            </div>
                        </div>
                        <!-- </div> -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                        </div>
                    </form>
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
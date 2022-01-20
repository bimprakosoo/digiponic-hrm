<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Karyawan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">
            <div class="card ">
                <div class="row my-2 my-xl-3 m-2">
                    <div class="col-auto d-none d-sm-block ">
                        <h3><strong>Management Karyawan Perusahaan</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <a href="<?= base_url('admin2/organisasi/department/tambahDept'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modalStrukturKaryawan">Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <!-- <div class="card-body py-3" style="background: #fff;">
                    <h3 class="m-0 font-weight-bold">Penilaian Kerja</h3>
                </div> -->
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Perusahaan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Trainer</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td>No</td>
                                    <td>Perusahaan</td>
                                    <td>Nama Karyawan</td>
                                    <td>Trainer</td>
                                    <td>Tanggal Mulai</td>
                                    <td>Tanggal Berakhir</td>
                                    <td> <a class="btn btn-primary" href="<?php echo base_url("admin2/karyawan/karyawan/edit/")?>"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- kelolah data karyawan -->
    <div class="modal fade" id="modalStrukturKaryawan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Managemt Training</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/karyawan/karyawan/Tambah_DataKaryawan_Training'); ?>" method="POST">

                        <div class="row">
                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Perusahaan</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">karyawan</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="col-md-12">
                                <div class="modal-body">

                                    <label for="title">Deskripsi</label>
                                <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea>
                                    

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Opsi Pelatih</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Jenis Pelatihan</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($perusahaan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Trainer</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Biaya Pelatihan</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($perusahaan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Tanggal Mulai</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Tanggal Berakhir</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($perusahaan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

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

</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true,
            // "searching": false

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#dataTable1').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>
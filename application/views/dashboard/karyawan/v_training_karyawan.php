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
        <div class="card shadow mb-4 ">
            <div class="card-body py-3" style="background: #fff;">
                <h3 class="m-0 font-weight-bold">Karyawan Baru</h3>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Perusahaan</th>
                                <th>Status</th> <!-- Siap Di Training | Sedang Training -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($karyawan_baru as $kb) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $kb['nama']; ?></td>
                                    <td><?= $kb['nama_perusahaan']; ?></td>
                                    <td><?php if ($kb['status_training'] == 0) { ?>
                                            Siap Melakukan Training
                                        <?php } else if ($kb['status_training'] == 1) { ?>
                                            Sedang Trainnig
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                                    <th>Nama Karyawan</th>
                                    <th>Keterangan</th>
                                    <th>Jenis Pelatihan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($karyawan_training as $kb) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $kb['nama']; ?></td>
                                        <td><?= $kb['deskripsi']; ?></td>
                                        <td><?= $kb['kategori']; ?></td>
                                        <td><?= $kb['tgl_mulai']; ?></td>
                                        <td><?= $kb['tgl_selesai']; ?></td>
                                        <td><?php if ($kb['status'] == null) { ?>
                                                -
                                            <?php } else if ($kb['status'] == 0) { ?>
                                                gagal
                                            <?php } else if ($kb['status'] == 1) { ?>
                                                lolos
                                            <?php } ?>
                                        </td>
                                        <td> <a class="btn btn-primary" href="<?php echo base_url("admin2/karyawan/karyawan/klulus") ?>">lulus</a>
                                       <a class="btn btn-danger" href="<?php echo base_url("admin2/karyawan/karyawan/kgagal") ?>">gagal</a></td>

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
                            <!-- Perusahaan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Perusahaan</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($perusahaan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- karyawan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">karyawan</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value=""></option>
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
                            <!-- Opsi Pelatihan -->
                            <!-- <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Opsi Pelatih</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->

                            <!-- jenis pelatihan -->
                            <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Jenis Pelatihan</label>
                                    <select class="form-control" id="type" name="type" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($type as $t) : ?>
                                            <option value="<?= $t['id'] ?>"><?= $t['kategori'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- karyawan -->
                            <!-- <div class="col-md-6">
                                <div class="modal-body">

                                    <label for="title">Trainer</label>
                                    <select class="form-control" id="karyawan" name="karyawan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($all_detailkaryawan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->
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

<script>
    $(document).ready(function() {

        // devisi
        $('#perusahaan').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/karyawan/karyawan/getKaryawanBaru') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#karyawan').html(response);
                    // get id kota by provinsi
                }
            });
        });

    });
</script>
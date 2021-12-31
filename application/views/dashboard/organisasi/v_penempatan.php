<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard') ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/perusahaan/') ?>">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penempatan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Penempatan</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#modalPenempatan">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Penempatan</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>

                                    <th>Nama</th> <!-- nama penempatan e -->
                                    <th>perusahaan</th> <!-- nama perusahaan e -->
                                    <th>lokasi</th> <!-- lokasi -->
                                    <th>provinsi</th> <!-- lokasi -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($penempatan as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['nama_perusahaan']; ?></td>
                                        <td><?= $d['nama_kota']; ?></td>
                                        <td><?= $d['nama_provinsi']; ?></td>

                                        <td>
                                            <button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-nama_penempatan="<?= $d['nama']; ?>" data-nama_perusahaan="<?= $d['nama_perusahaan']; ?>" data-nama_kota="<?= $d['nama_kota']; ?>" data-nama_provinsi="<?= $d['nama_provinsi']; ?>"><i class="fas fa-eye"></i></button>
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/organisasi/penempatan/edit/") . $d['id']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/penempatan/hapus/") . $d['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
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

    <!-- BEGIN  modal -->
    <div class="modal fade" id="modalPenempatan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data Penempatan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <!-- path action -->
                    <form action="<?= base_url('admin2/organisasi/penempatan/add_pen'); ?>" method="POST">

                        <!-- Penempatan -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">penempatan</label>
                                <input type="text" class="form-control" id="penempatan" name="penempatan">
                            </div>
                        </div>

                        <!-- perusahaan -->
                        <div class="mb-3 col-md-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Perusahaan</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih Perusahaan --</option>
                                        <?php foreach ($perusahaan as $org) : ?>
                                            <option value="<?= $org['id'] ?>"><?= $org['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <!-- provinsi -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="provinsi" required>
                                            <option value="">-- Pilih Provinsi --</option>
                                            <?php foreach ($provinsi as $prov) : ?>
                                                <option value="<?= $prov['id'] ?>"><?= $prov['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <!-- Kota -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Kota</label>
                                        <select class="form-control" id="kota" name="kota" required>
                                            <option value="">-- Pilih Kota --</option>
                                        </select>
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
                    <table class="table table-striped " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td><span id="dtl_penempatan"></span></td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td><span id="dtl_perusahaan"></span></td>
                            </tr>
                            <tr>
                                <th>Lokasi Cabang</th>
                                <td><span id="dtl_lokasi"></span></td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td><span id="dtl_provinsi"></span></td>
                            </tr>

                        </tbody>
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
        $('#provinsi').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('pelamar/getKota') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#kota').html(response);
                    // get id kota by provinsi
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var nama_penempatan = $(this).data('nama_penempatan');
            var nama_perusahaan = $(this).data('nama_perusahaan');
            var nama_kota = $(this).data('nama_kota');
            var nama_provinsi = $(this).data('nama_provinsi');
            $('#dtl_penempatan').text(nama_penempatan);
            $('#dtl_perusahaan').text(nama_perusahaan);
            $('#dtl_lokasi').text(nama_kota);
            $('#dtl_provinsi').text(nama_provinsi);

        });
    });
</script>
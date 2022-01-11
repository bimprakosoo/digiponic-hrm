<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/kehadiran/absensi/'); ?>">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Surat ijin / Sakit</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <h1 class="m-0 font-weight-bold ">Pengajuan Surat ijin / Sakit</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Karyawan</th>
                                    <th>Tgl</th>
                                    <th>Bukti Foto</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pengajuan as $as) : ?>

                                    <tr>
                                        <td><?= $as['nama']; ?></td>
                                        <td><?= $as['tanggal']; ?></td>
                                        <td><?= $as['image']; ?></td>
                                        <td><?= $as['keterangan']; ?></td>
                                        <td><?php if ($as['statuss'] == 0) { ?>
                                                menunggu persetujuan
                                            <?php } else if ($as['statuss'] == 1) { ?>
                                                diterima
                                            <?php } else if ($as['statuss'] == 2) { ?>
                                                ditolak
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="<?php echo base_url("admin2/kehadiran/izin/approveIzin/") . $as['id']; ?>"><i class="far fa-check-circle"></i></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/kehadiran/izin/tolakIzin/") . $as['id']; ?>"><i class="far fa-times-circle"></i></i></a>
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

        <!-- card diterima -->
        <div class="card shadow mb-4 ">
            <div class="card-body py-3" style="background: #fff;">
                <h1 class="m-0 font-weight-bold ">Diterima</h1>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTerima" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Karyawan</th>
                                <th>Tgl</th>
                                <th>Bukti Foto</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($terima as $as) : ?>

                                <tr>
                                    <td><?= $as['nama']; ?></td>
                                    <td><?= $as['tanggal']; ?></td>
                                    <td><?= $as['image']; ?></td>
                                    <td><?= $as['keterangan']; ?></td>
                                    <td><?php if ($as['statuss'] == 0) { ?>
                                            menunggu persetujuan
                                        <?php } else if ($as['statuss'] == 1) { ?>
                                            diterima
                                        <?php } else if ($as['statuss'] == 2) { ?>
                                            ditolak
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url("admin2/kehadiran/izin/update/") . $as['id']; ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- card ditolak -->
        <div class="card shadow mb-4 ">
            <div class="card-body py-3" style="background: #fff;">
                <h1 class="m-0 font-weight-bold ">Ditolak</h1>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTolak" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Karyawan</th>
                                <th>Tgl</th>
                                <th>Bukti Foto</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($tolak as $as) : ?>

                                <tr>
                                    <td><?= $as['nama']; ?></td>
                                    <td><?= $as['tanggal']; ?></td>
                                    <td><?= $as['image']; ?></td>
                                    <td><?= $as['keterangan']; ?></td>
                                    <td><?php if ($as['statuss'] == 0) { ?>
                                            menunggu persetujuan
                                        <?php } else if ($as['statuss'] == 1) { ?>
                                            diterima
                                        <?php } else if ($as['statuss'] == 2) { ?>
                                            ditolak
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url("admin2/kehadiran/izin/update/") . $as['id']; ?>"><i class="fas fa-edit"></i></a>
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
</main>
<!-- End Content -->

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true

        });
    });

    $(document).ready(function() {
        $('#dataTerima').DataTable({
            "scrollX": true

        });
    });

    $(document).ready(function() {
        $('#dataTolak').DataTable({
            "scrollX": true

        });
    });
</script>
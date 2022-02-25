<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/') ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/cuti/permohonan_cuti/') ?>">Cuti</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengunduruan Diri</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">


        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Pengunduruan Diri</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-success">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tgl Pengajuan Resign</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($resign as $as) : ?>

                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $as['nama']; ?></td>
                                        <td><?= $as['tgl_resign']; ?></td>
                                        <td><?= $as['keterangan']; ?></td>
                                        <td><?php if ($as['status'] < 2) { ?>
                                                menunggu persetujuan
                                            <?php } else if ($as['status'] == 2) { ?>
                                                diterima
                                            <?php } else if ($as['status'] == 3) { ?>
                                                ditolak
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($as['status'] < 2) { ?>
                                                <a class="btn btn-success" href="<?php echo base_url("admin2/cuti/pengunduran_diri/approveRequest/") . $as['id']; ?>"><i class="far fa-check-circle"></i></i></a>
                                                <a class="btn btn-danger" href="<?php echo base_url("admin2/cuti/pengunduran_diri/tolakRequest/") . $as['id']; ?>"><i class="far fa-times-circle"></i></i></a>
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
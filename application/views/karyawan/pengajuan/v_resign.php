<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Kehadiran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hak Istimewa</li>
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
                        <h3><strong>Pengunduruan Diri</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#sizedModalMd">Form Pengunduruan Diri</button>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h3 class="m-0 font-weight-bold">Daftar Data Pengunduruan Diri</h3>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Karyawan</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Mulai Kerja</th>
                                    <th>Tanggal Keluar </th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>belum absen</td>
                                    <td><?php echo date('Y-m-d H:i:s'); ?></td>
                                    <td><?php echo date('Y-m-d H:i:s'); ?></td>
                                    <td><?php echo date('Y-m-d H:i:s'); ?></td>
                                    <td>10</td>
                                    <td>Ditolak</td>
                                </tr>
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
                <div class="modal-body">
                    <h4 class="modal-title">Form Pengunduruan Diri </h4>
                </div>
                <div class="modal-body table-responsive ">
                    <table class="table  no-margin">
                        <tbody>
                            <tr>
                                <td>Tanggal Pengajuan </td>
                                <td>: </td>

                                <td>
                                <?php echo date('Y-m-d '); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Keluar</td>
                                <td>:</td>

                                <td><input type="date"></td>
                            </tr>
                            
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>

                                <td><textarea name="ketIjin" id="ketIzin" cols="30" rows="10"></textarea></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">Izin Sakit</button>
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
            "scrollX": true,
            "searching": false

        });
    });
</script>
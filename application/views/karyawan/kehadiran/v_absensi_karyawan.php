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

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h3 class="m-0 font-weight-bold">Daftar Data Absensi</h3>
                </div>
                <div class="card-body ">

                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>

                                    <!-- <th>Nama Karyawan</th> -->
                                    <th>No</th>
                                    <th>Tanggal Absensi</th>
                                    <!-- <th>Foto Tempat</th> -->
                                    <th>Jam Masuk</th>
                                    <th>Jam Pulang</th>
                                    <!-- <th>Lokasi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </th>
                                        <td><?php echo date('Y-m-d'); ?></td>
                                        <td><?php echo date('Y-m-d'); ?></td>
                                        <td><?php echo date('Y-m-d'); ?></td>
                                    </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BEGIN  modal Masuk -->
    <div class="modal fade" id="absen-masuk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title">Absensi Masuk </h4>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('karyawan/kehadiran/absensi/Absen_CheckIn'); ?>" method="POST">
                        <table class="table ">
                            <tbody>

                                <tr>
                                    <td>Tanggal </td>
                                    <td>: </td>

                                    <td id="tgl" name="tgl" value="<?php echo date('Y-m-d'); ?>"><?php echo date('Y-m-d'); ?></td>
                                </tr>
                                <tr>
                                    <td>Jam Masuk</td>
                                    <td>:</td>

                                    <td id="jam_masuk" name="jam_masuk" value="<?php echo date('H:i:s'); ?>"><?php echo date('H:i:s'); ?></td>
                                </tr>
                                <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">check in</button>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END  modal -->

    <!-- BEGIN  modal Pulang -->
    <div class="modal fade" id="absen-pulang" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title">Absensi Pulang </h4>
                </div>
                <div class="modal-body table-responsive ">
                    <table class="table  no-margin">
                        <tbody>
                            <tr>
                                <td>Tanggal </td>
                                <td>: </td>

                                <td><?php echo date('Y-m-d'); ?></td>
                            </tr>
                            <tr>
                                <td>Jam Pulang</td>
                                <td>:</td>

                                <td><?php echo date('H:i:s'); ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">Absen</button>
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
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
                        <h3><strong>Pelacakaan Target</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#sizedModalMd">Tambah Baru</button>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h3 class="m-0 font-weight-bold">Daftar Pelacakan Target</h3>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Departemen</th>
                                    <th>Keterangan</th>
                                    <th>Target</th>
                                    <th>Pencapaian Target</th>
                                    <th>Tanggal Mulai </th>
                                    <th>Tanggal Berakhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>belum absen</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td><?php echo date('Y-m-d H:i:s'); ?></td>
                                    <td><?php echo date('Y-m-d H:i:s'); ?></td>
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
                    <h4 class="modal-title">Form Pelacakan Target </h4>
                </div>
                <div class="modal-body table-responsive ">
                    <table class="table  no-margin">
                        <tbody>
                            <tr>
                                <td>Departemen </td>
                                <td>: </td>

                                <td>
                                Pemasaran
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>

                                <td><textarea name="ketIjin" id="ketIzin" cols="30" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <td>Target</td>
                                <td>:</td>

                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Pencapaian Target</td>
                                <td>:</td>

                                <td><input type="tex"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai</td>
                                <td>:</td>

                                <td><input type="date"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Berakhir</td>
                                <td>:</td>

                                <td><input type="date"></td>
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
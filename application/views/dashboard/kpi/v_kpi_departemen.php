<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/penilaian_pekerja/kpi_departemen/'); ?>">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">KPI Departemen</li>
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
                        <h3><strong>Tambah Data</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <a href="<?php echo base_url() ?>admin2/penilaian_kerja/kpi_departemen/tambah" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua KPI Departemen</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Departemen</th>
                                    <th>Tgl buat</th>
                                    <th>Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

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
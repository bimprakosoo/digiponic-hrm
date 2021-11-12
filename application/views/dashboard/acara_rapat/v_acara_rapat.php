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
                    <a href="<?php echo base_url() ?>admin/tambah_lowongan" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Acara dan Rapat</h1>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%"  style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Action</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tgl Kegiatan</th>                                    
                                    <th>Waktu Dimulai</th>                                    
                                    <th>Waktu Berakhir</th>                                    
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
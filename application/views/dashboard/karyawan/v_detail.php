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

                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#kepalacabang" class="nav-link" data-bs-toggle="tab">Kepala Cabang</a>
                        </li>
                        <li class="nav-item">
                            <a href="#karyawan" class="nav-link" data-bs-toggle="tab">Karyawan</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#messages" class="nav-link" data-bs-toggle="tab">Pelacakan Target</a>
                        </li>
                        <li class="nav-item">
                            <a href="#mutasi" class="nav-link" data-bs-toggle="tab">Mutasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#training" class="nav-link" data-bs-toggle="tab">Detail karyawan training</a>
                        </li> -->
                    </ul>
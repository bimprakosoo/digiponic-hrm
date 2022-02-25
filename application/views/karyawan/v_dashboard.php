<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
</div>
<main class="content">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="height: 200px;">
                                <div class="card-body ">
                                    <h5 class="text-center m" style="color: #335c32;">Sisa Cuti</h5>

                                    <hr>

                                    <h1 class="my-4 text-center" style="font-size: 48px;">4</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 200px;">
                                <div class="card-body">

                                    <h5 class="m text-center" style="color: #335c32;">Jumlah Izin Bulan Ini</h5>

                                    <hr>

                                    <h1 class="my-4 text-center" style="font-size: 48px;">41</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 200px;">
                                <div class="card-body">

                                    <h5 class="m text-center " style="color: #335c32;">Absensi</h5>

                                    <hr>
                                    <?php if ($statusAbsen['tanggal'] == date("Y-m-d")) { ?>
                                        <h1 class="mt-4 text-center" style="color: green;">
                                            <i class="fas fa-fw fa-solid fa-user-check"></i>
                                        </h1>
                                        <h5 class="mb-5 text-center" style="color: green;">Sudah Absensi</h5>
                                    <?php } else { ?>
                                        <h1 class="mt-4 text-center" style="color: orange;">
                                            <i class="fas fa-fw fa-solid fa-user-clock"></i>
                                        </h1>
                                        <h5 class="mb-5 text-center" style="color: orange;">Belum Absensi</h5>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <h3 class="card-header card-text" style="background: #FFF; color:#335c32;"><strong>KPI Karyawan Bulan Lalu</strong></h3>

                <div class="card-body ">
                    <!-- 1 -->
                    <div class="row">
                        <div class="col-xl-5 col-md-6 mb-4">
                            <h5><?= $KPI['indikator1'] ?></h5>
                        </div>
                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $KPI['indikator_1']; ?>0%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="10"><?= $KPI['indikator_1']; ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="row">
                        <div class="col-xl-5 col-md-6 mb-4">
                            <h5><?= $KPI['indikator2'] ?></h5>
                        </div>
                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $KPI['indikator_2']; ?>0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?= $KPI['indikator_2']; ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="row">
                        <div class="col-xl-5 col-md-6 mb-4">
                            <h5><?= $KPI['indikator3'] ?></h5>
                        </div>
                        <div class="col-xl-7 col-md-6 mb-4">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $KPI['indikator_2']; ?>0%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?= $KPI['indikator_2']; ?></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
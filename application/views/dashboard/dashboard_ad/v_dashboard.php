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
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title  text-center">Karyawan Training</h5>

                                    <hr>

                                    <h1 class="my-5 text-center" style="font-size: 48px;"><strong>4</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title text-center">Lamaran Masuk</h5>

                                    <hr>

                                    <h1 class="my-5 text-center" style="font-size: 48px;"><strong>54</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="height: 220px;">
                                <div class="card-body">

                                    <h5 class="card-title text-center ">Karyawan</h5>

                                    <hr>

                                    <h1 class="mt-5 mb-2 text-center" style="font-size: 48px;"><strong>114</strong></h1>
                                    <div class="row">
                                        <div class="col-auto">
                                            <button class="btn btn-primary" style="font-size: 7px;">aktif 100</button>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <button class="btn btn-danger" style="font-size: 7px;">Tidak aktif 100</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-body">

                        <h3 class="card-text  "><strong>Todo List</strong></h3>

                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <!-- <th>No</th> -->
                                            <th>Nama Karyawan</th>
                                            <th>Jenis Mutasi</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1;
                                        foreach ($getMutasi as $m) : ?>
                                            <tr>

                                                <td><?= $m['userID']; ?></td>
                                                <td><?= $m['jenis_mutasi']; ?></td>
                                                <td><?= $m['tgl_pengajuan']; ?></td>
                                                <td><?= $m['status']; ?></td>

                                                <td><button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#detail-data" data-tglpengajuan="<?= $m['tgl_pengajuan']; ?>" data-karyawan="<?= $m['userID']; ?>" data-department="<?= $m['namaDepartment']; ?>" data-divisi="<?= $m['namaDivisi']; ?>" data-jabatan="<?= $m['namaJabatan']; ?>" data-golongan="<?= $m['namaGolongan']; ?>" data-posisi="<?= $m['namaPosisi']; ?>" data-penempatan="<?= $m['namaPenempatan']; ?>" data-status="<?= $m['status']; ?>" data-jenismutasi="<?= $m['jenis_mutasi']; ?>" >
                                                        <i class="fas fa-eye"></i></button>
                                                </td>
                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal: modalQuickView -->
        <div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!--Carousel Wrapper-->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="" alt="" id="dtl_image" alt="Profile">
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="col-lg-7">
                                <h2 class="h2-responsive product-name">
                                    <strong id="dtl-karyawan"></strong>
                                </h2>
                                <h5 class="h4-responsive">
                                    Pengajuan
                                    <span class="green-text">
                                        <strong id="dtl-jenismutasi"></strong>
                                    </span>

                                    </h6>
                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                        <!-- Accordion card -->
                                        <div class="card">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="headingOne1">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1 collapseOne2">
                                                    <h5 class="mb-0">
                                                        Detail Karyawan <i class="fas fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>Tanggal Pengajuan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="tglpengajuan"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Department</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-department"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Devisi</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-divisi"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Jabatan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-jabatan"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Golongan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-golongan"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Posisi</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-posisi"></span>
                                                        </div>

                                                        <!--  -->
                                                        <div class="col-md-6">
                                                            <span>Penempatan</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span id="dtl-penempatan"></span>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card">

                                            <!-- Card header -->
                                            <div class="card-header" id="headingTwo2">
                                                <a data-toggle="collapse" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                                                    <h5 class="mb-0">
                                                        Keterangan <i class="fas fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapseTwo2" role="tabpanel" aria-labelledby="headingTwo2">
                                                <div class="card-body">
                                                    pengajuan karyawana ullum utuk di promosikan nai jabatan
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion card -->

                                        <!-- <div class="text-center pt-2">

                                            <button type="button" class="btn btn-danger">Ditolak</button>
                                            <button type="button" class="btn btn-primary">Disetujui</button>
                                        </div> -->


                                    </div>
                                    <!-- Accordion wrapper -->




                                    <!-- Add to Cart -->
                                    <div class="card-body">
                                        <!-- <div class="row">
                                            <div class="col-md-6">

                                                <select class="md-form mdb-select colorful-select dropdown-primary">
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="1">White</option>
                                                    <option value="2">Black</option>
                                                    <option value="3">Pink</option>
                                                </select>
                                                <label>Select color</label>

                                            </div>
                                            <div class="col-md-6">

                                                <select class="md-form mdb-select colorful-select dropdown-primary">
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="1">XS</option>
                                                    <option value="2">S</option>
                                                    <option value="3">L</option>
                                                </select>
                                                <label>Select size</label>

                                            </div>
                                        </div> -->
                                        <div class="text-center">

                                            <button type="button" class="btn btn-danger">Ditolak</button>
                                            <button type="button" class="btn btn-primary">Disetujui</button>
                                        </div>
                                    </div>
                                    <!-- /.Add to Cart -->
                            </div>
                            <!-- /.Add to Cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
            nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollY": "200px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>

<!-- detail-data -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var D_tglpengajuan = $(this).data('tglpengajuan');
            var D_karyawan = $(this).data('karyawan');
            var D_department = $(this).data('department');
            var D_divisi = $(this).data('divisi');
            var D_jabatan = $(this).data('jabatan');
            var D_golongan = $(this).data('golongan');
            var D_posisi = $(this).data('posisi');
            var D_penempatan = $(this).data('penempatan');
            var D_status = $(this).data('status');
            var D_jenismutasi = $(this).data('jenismutasi');
            var image = $(this).data('image');
            $('#tglpengajuan').text(D_tglpengajuan);
            $('#dtl-karyawan').text(D_karyawan);
            $('#dtl-department').text(D_department);
            $('#dtl-divisi').text(D_divisi);
            $('#dtl-jabatan').text(D_jabatan);
            $('#dtl-golongan').text(D_golongan);
            $('#dtl-posisi').text(D_posisi);
            $('#dtl-penempatan').text(D_penempatan);
            $('#dtl-status').text(D_status);
            $('#dtl-jenismutasi').text(D_jenismutasi);
            $('#dtl_image').attr("src", image);
        });
    });
</script>
<script>
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
</script>
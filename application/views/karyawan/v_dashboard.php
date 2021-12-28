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
                                            <th>No</th>
                                            <th>kepala cabang</th>
                                            <th>nama cabang</th>
                                            <th>nama perusahaan</th>
                                            <th>Pengajuan</th>

                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Peter</td>
                                            <td>A</td>
                                            <td>Maju</td>
                                            <td>mutasi</td>
                                            <td>
                                                <button class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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
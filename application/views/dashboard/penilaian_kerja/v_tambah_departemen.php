<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Penilaian Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">KPI Departemen</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">


        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow">
                <div class="card-header py-3">
                    <div class="row my-2 my-xl-3 m-2">
                        <div class="col-auto d-none d-sm-block ">
                            <h3><strong>Tambah KPI Departemen</strong></h3>
                        </div>

                        <div class="col-auto ml-auto ">
                            <a href="<?php echo base_url() ?>admin2/penilaian_pekerja//kpi_departemen/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-body" style="margin-top: -30px;">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputState">Departemen</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="inputCity">Tanggal Buat</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputZip">Keterangan</label>
                            <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="">
                        <a href="<?php echo base_url() ?>admin2/penilaian_pekerja/kpi_departemen/tambah" class="btn btn-primary">Simpan Data</a>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="margin-top: -24px; box-shadow: inset 0px 5px 31px rgba(0, 0, 0, 0.15); background: #FFFFFF;">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Key Perfomance Indicators</th>
                                <th>Unit Pengukuran</th>
                                <th>Target</th>
                                <th>Realisasi</th>
                                <th>Skor</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>
                                    <a href="" class="btn btn-danger" style="width: 100px;">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Content -->
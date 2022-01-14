<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Penilaian Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">KPI Karyawan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">


        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow">
                <div class="card-body py-3" style="background: #fff;">
                    <div class="row my-2 my-xl-3 m-2">
                        <div class="col-auto d-none d-sm-block ">
                            <h3><strong>Tambah KPI Karywaan</strong></h3>
                        </div>

                        <div class="col-auto ml-auto ">
                            <a href="<?php echo base_url() ?>admin2/penilaian_pekerja//kpi_departemen/tambah" class="btn btn-primary">Simpan Data</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-body" style="margin-top: -30px;">

                    <div class="row">
                        <div class="col-12 col-xl-4">

                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Departemen</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputState">Karyawan</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="mb-3" style="width: 75%;">
                                        <label class="form-label">Tanggal Buat</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Buat">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8">
                            <div class="card" style="background: #FFFFFF;box-shadow: 0px 4px 44px rgba(0, 0, 0, 0.15);border-radius: 5px;">
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <h5 class="col-sm-4 text-sm-left"><strong>Indikator</strong></h5>
                                        <div class="col-sm-6 ml-auto">
                                            <h5><strong>Tetapkan Nilai</strong></h5>
                                        </div>
                                    </div>
                                    <form>
                                        <h5 class="col-sm-4 text-left"><strong>1. Kedisiplinan</strong></h5>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Kehadiran</label>
                                            <div class="col-sm-6 ml-auto">
                                                <input type="text" type="disable" value="100%">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">SP</label>
                                            <div class="col-sm-6 ml-auto">
                                                <span>2</span>
                                            </div>
                                        </div>

                                        <h5 class="col-sm-4 text-sm-left"><strong>2. Kompetensi</strong></h5>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Efisiensi Kerja</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Ketepatan Waktu</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-6 text-sm-left">Kemampuan Mencapai Target</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h5 class="col-sm-5 text-sm-left"><strong>3. Kompetensi Umum</strong></h5>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Kerjasama</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Komunikasi</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-4 text-sm-left">Inisiatif dan Kreatif</label>
                                            <div class="col-sm-6 ml-auto">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
</main>
<!-- End Content -->
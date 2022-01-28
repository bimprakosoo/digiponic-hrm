<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="row">
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <h4>John Doe</h4>
                            <p class="text-secondary mb-1">Full Stack Developer</p>
                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="John Doe">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="john@example.com">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Jenis Kelamin</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="(239) 816-9029">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">No. Tlpn</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="(320) 380-4539">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Alamat Lengkap</h6>
                        </div>
                        <div class="col-sm-5 text-secondary">
                            <div class="form-group">
                                <select name="kota" id="kota" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kota</option>
                                    <option value="kontrak">Kontrak</option>
                                    <option value="tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 text-secondary">
                            <div class="form-group">
                                <select name="provinsi" id="provinsi" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Provinsi</option>
                                    <option value="kontrak">Kontrak</option>
                                    <option value="tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0"></h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="button" class="btn btn-primary px-4" value="Update">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
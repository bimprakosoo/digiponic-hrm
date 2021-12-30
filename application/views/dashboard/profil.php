<div class="container">
    <div class="row gutters py-5">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card ">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar pb-3">
                                <img src="<?php echo base_url('assets/image/profil/') . $user['image']; ?>" class="rounded mx-auto d-block" style="width: 180px; height:180px;">
                            </div>
                            <h5 class="user-name"><?= $user['nama'] ?></h5>
                            <h6 class="user-email"><?= $user['email'] ?></h6> <!-- jabatan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <h6 class="mb-2 text-primary">Data Pribadi</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="text-right">
                                <a href="<?= base_url('admin2/dashboard/dashboard/profileEdit') ?>" class="btn btn-primary" style="width: 100px;"> Edit </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Nama Lengkap</strong></label>
                                <p>bug@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Email</strong></label>
                                <p>bug@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Tanggal Lahir</strong></label>
                                <p>20-04-2021</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Jenis Kelamin</strong></label>
                                <p>Laki-Laki</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Status Perkawinan</strong></label>
                                <p>Belum kawin</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Pendidikan Terakhir</strong></label>
                                <p>S1</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Provinsi</strong></label>
                                <p>Jawa Timur</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Kota</strong></label>
                                <p>Malang</p>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Alamat Lengkap</strong></label>
                                <p>Jl Sngosari</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Detail</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Penempatan</strong></label>
                                <p>Cabang A</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Perusahaan</strong></label>
                                <p>Maju Jaya</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Departemen</strong></label>
                                <p>Departemen</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Divisi</strong></label>
                                <p>Divisi</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Jabatan</strong></label>
                                <p>Jabatan</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName"><strong>Posisi</strong></label>
                                <p>Posisi</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
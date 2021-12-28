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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Data Pribadi</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Status Perkawinan</label>
                                <input type="url" class="form-control" id="status_perkawinan" placeholder="Status Perkawinan">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Pendidikan Terakhir</label>
                                <input type="url" class="form-control" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Provinsi</label>
                                <input type="name" class="form-control" id="provinsi" placeholder="Provinsi">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">Kota</label>
                                <input type="name" class="form-control" id="kota" placeholder="Kota">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="sTate">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="alamat_lengkap" placeholder="Alamat Lengkap">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Detail</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Penempatan</label>
                                <input type="text" class="form-control" id="penempatan" placeholder="Penempatan" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Perusahaan</label>
                                <input type="text" class="form-control" id="perusahaan" placeholder="Perusahaan" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Departemen</label>
                                <input type="text" class="form-control" id="departemen" placeholder="Departemen" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Divisi</label>
                                <input type="text" class="form-control" id="divisi" placeholder="Divisi" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Posisi</label>
                                <input type="text" class="form-control" id="posisi" placeholder="Posisi" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <a href="<?= base_url('admin2/dashboard/dashboard/profile')?>" class="btn btn-secondary">Cancel</a>
                                <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
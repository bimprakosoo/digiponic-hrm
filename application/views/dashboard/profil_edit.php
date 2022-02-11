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
                <form action="<?= base_url('admin2/dashboard/dashboard/update/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row mb-3">
                            <input type="hidden" id="id" name="id" value="<?= $user['idusers'] ?>">

                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Lengkap</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Jenis Kelamin</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <select name="jk" id="jk" class="form-select" aria-label="Default select example">
                                    <?php
                                    if ($user['jk'] == "laki-laki") { ?>
                                        <option value="laki-laki" selected>Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    <?php } else { ?>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan" selected>Perempuan</option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">No. Tlpn</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $user['no_telp'] ?>">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat Lengkap</h6>
                            </div>
                            <div class="col-sm-3 text-secondary">
                                <div class="form-group">
                                    <label for="title">Provinsi</label>
                                    <select class="form-control" id="provinsi" name="provinsi" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($provinsi as $prov) { ?>
                                            <option value="<?= $prov['id'] ?>" <?= $prov['id'] == $user['provinsi'] ? 'selected' : '' ?>><?= $prov['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 text-secondary">
                                <div class="form-group">
                                    <label for="title">Kota</label>
                                    <select class="form-control" id="kota" name="kota" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($kota as $kt) { ?>
                                            <option value="<?= $kt['id'] ?>" <?= $kt['id'] == $user['kota'] ? 'selected' : '' ?>><?= $kt['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 text-secondary">
                                <div class="form-group">
                                    <label for="title">Kecamatan</label>
                                    <select class="form-control" id="kecamatan" name="kecamatan" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($kecamatan as $kc) { ?>
                                            <option value="<?= $kc['id'] ?>" <?= $kc['id'] == $user['kecamatan'] ? 'selected' : '' ?>><?= $kc['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0"></h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" value="<?= $user['alamat_lengkap'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <a href="<?= base_url() ?>admin2/dashboard/dashboard/profile/" class="btn btn-warning">Cancel</a>
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        $('#provinsi').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('pelamar/getKota') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#kota').html(response);
                    // get id kota by provinsi
                }
            });
        });

        $('#kota').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('pelamar/getKecamatan') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#kecamatan').html(response);
                    // get id kecamtan by kota
                }
            });
        });

    });
</script>
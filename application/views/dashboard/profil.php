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

    <div class="row gutters-sm">
        <div class="col-md-4 ">
            <div class="card h-100">
                <div class="card-body ">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <h4><?= $user['email'] ?></h4>
                            <p class="text-secondary mb-1">Full Stack Developer</p>

                        </div>
                        <div class="mt-3">
                            <a href="<?= base_url('admin2/dashboard/dashboard/profileEdit') ?>" class="btn btn-info" style="width: 100px;"> Edit </a>
                        </div>
                        <div class="mt-3">
                            <a href="<?= base_url('admin2/dashboard/dashboard/profileEdit') ?>" class="btn btn-info" style="width: 150px;" data-toggle="modal" data-target="#modalTambah"> Ubah Sandi </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card h-100 ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $user['nama']?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $user['email']?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Jenis Kelamin</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Laki-Laki
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">No. Tlpn</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            (239) 816-9029
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Alamat Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Bay Area, San Francisco, CA
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row">
                    <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                </div> -->
                </div>
            </div>

        </div>
    </div>

    <div class="row gutters-sm">
        <div class="col-sm-12 pt-3">
            <div class="card shadow" style="/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,2989d8+50,207cca+51,7db9e8+100;Blue+Gloss+Default */background: rgb(30,87,153); /* Old browsers */background: -moz-linear-gradient(left,  rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6-15 */background: -webkit-linear-gradient(left,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */background: linear-gradient(to right,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 */">
                <div class="card-body">

                    <div class="container">
                        <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
                            <div class="col">
                                <div class="text-center">
                                    <h6 style="color: #fff;"><strong>Penempatan</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Cabang Malang</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-data text-center">
                                    <h6 style="color: #fff;"><strong>Perusahaan</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Maju Digiponic</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-data text-center">
                                    <h6 style="color: #fff;"><strong>Departemen</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Sales Marketing</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-data text-center">
                                    <h6 style="color: #fff;"><strong>Divisi</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Pemasaran</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-data text-center">
                                    <h6 style="color: #fff;"><strong>Jabatan</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Manager</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-data text-center">
                                    <h6 style="color: #fff;"><strong>Posisi</strong></h6>
                                    <p style="color: #fff;" class="m-0px font-w-600">Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function change() {
        var x = document.getElementById('pass').type;

        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML = '<i class="far fa-eye-slash"></i>';
        } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML = '<i class="far fa-eye"></i>';
        }
    }
</script>

<!-- Tambah  modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-ms" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="m-0 font-weight-bold ">Ubah Sandi </h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?= base_url('admin2/dashboard/dashboard/profileEditPass'); ?>" method="POST" enctype="multipart/form-data">
            

                    <!-- Email -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                        </div>
                    </div>

                    <!-- Password -->
                    <!-- <div class="mb-3 col-md-6"> -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Password</label>
                            <!-- <input class="myinput" type="password" name="" value="" id="pass"> -->
                            <input type="password" class="form-control" id="pass" name="pass" value="">
                            <span style="position: relative; z-index: 1;left: 90%;top: -30px;cursor: pointer;" id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>

                        </div>
                    </div>
                    <!-- </div> -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
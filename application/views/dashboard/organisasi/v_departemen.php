<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/perusahaan/'); ?>">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departemen</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Departemen</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?= base_url('admin2/organisasi/department/tambahDept'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modalDepartment">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Departemen</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">

                                <tr>
                                    <th>No</th>
                                    <th>Nama Departemen</th>
                                    <th>Nama Perusahaan</th>
                                    <!-- <th>Deskripsi</th>
                                    <th>Fungsi</th>
                                    <th>Peran</th>
                                    <th>Foto</th> -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($dept as $d) : ?>

                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['nama']; ?></td> <!-- nama departemnt -->
                                        <td><?= $d['nama_perusahaan']; ?></td>

                                        <!-- wingi tak hapus siji, dadi mek nomor karo nama departemen tok -->

                                        <td><button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-nama_departemen="<?= $d['nama']; ?>" data-nama_perusahaan="<?= $d['nama_perusahaan']; ?>" data-deskripsi="<?= $d['deskripsi']; ?>" data-fungsi="<?= $d['fungsi']; ?>" data-peran="<?= $d['peran']; ?>" data-image="<?= base_url('assets/image/departemen/foto/') . $d['image']; ?>">
                                                <i class="fas fa-eye"></i></button> 
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/organisasi/department/edit/") . $d['dept_id']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/department/hapus/") . $d['dept_id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--tambah data department -->
    <div class="modal fade" id="modalDepartment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data department</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/organisasi/department/tambahDept'); ?>" method="POST" enctype="multipart/form-data">

                        <!-- Department -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">department</label>
                                <input type="text" class="form-control" id="department" name="department">
                            </div>
                        </div>

                        <!-- Perusahaan -->
                        <!-- <div class="mb-3 col-md-6"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Perusahaan</label>
                                <select class="form-control" id="perusahaan" name="perusahaan" required>
                                    <option value="">-- Pilih Perusahaan --</option>
                                    <?php foreach ($perusahaan as $p) : ?>
                                        <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- </div> -->
                        </div>

                        <!-- deskripsi -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Deskripsi</label>
                                <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>

                        <!-- fungsi -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Fungsi</label>
                                <textarea class="ckeditor" id="fungsi" name="fungsi"></textarea>
                            </div>
                        </div>

                        <!-- peran -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Peran</label>
                                <textarea class="ckeditor" id="peran" name="peran"></textarea>
                            </div>
                        </div>

                        <!-- Foto -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="colFormLabel" class="col-form-label text-start">Upload Image</label><br>
                                <input class="pt-1" type="file" id="file_image" name="image">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail -->
    <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body table-responsive ">
                    <h4 class="text-center pt-3" style="color: #335C32;"><Strong>Departemen</Strong></h4>
                    <h5 class="text-center"><span id="nama_departemen"></span></h5>
                    <div class="container text-center px-4 py-4">
                        <div class="row gx-5 ">
                            <div class="col">
                                <img src="" alt="" id="dtl_image2" style="height: 500px; width: 500px;">
                            </div>
                            <div class="col">
                                <div class="row gx-5 ">
                                    <div class="col">
                                        <p style="color: #335C32;"><Strong> Terletak di Perusahaan</Strong></p>
                                        <span id="nama_perusahaan"></span>
                                    </div>
                                </div>
                                <div class="row gx-5  pt-4">
                                    <div class="col">
                                        <p style="color: #335C32;"><Strong>Deskripsi Singkat</Strong></p>
                                        <span id="dtl_deskripsi"></span>
                                    </div>
                                </div>
                                <div class="row gx-5 pt-4">
                                    <div class="col">
                                        <p style="color: #335C32;"><Strong>Fungsi</Strong></p>
                                        <span id="dtl_fungsi2"></span>
                                    </div>
                                </div>
                                <div class="row gx-5 pt-4">
                                    <div class="col">
                                        <p style="color: #335C32;"><Strong>Peran</Strong></p>
                                        <span id="dtl_peran2"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- <table class="table table-striped " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Nama Departemen</th>
                                <td><span id="nama_departemen"></span></td>
                            </tr>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <td><span id="nama_perusahaan"></span></td>
                            </tr>
                            <tr>
                                <th>Deskripsi Singkat</th>
                                <td><span id="dtl_deskripsi2"></span></td>
                            </tr>
                            <tr>
                                <th>Fungsi</th>
                                <td><span id="dtl_fungsi2"></span></td>
                            </tr>
                            <tr>
                                <th>Peran</th>
                                <td><span id="dtl_peran2"></span></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="" alt="" id="dtl_image2" class="h-100"></td>
                            </tr>

                        </tbody>
                    </table> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END  modal -->

</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true

        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var nama_departemen = $(this).data('nama_departemen');
            var nama_perusahaan = $(this).data('nama_perusahaan');
            var deskripsi = $(this).data('deskripsi');
            var fungsi = $(this).data('fungsi');
            var peran = $(this).data('peran');
            var image = $(this).data('image');
            $('#nama_departemen').text(nama_departemen);
            $('#nama_perusahaan').text(nama_perusahaan);
            $('#dtl_deskripsi').text(deskripsi);
            $('#dtl_deskripsi2').text(deskripsi);
            $('#dtl_fungsi').text(fungsi);
            $('#dtl_fungsi2').text(fungsi);
            $('#dtl_peran').text(peran);
            $('#dtl_peran2').text(peran);
            $('#dtl_image').attr("src", image);
            $('#dtl_image2').attr("src", image);

        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl2', function() {
            var deskripsi = $(this).data('deskripsi');
            $('#dtl_deskripsi').text(deskripsi);
        });
    });
</script>
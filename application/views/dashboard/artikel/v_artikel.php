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

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Artikel </strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?php echo base_url() ?>admin2/artikel/artikel/tambahArtikel" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Artikel</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <!-- <th>Isi Artikel</th>
                                    <th>Image</th> -->
                                    <th>Tanggal Pembuatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-sm ">
                                <?php $i = 1;
                                foreach ($artikel as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['judul_artikel']; ?></td>

                                        <td><?= $d['post_date']; ?></td>
                                        <td>
                                            <button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-judul_artikel="<?= $d['judul_artikel']; ?>" data-isi_artikel="<?= $d['isi_artikel']; ?>" data-post_date="<?= $d['post_date']; ?>" data-image=<?= base_url('assets/image/artikel/img/') . $d['image']; ?>><i class="fas fa-eye"></i></button>
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/artikel/artikel/edit/") . $d['id']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/artikel/artikel/hapus/") . $d['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
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

    <!-- Tambah  modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data Artikel</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/artikel/artikel/tambahArtikel'); ?>" method="POST" enctype="multipart/form-data">

                        <!-- Judul -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel">
                            </div>
                        </div>

                        <!-- Isi -->
                        <!-- <div class="mb-3 col-md-6"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Isi Artikel</label>
                                <textarea class="ckeditor text-start" id="isi_artikel" name="isi_artikel"></textarea>
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- Foto -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="colFormLabel" class="col-form-label text-start">Upload Image</label><br>
                                <input class="pt-1" type="file" id="file_image1" name="image">
                            </div>
                        </div>

                        <!-- Tanggal -->
                        <input type="hidden" class="form-control" id="post_date" name="post_date" placeholder="" readonly value="<?php echo date("Y-m-d"); ?>">


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail  modal -->
    <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body table-responsive ">
                    <h4 class="text-center pt-3" style="color: #335C32;"><Strong><span id="dtl_judul"></span></Strong></h4>
                    <div class="container text-center px-4 py-4">
                        <div class="row gx-5 ">
                            <div class="col">
                                <img src="" alt="" id="dtl_image" style="height: 500px; width: 500px;">
                            </div>
                            <div class="col">
                                <div class="row gx-5 ">
                                    <div class="col" >
                                        <!-- <p style="color: #335C32;"><Strong> Isi Artikel</Strong></p> -->
                                        <p id="dtl_isi2"></p>
                                    </div>
                                </div>
                                <div class="row gx-5  pt-4">
                                    <div class="col">
                                        <p style="color: #335C32;"><Strong>Post Date</Strong></p>
                                        <span id="dtl_post"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <table class="table table-striped " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Judul Artikel</th>
                                <td><span id="dtl_judul"></span></td>
                            </tr>
                            <tr>
                                <th>Isi Artikel</th>
                                <td><span id="dtl_isi2"></span></td>
                            </tr>
                            <tr>
                            <th>Image</th>
                                <td><img src="" alt="" id="dtl_image" style="width: 100px; height: 100px;"></td>
                            </tr>
                            <tr>
                                <th>Post Date</th>
                                <td><span id="dtl_post"></span></td>
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
            var judul_artikel = $(this).data('judul_artikel');
            var isi_artikel = $(this).data('isi_artikel');
            var image = $(this).data('image');
            var post_date = $(this).data('post_date');
            $('#dtl_judul').text(judul_artikel);
            // $('#dtl_isi').text(isi_artikel);
            $('#dtl_isi2').text('');
            $('#dtl_isi2').append(isi_artikel);
            $('#dtl_image').attr("src", image);
            $('#dtl_post').text(post_date);

        });
    });
</script>
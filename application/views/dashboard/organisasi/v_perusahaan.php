<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perusahaan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Perusahaan</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?php echo base_url() ?>admin2/organisasi/perusahaan/tambah_perusahaan" class="btn btn-primary" data-toggle="modal" data-target="#sizedModalLg">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="row m-2">
                    <div class="col-auto d-none d-sm-block ">
                        <h1 class="m-0 font-weight-bold ">Daftar Semua Perusahaan</h1>
                    </div>

                    <div class="col-md-4 ml-auto ">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control text-center" id="kota" name="kota" required>
                                        <option value="">-- Filter --</option>
                                        <option value="">-- Filter --</option>
                                        <option value="">-- Filter --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <form class="d-none d-sm-inline-block">
                                    <div class="input-group input-group-navbar">
                                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search" id="search_text" />
                                        <button class="btn" type="button">
                                            <i class="align-middle" data-feather="search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Industri</th>
                                    <th>Kota</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="result">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BEGIN  modal -->
    <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data Perusahaan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/organisasi/perusahaan/create_perusahaan'); ?>" method="POST" enctype="multipart/form-data">

                        <!-- Perusahaan -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Perusahaan</label>
                                <input type="text" class="form-control" id="perusahaan" name="perusahaan">
                            </div>
                        </div>

                        <!-- Industri -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Industri</label>
                                <input type="text" class="form-control" id="industri" name="industri">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <!-- provinsi -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="provinsi" required>
                                            <option value="">-- Pilih Provinsi --</option>
                                            <?php foreach ($provinsi as $prov) : ?>
                                                <option value="<?= $prov['id'] ?>"><?= $prov['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <!-- Kota -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Kota</label>
                                        <select class="form-control" id="kota" name="kota" required>
                                            <option value="">-- Pilih Kota --</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>



                        <!-- Email -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" class="form-control" id="industri" name="industri">
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Alamat</label>
                                <input type="text" class="form-control" id="industri" name="industri">
                            </div>
                        </div>

                        <!-- Telp -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Telp</label>
                                <input type="text" class="form-control" id="industri" name="industri">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END  modal -->
</main>
<!-- End Content -->
<script>
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin2/organisasi/perusahaan/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>
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

    });
</script>
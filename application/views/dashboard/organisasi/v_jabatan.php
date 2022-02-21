<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/perusahaan/'); ?>">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jabatan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Jabatan</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#modalJabatan">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Jabatan</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th id="no">No</th>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($jabatan as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['nama_divisi']; ?></td>
                                        <td>
                                            <!-- <button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#sizedModalMd" data-nama_jabatan="<?= $d['nama']; ?>" data-nama_divisi="<?= $d['nama_divisi']; ?>"><i class="fas fa-eye"></i></button> -->
                                            <a class="btn btn-primary" href="<?php echo base_url("admin2/organisasi/jabatan/edit/") . $d['jab_id']; ?>"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/jabatan/hapus/") . $d['jab_id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                            <!-- <tfoot class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th >Divisi</th>
                                    <th scope="col" >Action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BEGIN  modal -->
    <div class="modal fade" id="modalJabatan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data Jabatan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/organisasi/jabatan/add_jab'); ?>" method="POST">

                        <!-- Jabatan -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                        </div>

                        <!-- Devisi -->
                        <!-- <div class="mb-3 col-md-6"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Divisi</label>
                                <select class="form-control" id="divisi" name="divisi" required>
                                    <option value="">-- Pilih Divisi --</option>
                                    <?php foreach ($divisi as $org) : ?>
                                        <option value="<?= $org['div_id'] ?>"><?= $org['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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

    <!-- BEGIN  modal -->
    <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive ">
                    <table class="table table-striped " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Nama Jabatan</th>
                                <td><span id="dtl_jabatan"></span></td>
                            </tr>
                            <tr>
                                <th>Divisi</th>
                                <td><span id="dtl_divisi"></span></td>
                            </tr>

                        </tbody>
                    </table>
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
            var nama_jabatan = $(this).data('nama_jabatan');
            var nama_divisi = $(this).data('nama_divisi');
            $('#dtl_jabatan').text(nama_jabatan);
            $('#dtl_divisi').text(nama_divisi);

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollX": true

            // initComplete: function() {
            //     this.api().columns().every(function() {
            //         var column = this;
            //         var select = $('<select><option value="">All</option></select>')
            //             .appendTo($(column.footer('')).empty())
            //             .on('change', function() {
            //                 var val = $.fn.dataTable.util.escapeRegex(
            //                     $(this).val()
            //                 );

            //                 column
            //                     .search(val ? '^' + val + '$' : '', true, false)
            //                     .draw();
            //             });

            //         column.data().unique().sort().each(function(d, j) {
            //             select.append('<option value="' + d + '">' + d + '</option>')
            //         });
            //     });
            // }
        });
    });
</script>
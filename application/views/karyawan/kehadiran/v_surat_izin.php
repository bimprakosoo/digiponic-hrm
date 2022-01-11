<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Kehadiran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hak Istimewa</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card ">
                <div class="row my-2 my-xl-3 m-2">
                    <div class="col-auto d-none d-sm-block ">
                        <h3><strong>Izin Sakit</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#formTambah">Form Izin</button>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h3 class="m-0 font-weight-bold">Daftar Data Absensi</h3>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>

                                    <th>Tanggal Buat</th>
                                    <th>Jam </th>
                                    <th>Foto Surat Dokter</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($izin as $as) : ?>

                                    <tr>
                                        <td><?= $as['date_created']; ?></td>
                                        <td><?= $as['time_created']; ?></td>
                                        <td><?= $as['image']; ?></td>
                                        <td><?= $as['keterangan']; ?></td>
                                        <td><?php if ($as['status'] == 0) { ?>
                                                menunggu persetujuan
                                            <?php } else if ($as['status'] == 1) { ?>
                                                diterima
                                            <?php } else if ($as['status'] == 2) { ?>
                                                ditolak
                                            <?php } ?>
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

    <!-- BEGIN  modal -->
    <div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title">Form Izin </h4>
                </div>
                <div class="modal-body table-responsive ">
                    <form action="<?= base_url('karyawan/kehadiran/permits/izinform'); ?>" method="POST" enctype="multipart/form-data">
                        <!-- Department -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">name</label>
                                <input type="hidden" id="UserId" name="UserId" value="<?= $user['id'] ?>">
                            </div>
                        </div>

                        <!-- Perusahaan -->
                        <div class="mb-3 col-md-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">file upload</label>
                                    <input type="file" id="izin" name="izin">
                                </div>
                            </div>
                        </div>
                        <!-- Perusahaan -->
                        <div class="mb-3 col-md-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">keterangan</label>
                                    <textarea id="keterangan" name="keterangan" cols="30" rows="10"></textarea>
                                </div>
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
        $('#dataTable').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>
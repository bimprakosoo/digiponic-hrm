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
                        <h3><strong>Izin cuti</strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#sizedModalMd">Form Izin Sakit</button>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h3 class="m-0 font-weight-bold">Daftar Data Permohonan Cuti</h3>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Cuti</th>
                                    <th>Akhir Cuti </th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1;
                                
                                foreach ($cuti as $a) : ?>
                                    <tr>

                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $a['tgl_mulai']; ?></td>
                                        <td><?= $a['tgl_selesai']; ?></td>
                                        <td><?= $a['keterangan']; ?></td>
                                        <td><?= $a['status']; ?></td>
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
    <div class="modal fade" id="sizedModalMd" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title">Form Cuti </h4>
                </div>
                <div class="modal-body table-responsive ">
                    <form action="<?= base_url('karyawan/pengajuan/cuti/kirim_pengajuan_cuti'); ?>" method="POST">

                        <!-- <div class="row"> -->
                        <input type="hidden" id="UserId" name="UserId" value="<?= $user['idusers'] ?>">
                        <!-- <div class="row"> -->
                        <!-- Tanggal Mulai -->
                        <div class="col-md-12">
                            <div class="modal-body">
                                <label for="title">Tanggal Mulai</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_mulai" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                        <!-- Tanggal Berakhir -->
                        <div class="col-md-12">
                            <div class="modal-body">
                                <label for="title">Tanggal Berakhir</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_berakhir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="col-md-12">
                            <div class="modal-body">
                                <label for="title">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="ckeditor"></textarea>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Kirim</button>
                        </div>
                    </form>

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
<div class="tab-pane fade" id="selesai">
    <h4 class="mt-3">Data Karyawan</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable1" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tgl Mutasi</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>

</div>
</div>
</div>

<!-- kelolah data karyawan -->
<div class="modal fade" id="ModalReadyProbation2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="m-0 font-weight-bold ">Managemt Probation</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?= base_url('admin2/karyawan/probation/tambah_ProbationKaryawan'); ?>" method="POST">

                    <div class="row">
                        <!-- karyawan -->
                        <div class="col-md-6">
                            <div class="modal-body">

                                <label for="title">karyawan</label>
                                <input type="text" value="">
                            </div>
                        </div>

                        <!-- dekspripsi -->
                        <div class="col-md-12">
                            <div class="modal-body">

                                <label for="title">Deskripsi</label>
                                <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea>


                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- jenis pelatihan -->
                    </div>

                    <div class="row">
                        <!-- karyawan -->

                    </div>

                    <div class="row">
                        <!-- Tanggal Mulai -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Mulai</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_mulai" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                        <!-- Tanggal Berakhir -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Berakhir</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_berakhir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
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

<!-- diterima -->
<?php $i = 1;
foreach ($karyawan_probation as $m) : ?>
    <div class="modal fade" id="ModalReadyProbation-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proses Probation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin2/karyawan/probation/tambah_ProbationKaryawan/') . $m['id']; ?>" method="POST">

                    <div class="row">
                        <!-- karyawan -->
                        <div class="col-md-6">
                            <div class="modal-body">

                                <h5>nama : <?= $m['nama']; ?></h5>
                            </div>
                        </div>

                        <!-- dekspripsi -->
                        <div class="col-md-12">
                            <div class="modal-body">

                                <label for="title">Deskripsi</label>
                                <!-- <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea> -->
                                <div>

                                    <textarea name="deskripsi" id="deskripsi" cols="60" rows="10"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- jenis pelatihan -->
                    </div>

                    <div class="row">
                        <!-- karyawan -->

                    </div>

                    <div class="row">
                        <!-- Tanggal Mulai -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Mulai</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_mulai" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                        <!-- Tanggal Berakhir -->
                        <div class="col-md-6">
                            <div class="modal-body">
                                <label for="title">Tanggal Berakhir</label>
                                <div class="input-group mb-3 date">
                                    <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                    <input type="date" class="form-control" id="txtFromDate" name="tgl_berakhir" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Process</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>
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

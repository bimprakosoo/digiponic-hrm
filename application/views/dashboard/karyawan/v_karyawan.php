<div class="tab-pane fade" id="karyawan">
    <h4 class="mt-3">Data Karyawan</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tgl Mutasi</th>
                        <th>Target</th>
                        <th>Departemen</th>
                        <th>Divisi </th>
                        <th>Jabatan</th>
                        <th>Posisi</th>
                        <th>Penempatan</th>
                        <th scope="col">Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                        foreach ($all_posisikaryawan as $m) : ?>
                            <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $m['karyawan']; ?></td>
                            <td><?= $m['namaPerusahaan']; ?></td>
                            <td><?= $m['namaDepartement']; ?></td>
                            <td><?= $m['namaDivisi']; ?></td>
                            <td><?= $m['namaJabatan']; ?></td>
                            <td><?= $m['namaPosisi']; ?></td>
                            <td><?= $m['namaPenempatan']; ?></td>
                            <td><?= $m['namaGolongan']; ?></td>
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

</div>
</div>
</div>

<!-- kelolah data karyawan -->
<div class="modal fade" id="modalStrukturKaryawan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="m-0 font-weight-bold ">Managemt Karyawan</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?= base_url('admin2/karyawan/karyawan/tambah_DataKaryawan'); ?>" method="POST">

                    <input type="hidden" class="form-control" id="post_date" name="post_date" readonly value="<?php echo date("Y-m-d"); ?>">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" readonly value="<?= $user['id']; ?>">

                    <!-- Karyawan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">karyawan</label>

                            <input class="form-control" type="text" id="karyawan" name="karyawan" required>
                        </div>
                    </div>

                    <!-- Department -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Department</label>
                            <select class="form-control" id="department" name="department" required>
                                <option value="">-- Pilih --</option>
                                <?php foreach ($department as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>

                    <!-- Divisi -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Divisi</label>
                            <select class="form-control" id="divisi" name="divisi" required>
                                <option value="">-- Pilih divisi --</option>

                            </select>

                        </div>
                    </div>

                    <!-- Jabatan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Jabatan</label>
                            <select class="form-control" id="jabatan" name="jabatan" required>
                                <option value="">-- Pilih jabatan --</option>

                            </select>

                        </div>
                    </div>

                    <!-- Golongan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Golongan</label>
                            <select class="form-control" id="golongan" name="golongan" required>
                                <option value=""></option>
                                <?php foreach ($data_golongan as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                <?php endforeach; ?>

                            </select>

                        </div>
                    </div>

                    <!-- Posisi -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Posisi</label>
                            <select class="form-control" id="posisi" name="posisi" required>
                                <option value="">-- Pilih posisi --</option>

                            </select>

                        </div>
                    </div>

                    <!-- Penempatan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">penempatan</label>
                            <select class="form-control" id="penempatan" name="penempatan" required>
                                <option value="">-- Pilih --</option>
                                <?php foreach ($penempatan as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                <?php endforeach; ?>

                            </select>
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
<script>
    $(document).ready(function() {
        $('#dataTable1').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });
    });
</script>


<script>
    $(document).ready(function() {

        // devisi
        $('#department').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/mutasi/mutasi/getDivisi') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#divisi').html(response);
                    // get id kota by provinsi
                }
            });
        });

        //  jabatan
        $('#divisi').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/mutasi/mutasi/getJabatan') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#jabatan').html(response);
                    // get id kota by provinsi
                }
            });
        });

        //  golongan
        //  $('#jabatan').change(function() {
        //      var id = $(this).val();
        //      // console.log(id); // cek id
        //      $.ajax({
        //          type: "POST",
        //          url: "<?= base_url('admin2/mutasi/mutasi/getGolongan') ?>",
        //          data: {
        //              id: id
        //          },
        //          dataType: "JSON",
        //          success: function(response) {
        //              // console.log(response);
        //              $('#golongan').html(response);
        //              // get id kota by provinsi
        //          }
        //      });
        //  });

        //  posisi
        $('#jabatan').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/mutasi/mutasi/getPosisi') ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    // console.log(response);
                    $('#posisi').html(response);
                    // get id kota by provinsi
                }
            });
        });



    });
</script>
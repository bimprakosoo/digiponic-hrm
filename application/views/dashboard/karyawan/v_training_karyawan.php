<div class="tab-pane fade" id="karyawan">
    <h4 class="mt-3">Data Karyawan</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable1" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
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
                        <th>Jenis Mutasi</th>
                        <th>Jenis Mutasi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1;
                        foreach ($data_training as $m) : ?>
                            <td><?= $m['nama_perusahaan']; ?></td>
                        <?php $i++;
                        endforeach; ?>
                    </tr>
                </tbody>
            </table>
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
                <h1 class="m-0 font-weight-bold ">Managemt Training</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?= base_url('admin2/karyawan/karyawan/Tambah_DataKaryawan_Training'); ?>" method="POST">

                    <!-- karyawan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">karyawan</label>
                            <select class="form-control" id="karyawan" name="karyawan" required>
                                <option value="">-- Pilih --</option>
                                <?php foreach ($all_detailkaryawan as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Perusahaan -->
                    <div class="col-md-6">
                        <div class="modal-body">

                            <label for="title">Perusahaan</label>
                            <select class="form-control" id="perusahaan" name="perusahaan" required>
                                <option value="">-- Pilih --</option>
                                <?php foreach ($perusahaan as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
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
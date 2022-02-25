<div class="tab-pane fade" id="tab-history">
    <h4 class="mt-3">history Mutasi</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="example2" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Jenis Mutasi</th>
                        <th>Tgl Pengajuan</th>
                        <th>status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($mutasiData as $md) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $md['userID']; ?></td>
                            <td><?= $md['jenis_mutasi']; ?></td>
                            <td><?= $md['tgl_pengajuan']; ?></td>
                            <td><?= $md['status']; ?></td>

                            <td><button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#detail-data" data-tglpengajuan="<?= $md['tgl_pengajuan']; ?>" data-karyawan="<?= $md['userID']; ?>" data-department="<?= $md['namaDepartment']; ?>" data-divisi="<?= $md['namaDivisi']; ?>" data-jabatan="<?= $md['namaJabatan']; ?>" data-golongan="<?= $md['namaGolongan']; ?>" data-posisi="<?= $md['namaPosisi']; ?>" data-penempatan="<?= $md['namaPenempatan']; ?>" data-status="<?= $md['status']; ?>" data-jenismutasi="<?= $md['jenis_mutasi']; ?>">
                                    <i class="fas fa-eye"></i></button>
                                <a class="btn btn-primary" href="<?php echo base_url("admin2/mutasi/mutasi/edit/") ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/department/hapus/") . $md['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
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

<!-- Detail  modal -->
<div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Perusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive ">
                <table class="table table-bordered " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Tgl Pengajuan</th>
                            <td><span id="tglpengajuan"></span></td>
                        </tr>
                        <tr>
                            <th>Nama Karyawan</th>
                            <td><span id="dtl-karyawan"></span></td>
                        </tr>
                        <tr>
                            <th>department</th>
                            <td><span id="dtl-department"></span></td>
                        </tr>
                        <tr>
                            <th>divisi</th>
                            <td><span id="dtl-divisi"></span></td>
                        </tr>
                        <tr>
                            <th>jabatan</th>
                            <td><span id="dtl-jabatan"></span></td>
                        </tr>
                        <tr>
                            <th>golongan</th>
                            <td><span id="dtl-golongan"></span></td>
                        </tr>
                        <tr>
                            <th>posisi</th>
                            <td><span id="dtl-posisi"></span></td>
                        </tr>
                        <tr>
                            <th>penempatan</th>
                            <td><span id="dtl-penempatan"></span></td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td><span id="dtl-status"></span></td>
                        </tr>
                        <tr>
                            <th>jenisMutasi</th>
                            <td><span id="dtl-jenismutasi"></span></td>
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

</div>
</div>
</div>




</main>
<!-- End Content -->
<!-- <script>
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
</script> -->
<script>
    $(document).ready(function() {
        $('#example, #example2, #example1').DataTable({
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
<!-- <script>
    $(document).ready(function() {
        $('#example2').DataTable({
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
</script> -->

<!-- chain struktur posisi karyawan -->
<script>
    $(document).ready(function() {

        // devisi
        $('#department').change(function() {
            var id = $(this).val();
            // console.log(id); // cek id
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin2/mutasi/mutasi/getDepartment') ?>",
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



<!-- detail-data -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var D_tglpengajuan = $(this).data('tglpengajuan');
            var D_karyawan = $(this).data('karyawan');
            var D_department = $(this).data('department');
            var D_divisi = $(this).data('divisi');
            var D_jabatan = $(this).data('jabatan');
            var D_golongan = $(this).data('golongan');
            var D_posisi = $(this).data('posisi');
            var D_penempatan = $(this).data('penempatan');
            var D_status = $(this).data('status');
            var D_jenismutasi = $(this).data('jenismutasi');
            $('#tglpengajuan').text(D_tglpengajuan);
            $('#dtl-karyawan').text(D_karyawan);
            $('#dtl-department').text(D_department);
            $('#dtl-divisi').text(D_divisi);
            $('#dtl-jabatan').text(D_jabatan);
            $('#dtl-golongan').text(D_golongan);
            $('#dtl-posisi').text(D_posisi);
            $('#dtl-penempatan').text(D_penempatan);
            $('#dtl-status').text(D_status);
            $('#dtl-jenismutasi').text(D_jenismutasi);
        });
    });
</script>
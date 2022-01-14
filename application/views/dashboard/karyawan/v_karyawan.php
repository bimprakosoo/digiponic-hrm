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
                        <?php var_dump($datakaryawan); die; ?>
                        <?php $i = 1;
                        foreach ($datakaryawan as $d) : ?>
                            
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
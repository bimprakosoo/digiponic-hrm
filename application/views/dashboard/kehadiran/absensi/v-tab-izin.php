<div class="tab-pane fade" id="ditolak">
    <h4 class="mt-3">List Lamaran Masuk</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>No.Telp</th>
                        <th>Pendidikan</th>
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


<!-- BEGIN  modal -->
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title">Form Izin </h4>
            </div>
            <div class="modal-body table-responsive ">
                <form method="POST" id="abs">

                    <!-- Date -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <!-- status -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option selected></option>
                                <option value="1">Masuk</option>
                                <option value="2">Absen</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" id="absen" value='Absen' class="btn btn-primary">Simpan</button>
                        <!-- <input type="button" id="absen" value='Absen'> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END  modal -->

</main>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>

<!-- Script -->
<script type="text/javascript">
    $(document).ready(function() {

        // Check all
        $("#checkall").change(function() {

            var checked = $(this).is(':checked');
            if (checked) {
                $(".checkbox").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $(".checkbox").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });

        // Changing state of CheckAll checkbox 
        $(".checkbox").click(function() {

            if ($(".checkbox").length == $(".checkbox:checked").length) {
                $("#checkall").prop("checked", true);
            } else {
                $("#checkall").prop("checked", false);
            }

        });


        // insert button clicked
        $('#absen').click(function() {

            // Confirm alert
            var insertConfirm = confirm("Are you sure masuk?");
            if (insertConfirm == true) {

                // Get userid from checked checkboxes
                var users_arr = [];
                $(".checkbox:checked").each(function() {
                    var userid = $(this).val();

                    users_arr.push(userid);
                });

                // Array length
                var length = users_arr.length;
                var status = $('#status').val();
                var date = $('#date').val();

                if (length > 0) {

                    // AJAX request
                    $.ajax({
                        url: '<?= base_url() ?>admin2/kehadiran/absensi/insertUser',
                        type: 'post',
                        data: {
                            user_ids: users_arr,
                            status_id: status,
                            dates: date
                        },
                        success: function() {
                            location.reload(true);
                        }
                    });
                }
            }

        });
    });
</script>
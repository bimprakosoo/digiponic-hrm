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
                        <h3><strong></strong></h3>
                    </div>

                    <div class="col-auto ml-auto ">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#formTambah">keterangan absen</button>
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
                                    <!-- <th><input type="checkbox" id="checkall" value='1'>&nbsp;<input type="button" id="absen" value='Absen'></th> -->
                                    <th><input type="checkbox" id="checkall" value='1'>
                                        <!-- <th>No</th> -->
                                    <th>ID Karyawan</th>
                                    <th>Nama</th>
                                    <th>Status Kehadiran</th>
                                    <!-- <th>Lokasi</th> -->
                                </tr>
                            </thead>
                            <tbody>


                                <!-- <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                        </th> -->
                                <?php $i = 1;
                                foreach ($getuser as $g) : ?>
                                    <tr>
                                        <td align='center'><input type="checkbox" class='checkbox' name='absen[]' value='<?= $g['id'] ?>'></td>
                                        <td><?= $g['id']; ?></td>
                                        <td><?= $g['nama']; ?></td>
                                        
                                        <td><?php if ($g['status'] == 1) { ?>
                                                Hadir
                                            <?php } else if ($g['status'] == 2) { ?>
                                                Absen
                                            <?php } else if ($g['status'] == null) { ?>
                                                Belum Abseni
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
<!-- End Content -->
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


                        }
                    });
                }
            }

        });
    });
</script>
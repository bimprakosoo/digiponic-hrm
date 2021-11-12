<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Penilaian Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">KPI Departemen</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">


        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow">
                <div class="card-header py-3">
                    <div class="row my-2 my-xl-3 m-2">
                        <div class="col-auto d-none d-sm-block ">
                            <h3><strong>Tambah KPI Departemen</strong></h3>
                        </div>

                        <div class="col-auto ml-auto ">
                            <a href="<?php echo base_url() ?>admin2/penilaian_pekerja//kpi_departemen/tambah" class="btn btn-primary">Simpan Data</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-body" style="margin-top: -30px;">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputState">Departemen</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="inputCity">Tanggal Buat</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputZip">Keterangan</label>
                            <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="">
                        <button type="button" name="add" id="add" class="btn btn-primary btn-xs">Tambah Data</button>
                    </div>
                </div>
            </div>
            <div class="card mb-4" style="margin-top: -24px; box-shadow: inset 0px 5px 31px rgba(0, 0, 0, 0.15); background: #FFFFFF;">
                <div class="table-responsive">
                <table class="table table-bordered" id="crud_table">
                        <tr>
                            <th>Key Perfomance Indicators</th>
                            <th>Unit Pengukuran</th>
                            <th>Target</th>
                            <th>Realisasi</th>
                            <th>Skor</th>
                            <th scope="col">Action</th>
                            <!-- <th width="5%"></th> -->
                        </tr>
                        <tr>
                            <td contenteditable="true" class="key_perfomance_indicators"></td>
                            <td contenteditable="true" class="unit_pengukuran"></td>
                            <td contenteditable="true" class="target"></td>
                            <td contenteditable="true" class="realisasi"></td>
                            <td contenteditable="true" class="skor"></td>
                            <td contenteditable="true" class="action"></td>
                            <!-- <td></td> -->
                        </tr>
                    </table>
                    <br />
                    <div id="inserted_item_data"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        var count = 1;
        $('#add').click(function() {
            count = count + 1;
            var html_code = "<tr id='row" + count + "'>";
            html_code += "<td contenteditable='true' class='key_perfomance_indicators'></td>";
            html_code += "<td contenteditable='true' class='unit_pengukuran'></td>";
            html_code += "<td contenteditable='true' class='target' ></td>";
            html_code += "<td contenteditable='true' class='realisasi' ></td>";
            html_code += "<td contenteditable='true' class='skor' ></td>";
            html_code += "<td><button type='button' name='remove' data-row='row" + count + "' class='btn btn-danger btn-xs remove'>Hapus</button></td>";
            html_code += "</tr>";
            $('#crud_table').append(html_code);
        });

        $(document).on('click', '.remove', function() {
            var delete_row = $(this).data("row");
            $('#' + delete_row).remove();
        });

        //     $('#save').click(function() {
        //         var item_name = [];
        //         var item_code = [];
        //         var item_desc = [];
        //         var item_price = [];
        //         $('.item_name').each(function() {
        //             item_name.push($(this).text());
        //         });
        //         $('.item_code').each(function() {
        //             item_code.push($(this).text());
        //         });
        //         $('.item_desc').each(function() {
        //             item_desc.push($(this).text());
        //         });
        //         $('.item_price').each(function() {
        //             item_price.push($(this).text());
        //         });
        //         $.ajax({
        //             url: "insert.php",
        //             method: "POST",
        //             data: {
        //                 item_name: item_name,
        //                 item_code: item_code,
        //                 item_desc: item_desc,
        //                 item_price: item_price
        //             },
        //             success: function(data) {
        //                 alert(data);
        //                 $("td[contentEditable='true']").text("");
        //                 for (var i = 2; i <= count; i++) {
        //                     $('tr#' + i + '').remove();
        //                 }
        //                 fetch_item_data();
        //             }
        //         });
        //     });

        //     function fetch_item_data() {
        //         $.ajax({
        //             url: "fetch.php",
        //             method: "POST",
        //             success: function(data) {
        //                 $('#inserted_item_data').html(data);
        //             }
        //         })
        //     }
        //     fetch_item_data();

    });
</script>
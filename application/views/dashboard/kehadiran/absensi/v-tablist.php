<div class="tab-content">

    <div class="row my-2 my-xl-3 m-2">
        <div class="col-auto ml-auto ">
            <button class="btn btn-primary" data-toggle="modal" data-target="#formTambah">keterangan absen</button>
        </div>
    </div>

    <div class="tab-pane fade" id="list">
        <h4 class="mt-3">List Lamaran Masuk</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th></th>
                            <th>ID Karyawan</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($getuser as $g) : ?>
                            <tr>
                                <td align='center'><input type="checkbox" class='checkbox' name='absen[]' value='<?= $g['id'] ?>'></td>
                                <td><?= $g['id']; ?></td>
                                <td><?= $g['nama']; ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <!-- end tab 1 -->
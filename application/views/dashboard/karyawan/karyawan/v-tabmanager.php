<div class="tab-pane fade" id="manager">
    <h4 class="mt-3">Manager</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Perusahaan</th>
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
                    foreach ($Allkaryawan as $m) : ?>
                        <?php if ($m['gol_id'] == 3) { ?>
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
                        <?php } ?>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end tab 1 -->
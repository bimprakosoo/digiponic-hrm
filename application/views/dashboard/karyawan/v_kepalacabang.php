<div class="tab-content">

    <div class="tab-pane fade" id="kepalacabang">
        <h4 class="mt-3">Data Kepala Cabang</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>nama </th>
                            <th>perusahaan</th>
                            <th>department</th>
                            <th>devisi</th>
                            <th>jabatan</th>
                            <th>posisi</th>
                            <th>penempatan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datakaryawan as $dk) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $dk['namaKaryawan']; ?></td>
                                <td><?= $dk['namaPerusahaan']; ?></td>
                                <td><?= $dk['namaDepartement']; ?></td>
                                <td><?= $dk['namaDivisi']; ?></td>
                                <td><?= $dk['namaJabatan']; ?></td>
                                <td><?= $dk['namaPosisi']; ?></td>
                                <td><?= $dk['namaPenempatan']; ?></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
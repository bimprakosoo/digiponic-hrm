<div class="tab-content">

    <div class="tab-pane fade" id="kepalacabang">
        <h4 class="mt-3">Data Kepala</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <!-- <th>No</th> -->
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

                        <?php $i = 1;
                        foreach ($datakaryawan as $m) : ?>
                            <?php if ($m['gol_id'] == 4) { ?>
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
                                <tr>
                                <?php } ?>
                            <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<div class="tab-content">

    <div class="tab-pane fade" id="karyawan-baru">
        <h4 class="mt-3">Data karyawan baru</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>posisi training</th>
                            <th>status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($karyawan_probation as $kb) : ?>
                            <?php if ($kb['status'] != 3) { ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $kb['nama']; ?></td>
                                    <td><?= $kb['nama_posisi']; ?></td>
                                    <td><?php if ($kb['status'] == 0) { ?>
                                            Ready
                                        <?php } else if ($kb['status'] == 1) { ?>
                                            Proses Probation
                                        <?php } else if ($kb['status'] == 2) { ?>
                                            proses Evaluasi
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button name="submit" class="btn btn-success" data-toggle="modal" data-target="#ModalReadyProbation-<?= $i; ?>">Probation</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
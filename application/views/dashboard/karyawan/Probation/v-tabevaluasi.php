    <div class="tab-pane fade" id="evaluasi">
        <h4 class="mt-3">Data Kepala</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>posisi training</th>
                            <th>tgl Mulai</th>
                            <th>tgl Selesai</th>
                            <th>status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($dataprobation as $kb) : ?>
                            <?php if ($kb['status'] == 2) { ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $kb['nama']; ?></td>
                                    <td><?= $kb['nama_posisi']; ?></td>
                                    <td><?= $kb['tgl_mulai']; ?></td>
                                    <td><?= $kb['tgl_selesai']; ?></td>
                                    <td><?php if ($kb['status'] == 1) { ?>
                                            sedang berjalan
                                        <?php } else if ($kb['status'] == 2) { ?>
                                            menuggu evaluasi
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <!-- <button name="submit" class="btn btn-success" data-toggle="modal" data-target="# -<?= $i; ?>">evaluasi</button> -->
                                        <?php if ($kb['status'] == 2) { ?>
                                            <button name="submit" class="btn btn-success" data-toggle="modal" data-target="# -<?= $i; ?>">evaluasi</button>
                                        <?php } ?>
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
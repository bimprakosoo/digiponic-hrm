<div class="tab-pane fade" id="probation">
    <h4 class="mt-3">Data karyawan Probation</h4>
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
                        <?php if ($kb['status'] == 1) { ?>
                            <tr>

                                <th scope="row"><?= $i ?></th>
                                <td><?= $kb['nama']; ?></td>
                                <!-- <td><?= date("Y-m-d"); ?></td> -->
                                <td><?= $kb['nama_posisi']; ?></td>
                                <td><?= $kb['tgl_mulai']; ?></td>
                                <td><?= $kb['tgl_selesai']; ?></td>

                                <td><?php if (date("Y-m-d") < $kb['tgl_selesai']) { ?>
                                        sedang berjalan
                                    <?php } else if (date("Y-m-d") > $kb['tgl_selesai']) { ?>
                                        menuggu evaluasi
                                    <?php } ?>
                                </td>
                                <td>
                                   
                                    <?php if (date("Y-m-d") >= $kb['tgl_selesai']) { ?>
                                        <!-- <button name="submit" class="btn btn-success" data-toggle="modal" data-target="# -<?= $i; ?>">evaluasi</button> -->
                                         <a class="btn btn-success" href="<?php echo base_url("admin2/karyawan/probations/evaluasi/EvaluasiProbation/") . $kb['probation_id']; ?>">evaluasi</a>
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
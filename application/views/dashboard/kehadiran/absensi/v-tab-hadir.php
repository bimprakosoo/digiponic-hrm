<div class="tab-pane fade" id="hadir">
    <h4 class="mt-3">List Lamaran Masuk</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <!-- <th></th> -->
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($gethadir as $g) : ?>

                        <?php if ($g['status'] != 3) { ?>
                            <tr>
                                <td><?= $g['id']; ?></td>
                                <td><?= $g['nama']; ?></td>
                                <td><?= $g['tanggal']; ?></td>

                                <td>
                                    <?php if ($g['status'] == 1) { ?>
                                        Hadir
                                    <?php } else if ($g['status'] == 2) { ?>
                                        Absen
                                    <?php } else if ($g['status'] == 3) { ?>
                                        izin
                                    <?php } else if ($g['status'] == null) { ?>
                                        Belum Abseni
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
<!-- end tab 1 -->
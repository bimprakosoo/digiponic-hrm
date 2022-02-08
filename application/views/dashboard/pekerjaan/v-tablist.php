<div class="tab-content">

    <div class="tab-pane fade" id="list">
        <h4 class="mt-3">List Lamaran Masuk</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Lowongan</th>
                            <th>status</th> 
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($lamaran_masuk as $m) : ?>
                            <?php if ($m['status'] == 0) { ?>
                                <tr>
                                    <td scope="row"><?= $i ?></td>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['nama_posisi']; ?></td>
                                    <td><?php if ($m['status'] == 0) { ?>
                                            menunggu
                                        <?php  } else if ($m['status'] == 1) { ?>
                                            diproses
                                        <?php  } else if ($m['status'] == 2) { ?>
                                            diterima
                                        <?php  } else if ($m['status'] == 3) { ?>
                                            ditolak
                                        <?php } ?></td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#diproses-<?= $i; ?>">Proses</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#ditolak-<?= $i; ?>">Di Tolak</button>
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end tab 1 -->
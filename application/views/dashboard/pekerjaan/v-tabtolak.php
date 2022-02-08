<div class="tab-pane fade" id="ditolak">
    <h4 class="mt-3">List Lamaran Masuk</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lowongan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lamaran_masuk as $m) : ?>
                        <?php if ($m['status'] == 3) { ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
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
                            </tr>
                        <?php } ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>

</div>
</div>
</div>


</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>

<!-- diproses -->
<?php
$i = 1;
foreach ($lamaran_masuk as $m) : ?>
    <div class="modal fade" id="diproses-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">apakah anda ingin proses pelamar atas nama : <?= $m['nama']; ?> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin2/pekerjaan/lamaranmasuk/diproses/') . $m['id']; ?>">Proses</a>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>

<!-- diproses -->
<?php
$i = 1;
foreach ($lamaran_masuk as $m) : ?>
    <div class="modal fade" id="ditolak-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">apakah anda ingin menolak pelamar atas nama : <?= $m['nama']; ?> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin2/pekerjaan/lamaranmasuk/ditolak/') . $m['id']; ?>">Di Tolak</a>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>

<!-- diterima -->
<?php $i = 1;
foreach ($lamaran_masuk as $m) : ?>
    <div class="modal fade" id="diterima-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">apakah anda ingin menerima pelamar atas nama : <?= $m['nama']; ?> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin2/pekerjaan/lamaranmasuk/diterima/') . $m['id']; ?>">Terima Lamaran</a>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
<?php endforeach; ?>
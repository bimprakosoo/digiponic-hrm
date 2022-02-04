<div class="tab-content">

    <div class="tab-pane fade" id="tab-list">
        <h4 class="mt-3">List Karyawan</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Department</th>
                            <th>Posisi</th>
                            <!-- <th>Jenis Mutasi</th> -->
                            <!-- <th>Tgl Pengajuan</th> -->
                            <!-- <th>status</th> -->
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($dkaryawan as $md) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $md['nama']; ?></td>
                                <td><?= $md['department_id']; ?></td>
                                <td><?= $md['posisi_id']; ?></td>

                                <td>
                                    <a class="btn btn-primary" href="<?php echo base_url("admin2/mutasi/mutasi/edit/") . $md['id']; ?>"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/department/hapus/") . $md['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
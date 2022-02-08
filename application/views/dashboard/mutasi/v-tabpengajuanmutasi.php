    <div class="tab-pane fade" id="tab-mutasi">
        <h4 class="mt-3">List Mutasi</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Mutasi</th>
                            <th>Tgl Pengajuan</th>
                            <th>status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($mutasiData as $md) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $md['userID']; ?></td>
                                <td><?= $md['jenis_mutasi']; ?></td>
                                <td><?= $md['tgl_pengajuan']; ?></td>
                                <td><?= $md['status']; ?></td>

                                <td><button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#detail-data" data-tglpengajuan="<?= $md['tgl_pengajuan']; ?>" data-karyawan="<?= $md['userID']; ?>" data-department="<?= $md['namaDepartment']; ?>" data-divisi="<?= $md['namaDivisi']; ?>" data-jabatan="<?= $md['namaJabatan']; ?>" data-golongan="<?= $md['namaGolongan']; ?>" data-posisi="<?= $md['namaPosisi']; ?>" data-penempatan="<?= $md['namaPenempatan']; ?>" data-status="<?= $md['status']; ?>" data-jenismutasi="<?= $md['jenis_mutasi']; ?>">
                                        <i class="fas fa-eye"></i></button>
                                    <a class="btn btn-primary" href="<?php echo base_url("admin2/mutasi/mutasi/edit/") ?>"><i class="fas fa-edit"></i></a>
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
    <!-- end tab 2 -->
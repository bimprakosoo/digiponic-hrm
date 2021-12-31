<div class="tab-content">

    <div class="tab-pane fade" id="kepalacabang">
        <h4 class="mt-3">Data Kepala</h4>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped text-center" id="example" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
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
                        
                        <?php foreach ($datakaryawan as $dk) : ?>
                            <tr>
                                <!-- <th scope="row"><?= $i ?></th> -->
                                <td><?= $dk['namaKaryawan']; ?></td>
                                <td><?= $dk['namaPerusahaan']; ?></td>
                                <td><?= $dk['namaDepartement']; ?></td>
                                <td><?= $dk['namaDivisi']; ?></td>
                                <td><?= $dk['namaJabatan']; ?></td>
                                <td><?= $dk['namaPosisi']; ?></td>
                                <td><?= $dk['namaPenempatan']; ?></td>

                            </tr>
                            
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
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
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
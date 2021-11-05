<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lowongan</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Lowongan</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a href="<?php echo base_url() ?>admin/tambah_lowongan" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Lowongan</h1>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Action</th>
                                    <th>Nama Pekerjaan</th>
                                    <th>Lokasi</th>
                                    <th>Perusahaan</th>
                                    <th>Industri</th>
                                    <th>Tipe Pekerjaan</th>
                                    <th>Pengalaman Pekerjaan</th>
                                    <th>Insentif</th>
                                    <th>Level Pekerjaan</th>
                                    <th>Pendidikan</th>
                                    <th>Waktu bekerja</th>
                                    <th>Gaji</th>
                                    <th>Post Date</th>
                                    <th>Keterangan Pekerjaan</th>
                                    <th>Syarat Pengalaman</th>
                                    <th>Tunjangan</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lowongan as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= ++$start; ?></th>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Hapus</a>
                                        </td>
                                        <td><?= $m['nama_lowongan']; ?></td>
                                        <td><?= $m['lokasi']; ?></td>
                                        <td><?= $m['perusahaan']; ?></td>
                                        <td><?= $m['industri']; ?></td>
                                        <td><?= $m['tipe_pekerjaan']; ?></td>
                                        <td><?= $m['pengalaman_kerja']; ?></td>
                                        <td><?= $m['insentif_lembur']; ?></td>
                                        <td><?= $m['level_pekerjaan']; ?></td>
                                        <td><?= $m['pendidikan']; ?></td>
                                        <td><?= $m['waktu_bekerja']; ?></td>
                                        <td><?= $m['gaji']; ?></td>
                                        <td><?= $m['post_date']; ?></td>
                                        <td><?= $m['ket']; ?></td>
                                        <td><?= $m['syarat_pengalaman']; ?></td>
                                        <td><?= $m['tunjangan']; ?></td>
                                        <td><?= $m['image']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?= $this->pagination->create_links();?>
            </div>
        </div>
    </div>
</main>
<!-- End Content -->
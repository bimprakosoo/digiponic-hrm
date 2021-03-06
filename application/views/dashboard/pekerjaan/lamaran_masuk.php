 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Lamaran Masuk</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">
         <!-- <div class="card ">
             <div class="row my-2 my-xl-3 m-2">
                 <div class="col-auto d-none d-sm-block ">
                     <h3><strong>Tambah Data Lowongan</strong></h3>
                 </div>

                 <div class="col-auto ml-auto ">
                     <button class="btn btn-primary">Tambah Data</button>
                 </div>
             </div>
         </div> -->

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow mb-4 ">
                 <div class="card-header py-3">
                     <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                     <h1 class="m-0 font-weight-bold ">Daftar Semua Lowongan</h1>
                 </div>
                 <div class="card-body ">
                     <div class="table-responsive">
                         <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                             <thead class="table-dark">
                                 <tr>
                                     <th>No</th>
                                     <th>Status</th>
                                     <th>Nama</th>
                                     <!-- <th>Provinsi</th> -->
                                     <!-- <th>Kota/Kabupaten</th> -->
                                     <!-- <th>Kecamatan</th> -->
                                     <!-- <th>Alamat Lengkap</th> -->
                                     <th>Jenis Kelamin</th>
                                     <th>Tanggal Lahir</th>
                                     <th>No.Telp</th>
                                     <th>Pendidikan</th>
                                     <!-- <th>Status Perkawinan</th> -->
                                     <!-- <th>Status Lamaran</th> -->
                                     <!-- <th>CV</th> -->
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($lamaran_masuk as $m) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td><?php if ($m['status'] == 0) { ?>
                                                 menunggu
                                             <?php  } else if ($m['status'] == 1) { ?>
                                                 diterima
                                             <?php  } else if ($m['status'] == 2) { ?>
                                                 diproses
                                             <?php  } else if ($m['status'] == 3) { ?>
                                                 ditolak
                                             <?php } ?></td>
                                         <td><?= $m['nama']; ?></td>
                                         <td><?= $m['jk']; ?></td>
                                         <td><?= $m['tgl_lahir']; ?></td>
                                         <td><?= $m['no_telp']; ?></td>
                                         <td><?= $m['pendidikan_terakhir']; ?></td>

                                         <td>
                                             <button class="btn btn-primary" data-toggle="modal" data-target="#diterima-<?= $i; ?>">Di Terima</button>
                                             <button class="btn btn-danger" data-toggle="modal" data-target="#diproses-<?= $i; ?>">Di Proses</button>
                                             <button class="btn btn-danger" data-toggle="modal" data-target="#ditolak-<?= $i; ?>">Di Tolak</button>
                                         </td>
                                     </tr>
                                     <?php $i++; ?>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
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
             "scrollX": true

         });
     });
 </script>




 <!-- delete -->
 <?php
    $i = 1;
    foreach ($lamaran_masuk as $m) : ?>
     <div class="modal fade" id="ditolak-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">status</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">??</span>
                     </button>
                 </div>
                 <div class="modal-body">apakah anda ingin menolak pelamar atas nama : <?= $m['nama']; ?> </div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     <a class="btn btn-primary" href="<?= base_url('admin2/pekerjaan/pekerjaanmaster/ditolak/') . $m['id']; ?>">Di Tolak</a>
                 </div>
             </div>
         </div>
     </div>
     <?php $i++; ?>
 <?php endforeach; ?>

 <!-- diterima -->
 <?php
    $i = 1;
    foreach ($lamaran_masuk as $m) : ?>
     <div class="modal fade" id="diterima-<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">status</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">??</span>
                     </button>
                 </div>
                 <div class="modal-body">apakah anda ingin menerima pelamar atas nama : <?= $m['nama']; ?> </div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     <a class="btn btn-primary" href="<?= base_url('admin2/pekerjaan/pekerjaanmaster/diterima/') . $m['id']; ?>">Terima Lamaran</a>
                 </div>
             </div>
         </div>
     </div>
     <?php $i++; ?>
 <?php endforeach; ?>
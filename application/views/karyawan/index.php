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

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow mb-4 ">
                 <div class="card-header py-3">
                     <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                     <h1 class="m-0 font-weight-bold ">Data Karyawan</h1>
                 </div>
                 <div class="card-body text-center">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <!-- <th scope="col">Action</th> -->
                                     <!-- <th>Status</th> -->
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
                                     <!-- <th>Status Lamaran</th>
                                     <th>CV</th> -->
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($m_db as $m) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>

                                         <td><?= $m['nama']; ?></td>
                                         <td><?= $m['jk']; ?></td>
                                         <td><?= $m['tgl_lahir']; ?></td>
                                         <td><?= $m['no_telp']; ?></td>
                                         <td><?= $m['pendidikan_terakhir']; ?></td>

                                     </tr>
                                     <?php $i++; ?>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <nav aria-label="Page navigation example" class="m-3">
                     <ul class="pagination justify-content-end">
                         <li class="page-item disabled">
                             <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                         </li>
                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item">
                             <a class="page-link" href="#">Next</a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
 </main>
 <!-- End Content -->



 <!-- delete -->
 <?php
    $i = 1;
    foreach ($m_db as $m) : ?>
     <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <a class="btn btn-primary" href="<?= base_url('admin/delete/') . $m['id']; ?>">Di Tolak</a>
                 </div>
             </div>
         </div>
     </div>
     <?php $i++; ?>
 <?php endforeach; ?>

 <!-- diterima -->
 <?php
    $i = 1;
    foreach ($m_db as $m) : ?>
     <div class="modal fade" id="diterima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <a class="btn btn-primary" href="<?= base_url('admin/diterima/') . $m['id']; ?>">Terima Lamaran</a>
                 </div>
             </div>
         </div>
     </div>
     <?php $i++; ?>
 <?php endforeach; ?>
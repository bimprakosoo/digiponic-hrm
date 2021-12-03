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
                                 <?php $i = 1; ?>
                                 <?php foreach ($datakaryawan as $dk) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td><?= $dk['namaKaryawan']; ?></td>
                                         <td><?= $dk['namaPerusahaan']; ?></td>
                                         <td><?= $dk['namaDepartement']; ?></td>
                                         <td><?= $dk['namaDivisi']; ?></td>
                                         <td><?= $dk['namaJabatan']; ?></td>
                                         <td><?= $dk['namaPosisi']; ?></td>
                                         <td><?= $dk['namaPenempatan']; ?></td>

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
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
                 <div class="row my-2 my-xl-3 m-2">
                     <div class="col-auto d-none d-sm-block ">
                         <h1 class="m-0 font-weight-bold ">Daftar Karyawan</h1>
                     </div>

                     <div class="col-auto ml-auto ">
                         <form class="d-none d-sm-inline-block">
                             <div class="input-group input-group-navbar">
                                 <input type="text" class="form-control" placeholder="Search…" aria-label="Search" />
                                 <button class="btn" type="button">
                                     <i class="align-middle" data-feather="search"></i>
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>

                 <div class="card-body text-center">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th scope="col">Action</th>
                                     <th>Nama Karyawan</th>
                                     <th>Departemen</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($m_db as $m) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td>
                                             <a href="<?= base_url('admin/update_mutasi/') . $m['id']; ?>" class="btn btn-primary">Update</a>

                                         </td>
                                         <td><?= $m['nama']; ?></td>
                                         <td><?= $m['department']; ?></td>

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

     <!-- Modal -->

     <!-- tambah data -->
     <div class="modal fade" id="tambahModel" tabindex="-1" role="dialog" aria-labelledby="tambahModelLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <!-- Title -->
                     <h5 class="modal-title" id="tambahModelLabel">Mutasi</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <form action="<?= base_url('admin/update_mutasi'); ?>" method="post">
                     <!-- FORM [ karyawan ] -->
                     <div class="modal-body">
                         <div class="form-group">
                             <h4>Karyawan</h4>
                             <select name="id" id="id" class="form-control">
                                 <option value="">Pilih Karyawan</option>
                                 <?php foreach ($m_db as $s) : ?>
                                     <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <!-- FORM [ Departemen ] -->
                     <div class="modal-body">
                         <div class="form-group">
                             <h4>Departemen</h4>
                             <select name="id_departemen" id="id_departemen" class="form-control">
                                 <option value="">Pilih Departemen</option>
                                 <?php foreach ($dept as $s) : ?>
                                     <option value="<?= $s['id_departemen']; ?>"><?= $s['department']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>




                     <!-- ACTION -->
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </main>
 <!-- End Content -->
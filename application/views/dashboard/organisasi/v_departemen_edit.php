 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
             <li class="breadcrumb-item"><a href="#">Lowongan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Tambah Lowongan</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow m-4 ">
                 <form action="<?= base_url('admin2/organisasi/department/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Perusahaan</h3>
                         </div>
                         <input type="hidden" id="id" name="id" value="<?= $dept['id'] ?>">
                         <!-- Department -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">department</label>
                                 <input type="text" class="form-control" id="department" name="department" value="<?= $dept['nama'] ?>">
                             </div>
                         </div>

                         <!-- Perusahaan -->
                         <div class="mb-3 col-md-6">
                             <div class="modal-body">
                                 <div class="form-group">
                                     <label for="title">Perusahaan</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih Perusahaan --</option>
                                         <?php foreach ($perusahaan as $p) {
                                                if ($p['id'] == $dept['perusahaan']) { ?>
                                                 <option value="<?= $p['id'] ?>" selected><?= $p['nama_perusahaan'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php }
                                            } ?>
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="row m-4">
                             <div class="col-auto ml-auto ">
                                 <a href="<?= base_url() ?>admin2/organisasi/department/" class="btn btn-warning">Cancel</a>
                                 <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                             </div>
                         </div>

                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/perusahaan/'); ?>">Organisasi</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/jabatan/'); ?>">Jabatan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Edit Jabatan</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow m-4 ">
                 <form action="<?= base_url('admin2/organisasi/jabatan/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Jabatan</h3>
                         </div>
                         <input type="hidden" id="id" name="id" value="<?= $jabatan['id'] ?>">

                         <!-- Jabatan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Jabatan</label>
                                 <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $jabatan['nama'] ?>">
                             </div>
                         </div>

                         <!-- Devisi -->
                         <!-- <div class="mb-3 col-md-6"> -->
                             <div class="modal-body">
                                 <div class="form-group">
                                     <label for="title">Divisi</label>
                                     <select class="form-control" id="divisi" name="divisi" required>
                                         <option value="">-- Pilih Divisi --</option>
                                         <?php foreach ($divisi as $org) {
                                                if ($org['div_id'] == $jabatan['divisi_id']) { ?>
                                                 <option value="<?= $org['div_id'] ?>" selected><?= $org['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $org['div_id'] ?>"><?= $org['nama'] ?></option>
                                         <?php }
                                            } ?>

                                     </select>
                                 </div>
                             </div>
                         <!-- </div> -->

                         <div class="row m-4">
                             <div class="col-auto ml-auto ">
                                 <a href="<?= base_url() ?>admin2/organisasi/jabatan/" class="btn btn-warning">Cancel</a>
                                 <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                             </div>
                         </div>

                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
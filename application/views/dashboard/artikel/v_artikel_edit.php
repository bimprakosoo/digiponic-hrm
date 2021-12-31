 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/artikel/artikel/'); ?>">Artikel</a></li>
             <li class="breadcrumb-item active" aria-current="page">Edit Artikel</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow m-4 ">
                 <form action="<?= base_url('admin2/artikel/artikel/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Artikel</h3>
                         </div>
                         <input type="hidden" id="id" name="id" value="<?= $artikel['id'] ?>">
                         <!-- Judul -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Judul Artikel</label>
                                 <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="<?= $artikel['judul_artikel'] ?>">
                             </div>
                         </div>

                         <!-- Isi -->
                         <!-- <div class="mb-3 col-md-6"> -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Isi Artikel</label>
                                 <textarea class="ckeditor text-start" id="isi_artikel" name="isi_artikel" <?= $artikel['isi_artikel'] ?></textarea>
                             </div>
                         </div>
                         <!-- </div> -->

                         <!-- Foto -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="colFormLabel" class="col-form-label text-start">Upload Image</label><br>
                                 <input class="pt-1" type="file" id="file_image1" name="image" required>
                             </div>
                         </div>

                         <!-- Tanggal -->
                         <input type="hidden" class="form-control" id="post_date" name="post_date" placeholder="" readonly value="<?php echo date("Y-m-d"); ?>">


                         <div class="row m-4">
                             <div class="col-auto ml-auto ">
                                 <a href="<?= base_url() ?>admin2/artikel/artikel/" class="btn btn-warning">Cancel</a>
                                 <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                             </div>
                         </div>

                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
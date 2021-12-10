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
                 <form action="<?= base_url('admin2/organisasi/perusahaan/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Perusahaan</h3>
                         </div>
                         <input type="hidden" id="id" name="id" value="<?= $perusahaan['id'] ?>">
                         <!-- Perusahaan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Perusahaan</label>
                                 <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?= $perusahaan['nama_perusahaan'] ?>" required>
                             </div>
                         </div>

                         <!-- Industri -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Industri</label>
                                 <input type="text" class="form-control" id="industri" name="industri" value="<?= $perusahaan['industri'] ?>" required>
                             </div>
                         </div>

                         <div class="row">
                             <div class="mb-3 col-md-6">
                                 <!-- provinsi -->
                                 <div class="modal-body">
                                     <div class="form-group">
                                         <label for="title">Provinsi</label>
                                         <select class="form-control" id="provinsi" name="provinsi" required>
                                             <option value="">-- Pilih Provinsi --</option>
                                             <?php foreach ($provinsi as $prov) {
                                                    if ($prov['id'] == $perusahaan['provinsi']) { ?>
                                                     <option value="<?=$prov['id'] ?>" selected><?=  $prov['nama'] ?></option>
                                                 <?php } else { ?>
                                                     <option value="<?=  $prov['id'] ?>"><?= $prov['nama'] ?></option>
                                             <?php }
                                                } ?>
                                             
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <!-- Kota -->
                                 <div class="modal-body">
                                     <div class="form-group">
                                         <label for="title">Kota</label>
                                         <select class="form-control" id="kota" name="kota" required>
                                             <option value="">-- Pilih Kota --</option>
                                         </select>
                                     </div>
                                 </div>


                             </div>
                         </div>



                         <!-- Email -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Email</label>
                                 <input type="text" class="form-control" id="email" name="email" value="<?= $perusahaan['email'] ?>" required>
                             </div>
                         </div>

                         <!-- Alamat -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Alamat</label>
                                 <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $perusahaan['alamat'] ?>" required>
                             </div>
                         </div>

                         <!-- Telp -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Telp</label>
                                 <input type="text" class="form-control" id="telp" name="telp" value="<?= $perusahaan['telp'] ?>" required>
                             </div>
                         </div>
                     </div>

                     <div class="row m-4">
                         <div class="col-auto ml-auto ">
                             <a href="<?= base_url() ?>admin2/organisasi/perusahaan/" class="btn btn-warning">Cancel</a>
                             <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                         </div>
                     </div>

                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
 <script>
     $(document).ready(function() {
         $('#provinsi').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('pelamar/getKota') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#kota').html(response);
                     // get id kota by provinsi
                 }
             });
         });

     });
 </script>
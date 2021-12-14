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
                 <form action="<?= base_url('admin2/organisasi/penempatan/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Perusahaan</h3>
                         </div>
                         <input type="hidden" id="id" name="id" value="<?= $penempatan['id'] ?>">

                         <!-- Penempatan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">penempatan</label>
                                 <input type="text" class="form-control" id="penempatan" name="penempatan" value="<?= $penempatan['nama'] ?>">
                             </div>
                         </div>

                         <!-- perusahaan -->
                         <div class="mb-3 col-md-6">
                             <div class="modal-body">
                                 <div class="form-group">
                                     <label for="title">Perusahaan</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih Perusahaan --</option>
                                         <?php foreach ($perusahaan as $org) {
                                                if ($org['id'] == $penempatan['perusahaan_id']) { ?>
                                                 <option value="<?= $org['id'] ?>" selected><?= $org['nama_perusahaan'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $org['id'] ?>"><?= $org['nama_perusahaan'] ?></option>
                                         <?php }
                                            } ?>
                                        
                                     </select>
                                 </div>
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
                                             <?php foreach ($provinsi as $prov) { ?>
                                                 <option value="<?= $prov['id'] ?>" <?= $prov['id'] == $penempatan['provinsi'] ? 'selected' : '' ?>><?= $prov['nama'] ?></option>
                                             <?php } ?>
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
                                             <?php foreach ($kota as $kt) { ?>
                                                 <option value="<?= $kt['id'] ?>" <?= $kt['id'] == $penempatan['kota'] ? 'selected' : '' ?>><?= $kt['nama'] ?></option>
                                             <?php } ?>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row m-4">
                             <div class="col-auto ml-auto ">
                                 <a href="<?= base_url() ?>admin2/organisasi/penempatan/" class="btn btn-warning">Cancel</a>
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
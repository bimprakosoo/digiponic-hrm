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
                 <form action="<?= base_url('admin2/pekerjaan/lowongan/lowongan_post'); ?>" method="POST" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Tambah Data Lowongan</h3>
                         </div>
                         <!-- Alias Nama Posisi -->
                         <div class="modal-body">
                             <div class="form-group ">
                                 <label for="title">Nama Lowongan</label>
                                 <input type="text" class="form-control" id="nama_lowongan" name="nama_lowongan">
                             </div>
                         </div>


                         <!-- Detail Organisasi -->
                         <!-- row 1 -->
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col">
                                     <label for="title">Perusahaan*</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option>-- Pilih --</option>
                                         <?php foreach ($perusahaan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                                 <div class="col">
                                     <input type="hidden">
                                 </div>
                                 <div class="col">
                                     <input type="hidden">
                                 </div>


                             </div>
                         </div>
                         <!-- row 2 -->
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col">
                                     <label for="title">Department*</label>
                                     <select class="form-control" id="department" name="department" required>
                                         <option value=""></option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Jabatan*</label>
                                     <select class="form-control" id="jabatan" name="jabatan" required>
                                         <option value=""></option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Penempatan</label>
                                     <select class="form-control" id="penempatan" name="penempatan">
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($penempatan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>


                             </div>
                         </div>
                         <!-- row 3 -->
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col">
                                     <label for="title">Divisi*</label>
                                     <select class="form-control" id="divisi" name="divisi" required>
                                         <option value=""></option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Posisi*</label>
                                     <select class="form-control" id="posisi" name="posisi" required>
                                         <option value=""></option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Golongan</label>
                                     <select class="form-control" id="golongan" name="golongan">
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($golongan as $p) : ?>
                                             <option value="<?= $p['gol_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>


                         </div>
                     </div>
                     <!--  -->

                     <!-- Tipe Pekerjaan -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Tipe Pekerjaan</label>
                             <select name="tipe_pekerjaan" id="tipe_pekerjaan" class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Tipe Pekerjaan</option>
                                 <option value="kontrak">Kontrak</option>
                                 <option value="tetap">Tetap</option>
                             </select>
                             <!-- <input type="text" class="form-control" id="tipe_pekerjaan" name="tipe_pekerjaan"> -->
                         </div>
                     </div>
                     <!-- Pengalaman Kerja -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Pengalaman Kerja</label>
                             <select name="pengalaman_kerja" id="pengalaman_kerja" class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Pengalaman Kerja</option>
                                 <option value="tidak diperlukan">Tidak Diperlukan</option>
                                 <option value="1/2">1/2 tahun</option>
                                 <option value="1">1 tahun</option>
                                 <option value="2">2 tahun</option>
                             </select>
                             <!-- <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja"> -->
                         </div>
                     </div>
                     <!-- Level Pekerjaan -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Level Pekerjaan</label>
                             <input type="text" class="form-control" id="level_pekerjaan" name="level_pekerjaan">
                         </div>
                     </div>
                     <!-- Pendidikan -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Pendidikan</label>
                             <select name="pendidikan" id="pendidikan" class="form-select" aria-label="Default select example">
                                 <option selected>Pilih Pendidikan</option>
                                 <option value="S1">S1</option>
                                 <option value="D3">D3</option>
                                 <option value="SMA/SMK">SMA/SMK</option>
                                 <option value="S1/D3/SMA/SMK">S1/D3/SMA/SMK</option>
                             </select>
                             <!-- <input type="text" class="form-control" id="pendidikan" name="pendidikan"> -->
                         </div>
                     </div>

                     <!-- Gaji -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Gaji</label>
                             <input type="text" class="form-control" id="gaji" name="gaji">
                         </div>
                     </div>

                     <!-- <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Post Date</label>
                                 <input type="text" class="form-control" id="post_date" name="post_date">
                             </div>
                         </div> -->

                     <!-- Deskripsi -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Deskripsi Singkat</label>
                             <textarea class="ckeditor" id="ket" name="deskripsi"></textarea>
                         </div>
                     </div>

                     <!-- Syarat PEngalaman -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Persayaratan </label>
                             <textarea class="ckeditor" id="syarat_pengalaman" name="syarat_pengalaman"></textarea>
                         </div>
                     </div>
                     <!-- Tugas -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Tugas dan Tanggungjawab</label>
                             <textarea class="ckeditor" id="ket" name="ket"></textarea>
                         </div>
                     </div>
                     <!-- Tunjangan -->
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Tunjangan</label>
                             <textarea class="ckeditor" id="tunjangan" name="tunjangan"></textarea>
                         </div>
                     </div>
                     <!-- Upload Surat Lamaran -->
                     <!-- <div class="modal-body">
                             <div class="form-group">
                                 <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Upload Image</label><br>
                                 <input class="pt-1" type="file" id="file_image" name="image">
                             </div>
                         </div>
                     </div> -->

                     <!-- Post Date -->
                     <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                     <input type="hidden" class="form-control" id="post_date" name="post_date" placeholder="" readonly value="<?php echo date("Y-m-d"); ?>">

                     <div class="row pb-2 m-4">
                         <div class="col-auto ml-auto ">
                             <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan Perubahan</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->

 <!-- chain struktur posisi karyawan -->
 <script>
     $(document).ready(function() {

         // department
         $('#perusahaan').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/pekerjaan/lowongan/getDepartment') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#department').html(response);
                     // get id kota by provinsi
                 }
             });
         });

         // devisi
         $('#department').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/pekerjaan/lowongan/getDivisi') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#divisi').html(response);
                     // get id kota by provinsi
                 }
             });
         });

         //  jabatan
         $('#divisi').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/pekerjaan/lowongan/getJabatan') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#jabatan').html(response);
                     // get id kota by provinsi
                 }
             });
         });

         //  golongan
         //  $('#jabatan').change(function() {
         //      var id = $(this).val();
         //      // console.log(id); // cek id
         //      $.ajax({
         //          type: "POST",
         //          url: "<?= base_url('admin2/pekerjaan/lowongan/getGolongan') ?>",
         //          data: {
         //              id: id
         //          },
         //          dataType: "JSON",
         //          success: function(response) {
         //              // console.log(response);
         //              $('#golongan').html(response);
         //              // get id kota by provinsi
         //          }
         //      });
         //  });

         //  posisi
         $('#jabatan').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/pekerjaan/lowongan/getPosisi') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#posisi').html(response);
                     // get id kota by provinsi
                 }
             });
         });



     });
 </script>
 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/') ?>">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/mutasi/mutasi/') ?>">Cuti</a></li>
             <li class="breadcrumb-item active" aria-current="page">Lamaran Masuk</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow mb-4 ">

                 <div class="card-body py-3" style="background: #fff;">
                     <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                     <h1 class="m-0 font-weight-bold ">Daftar Semua Mutasi</h1>
                 </div>
                 <div class="col-auto ml-auto ">
                     <a class="btn btn-primary" data-toggle="modal" data-target="#modalAddMutasi">Tambah</a>
                 </div>

                 <div class="card-body ">
                     <div class="table-responsive">
                         <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nama Karyawan</th>
                                     <th>Tgl Mutasi</th>
                                     <th>Departemen</th>
                                     <th>Divisi</th>
                                     <th>Jabatan</th>
                                     <th>Posisi</th>
                                     <th>Penempatan</th>
                                     <th>Jenis Mutasi</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>

                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <!-- Modal -->

     <!-- Modal Add Mutasi -->
     <div class="modal fade" id="modalAddMutasi" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="m-0 font-weight-bold ">Mutasi</h1>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     </button>
                 </div>
                 <div class="modal-body m-3">

                     <!-- Karyawan -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">karyawan</label>
                             <select class="form-control" id="karyawan" name="karyawan" required>
                                 <option value="">-- Pilih karyawan --</option>
                                 <?php foreach ($dkaryawan as $p) : ?>
                                     <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                 <?php endforeach; ?>
                             </select>

                         </div>
                     </div>

                     <!-- Department -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">Department</label>
                             <select class="form-control" id="department" name="department" required>
                                 <option value="">-- Pilih --</option>
                                 <?php foreach ($department as $p) : ?>
                                     <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                 <?php endforeach; ?>
                             </select>

                         </div>
                     </div>

                     <!-- Divisi -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">Divisi</label>
                             <select class="form-control" id="divisi" name="divisi" required>
                                 <option value="">-- Pilih divisi --</option>

                             </select>

                         </div>
                     </div>

                     <!-- Jabatan -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">Jabatan</label>
                             <select class="form-control" id="jabatan" name="jabatan" required>
                                 <option value="">-- Pilih jabatan --</option>

                             </select>

                         </div>
                     </div>

                     <!-- Golongan -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">Golongan</label>
                             <select class="form-control" id="golongan" name="golongan" required>
                                 <option value="">-- Pilih golongan --</option>

                             </select>

                         </div>
                     </div>

                     <!-- Posisi -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">Posisi</label>
                             <select class="form-control" id="posisi" name="posisi" required>
                                 <option value="">-- Pilih posisi --</option>

                             </select>

                         </div>
                     </div>

                     <!-- Penempatan -->
                     <div class="col-md-6">
                         <div class="modal-body">

                             <label for="title">penempatan</label>
                             <select class="form-control" id="penempatan" name="penempatan" required>
                                 <option value="">-- Pilih penempatan --</option>

                             </select>

                         </div>
                     </div>


                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" name="submit" value="submit" class="btn btn-primary" data-toggle="modal" data-target="#coba">Simpan Perubahan</button>
                     </div>
                     </form>
                 </div>
             </div>
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
 <script>
     $(document).ready(function() {
         $('#dataTable').DataTable({
             "scrollX": true
         });
     });
 </script>

 <script>
     $(document).ready(function() {

         // devisi
         $('#department').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/mutasi/mutasi/getDivisi') ?>",
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
                 url: "<?= base_url('admin2/mutasi/mutasi/getJabatan') ?>",
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
         $('#jabatan').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/mutasi/mutasi/getGolongan') ?>",
                 data: {
                     id: id
                 },
                 dataType: "JSON",
                 success: function(response) {
                     // console.log(response);
                     $('#golongan').html(response);
                     // get id kota by provinsi
                 }
             });
         });

         //  posisi
         $('#golongan').change(function() {
             var id = $(this).val();
             // console.log(id); // cek id
             $.ajax({
                 type: "POST",
                 url: "<?= base_url('admin2/mutasi/mutasi/getPosisi') ?>",
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
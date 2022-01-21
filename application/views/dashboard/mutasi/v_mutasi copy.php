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
                                     <th>Jenis Mutasi</th>
                                     <th>Tgl Pengajuan</th>
                                     <th>status</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1;
                                    foreach ($mutasiData as $md) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td><?= $md['userID']; ?></td>
                                         <td><?= $md['jenis_mutasi']; ?></td>
                                         <td><?= $md['tgl_pengajuan']; ?></td>
                                         <td><?= $md['status']; ?></td>

                                         <td><button class="btn btn-secondary" id="set_dtl" data-toggle="modal" data-target="#detail-data" data-tglpengajuan="<?= $md['tgl_pengajuan']; ?>" data-karyawan="<?= $md['userID']; ?>" data-department="<?= $md['namaDepartment']; ?>" data-divisi="<?= $md['namaDivisi']; ?>" data-jabatan="<?= $md['namaJabatan']; ?>" data-golongan="<?= $md['namaGolongan']; ?>" data-posisi="<?= $md['namaPosisi']; ?>" data-penempatan="<?= $md['namaPenempatan']; ?>" data-status="<?= $md['status']; ?>" data-jenismutasi="<?= $md['jenis_mutasi']; ?>">
                                                 <i class="fas fa-eye"></i></button>
                                             <a class="btn btn-primary" href="<?php echo base_url("admin2/organisasi/department/edit/") . $md['id']; ?>"><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-danger" href="<?php echo base_url("admin2/organisasi/department/hapus/") . $md['id']; ?>" onclick="return confirm('Yakin mau hapus?');"><i class="fas fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                 <?php $i++;
                                    endforeach; ?>
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
         <div class="modal-dialog modal-xl" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="m-0 font-weight-bold ">Mutasi</h1>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     </button>
                 </div>
                 <div class="modal-body m-3">
                     <form action="<?= base_url('admin2/mutasi/mutasi/tambah_DataMutasi'); ?>" method="POST">

                         <input type="hidden" class="form-control" id="post_date" name="post_date" readonly value="<?php echo date("Y-m-d"); ?>">
                         <input type="hidden" class="form-control" id="user_id" name="user_id" readonly value="<?= $user['id']; ?>">
                         <div class="row gx-5">
                             <div class="col">
                                 <!-- Karyawan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">
                                             <div class="col-3">
                                                 <h5>Karyawan</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <select class="form-control" id="karyawan" name="karyawan" required>
                                                     <option value="">-- Pilih karyawan --</option>
                                                     <?php foreach ($dkaryawan as $p) : ?>
                                                         <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php endforeach; ?>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Department -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Departemen</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Departemen</p>
                                             </div>
                                         </div>

                                     </div>
                                 </div>

                                 <!-- Divisi -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Divisi</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Divisi</p>
                                             </div>
                                         </div>

                                     </div>
                                 </div>

                                 <!-- Jabatan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Jabatan</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Jabatan</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Golongan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Golongan</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Golongan</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <!-- Posisi -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Posisi</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Posisi</p>
                                             </div>

                                         </div>
                                     </div>
                                 </div>

                                 <!-- Penempatan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">

                                             <div class="col-3">
                                                 <h5>Penempatan</h5>

                                             </div>
                                             <div class="col-2">
                                                 <p>:</p>

                                             </div>
                                             <div class="col-7">

                                                 <p>Penempatan</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col">
                                 <!-- Karyawan -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="karyawan" name="karyawan" hidden>
                                             <option value="">-- Pilih karyawan --</option>
                                             <?php foreach ($dkaryawan as $p) : ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                             <?php endforeach; ?>
                                         </select>

                                     </div>
                                 </div>

                                 <!-- Department -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="department" name="department" required>
                                             <option value="">-- Pilih --</option>
                                             <?php foreach ($department as $p) : ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                             <?php endforeach; ?>
                                         </select>

                                     </div>
                                 </div>

                                 <!-- Divisi -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="divisi" name="divisi" required>
                                             <option value="">-- Pilih divisi --</option>

                                         </select>

                                     </div>
                                 </div>

                                 <!-- Jabatan -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="jabatan" name="jabatan" required>
                                             <option value="">-- Pilih jabatan --</option>

                                         </select>

                                     </div>
                                 </div>

                                 <!-- Golongan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <select class="form-control" id="golongan" name="golongan" required>
                                             <option value="">-- Pilih Golongan --</option>
                                             <?php foreach ($data_golongan as $p) : ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                 </div>

                                 <!-- Posisi -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="posisi" name="posisi" required>
                                             <option value="">-- Pilih posisi --</option>

                                         </select>

                                     </div>
                                 </div>

                                 <!-- Penempatan -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="penempatan" name="penempatan" required>
                                             <option value="">-- Pilih --</option>
                                             <?php foreach ($penempatan as $p) : ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                             <?php endforeach; ?>

                                         </select>
                                     </div>
                                 </div>

                                 <!-- Jenis Mutasi -->
                                 <div class="col">
                                     <div class="modal-body">

                                         <select class="form-control" id="jenis_mutasi" name="jenis_mutasi" required>
                                             <option value="promosi">Promosi</option>
                                             <option value="mutasi">Mutasi</option>
                                             <option value="demosi">Demosi</option>
                                         </select>
                                     </div>
                                 </div>
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

     <!-- Detail  modal -->
     <div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Detail Perusahaan</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body table-responsive ">
                     <table class="table table-bordered " width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                         <tbody>
                             <tr>
                                 <th>Tgl Pengajuan</th>
                                 <td><span id="tglpengajuan"></span></td>
                             </tr>
                             <tr>
                                 <th>Nama Karyawan</th>
                                 <td><span id="dtl-karyawan"></span></td>
                             </tr>
                             <tr>
                                 <th>department</th>
                                 <td><span id="dtl-department"></span></td>
                             </tr>
                             <tr>
                                 <th>divisi</th>
                                 <td><span id="dtl-divisi"></span></td>
                             </tr>
                             <tr>
                                 <th>jabatan</th>
                                 <td><span id="dtl-jabatan"></span></td>
                             </tr>
                             <tr>
                                 <th>golongan</th>
                                 <td><span id="dtl-golongan"></span></td>
                             </tr>
                             <tr>
                                 <th>posisi</th>
                                 <td><span id="dtl-posisi"></span></td>
                             </tr>
                             <tr>
                                 <th>penempatan</th>
                                 <td><span id="dtl-penempatan"></span></td>
                             </tr>
                             <tr>
                                 <th>status</th>
                                 <td><span id="dtl-status"></span></td>
                             </tr>
                             <tr>
                                 <th>jenisMutasi</th>
                                 <td><span id="dtl-jenismutasi"></span></td>
                             </tr>

                         </tbody>
                     </table>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- END  modal -->
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

 <!-- chain struktur posisi karyawan -->
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
         //  $('#jabatan').change(function() {
         //      var id = $(this).val();
         //      // console.log(id); // cek id
         //      $.ajax({
         //          type: "POST",
         //          url: "<?= base_url('admin2/mutasi/mutasi/getGolongan') ?>",
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

 </script>

 <!-- detail-data -->
 <script>
     $(document).ready(function() {
         $(document).on('click', '#set_dtl', function() {
             var D_tglpengajuan = $(this).data('tglpengajuan');
             var D_karyawan = $(this).data('karyawan');
             var D_department = $(this).data('department');
             var D_divisi = $(this).data('divisi');
             var D_jabatan = $(this).data('jabatan');
             var D_golongan = $(this).data('golongan');
             var D_posisi = $(this).data('posisi');
             var D_penempatan = $(this).data('penempatan');
             var D_status = $(this).data('status');
             var D_jenismutasi = $(this).data('jenismutasi');
             $('#tglpengajuan').text(D_tglpengajuan);
             $('#dtl-karyawan').text(D_karyawan);
             $('#dtl-department').text(D_department);
             $('#dtl-divisi').text(D_divisi);
             $('#dtl-jabatan').text(D_jabatan);
             $('#dtl-golongan').text(D_golongan);
             $('#dtl-posisi').text(D_posisi);
             $('#dtl-penempatan').text(D_penempatan);
             $('#dtl-status').text(D_status);
             $('#dtl-jenismutasi').text(D_jenismutasi);
         });
     });
 </script>
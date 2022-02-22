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
                 <form action="<?= base_url('admin2/mutasi/mutasi/prosesMutasi'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Pengajuan Mutasi Karyawan</h3>
                         </div>
                         <!-- <input type="hidden" class="form-control" id="post_date" name="post_date" readonly value="<?php echo date("Y-m-d"); ?>"> -->
                         <input type="hidden" class="form-control" id="user_id" name="user_id" readonly value="<?= $user['idusers']; ?>">
                         <div class="row gx-5">
                             <div class="col">
                                 <!-- Karyawan -->
                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">
                                             <div class="col-3">
                                                 <h5>Karyawan</h5>

                                             </div>
                                             <div class="col-">

                                             </div>

                                             <div class="col-7">

                                                 <input type="hidden" class="form-control" id="IDkaryawan" name="IDkaryawan" value="<?= $karyawan['karyawan_id']; ?>" readonly>
                                                 <input type="text" class="form-control" value="<?= $karyawan['nama']; ?>" readonly>

                                             </div>
                                         </div>
                                     </div>
                                 </div>


                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">
                                             <div class="col-3">
                                                 <h5>Organisasi</h5>

                                             </div>

                                             <div class="col-4">
                                                 <h5>Asal</h5>

                                             </div>

                                             <div class="col-4">
                                                 <h5>Mutasi</h5>

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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_department']; ?></p>

                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="department" name="department" required>
                                                     <option value="">-- Pilih --</option>
                                                     <?php foreach ($department as $p) {
                                                            if ($p['dept_id'] == $karyawan['department_id']) { ?>
                                                             <option value="<?= $p['dept_id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['dept_id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_divisi']; ?></p>


                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="divisi" name="divisi" required>
                                                     <option value="">-- Pilih divisi --</option>
                                                     <?php foreach ($divisi as $p) {
                                                            if ($p['div_id'] == $karyawan['divisi_id']) { ?>
                                                             <option value="<?= $p['div_id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['div_id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_jabatan']; ?></p>


                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="jabatan" name="jabatan" required>
                                                     <option value="">-- Pilih jabatan --</option>
                                                     <?php foreach ($jabatan as $p) {
                                                            if ($p['jab_id'] == $karyawan['jabatan_id']) { ?>
                                                             <option value="<?= $p['jab_id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['jab_id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_posisi']; ?></p>


                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="posisi" name="posisi" required>
                                                     <option value="">-- Pilih posisi --</option>
                                                     <?php foreach ($posisi as $p) {
                                                            if ($p['pos_id'] == $karyawan['posisi_id']) { ?>
                                                             <option value="<?= $p['pos_id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['pos_id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_golongan']; ?></p>


                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="golongan" name="golongan">
                                                     <option value="">-- Pilih Golongan --</option>
                                                     <?php foreach ($golongan as $p) {
                                                            if ($p['gol_id'] == $karyawan['golongan_id']) { ?>
                                                             <option value="<?= $p['gol_id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['gol_id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
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
                                             <div class="col-4">
                                                 <p><?= $karyawan['nama_penempatan']; ?></p>


                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="penempatan" name="penempatan">
                                                     <option value="">-- Pilih --</option>
                                                     <?php foreach ($penempatan as $p) {
                                                            if ($p['id'] == $karyawan['penempatan_id']) { ?>
                                                             <option value="<?= $p['id'] ?>" selected><?= $p['nama'] ?></option>
                                                         <?php } else { ?>
                                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                                     <?php }
                                                        } ?>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Jenis Mutasi -->

                                 <div class="col">
                                     <div class="modal-body">
                                         <div class="row gx-5">
                                             <div class="col-3">

                                             </div>
                                             <div class="col-4">

                                             </div>
                                             <div class="col-5">

                                                 <select class="form-control" id="jenis_mutasi" name="jenis_mutasi" required>
                                                     <option>pilih</option>
                                                     <option value="promosi">Promosi</option>
                                                     <option value="mutasi">Mutasi</option>
                                                     <option value="demosi">Demosi</option>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>


                         </div>
                         <div class="row m-4">
                             <div class="col-auto ml-auto ">
                                 <a href="<?= base_url() ?>admin2/mutasi/mutasi/" class="btn btn-warning">Cancel</a>
                                 <button type="submit" name="submit" value="submit" class="btn btn-primary">Proses</button>
                             </div>
                         </div>
                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
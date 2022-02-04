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
                 <form action="<?= base_url('admin2/pekerjaan/lowongan/update/'); ?>" method="post" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h3 class="m-0 font-weight-bold ">Edit Data Lowongan</h3>
                         </div>
                         <input type="hidden" id="id_lowongan" name="id_lowongan" value="<?= $lowongan['id_lowongan'] ?>">
                         <!-- Nama -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Lowongan</label>
                                 <input type="text" class="form-control" id="nama_lowongan" name="nama_lowongan" value="<?= $lowongan['nama_lowongan'] ?>" placeholder="Nama Lowongan" required>
                             </div>
                         </div>

                         <!-- Perusahaan -->



                         <!-- Detail Organisasi -->
                         <!-- row 1 -->
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col">

                                     <label for="title">Perusahaan <label for="title" class="m">*</label></label>
                                     <select class="form-select" aria-label="Default select example" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($perusahaan as  $p) {
                                                if ($p['id'] == $lowongan['perusahaan_id']) { ?>
                                                 <option value="<?= $p['id'] ?>" selected><?= $p['nama_perusahaan'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php }
                                            } ?>
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
                                     <label for="title">Department <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="department" name="department" required>
                                         <?php foreach ($dept as  $p) {
                                                if ($p['dept_id'] == $lowongan['department_id']) { ?>
                                                 <option value="<?= $p['dept_id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['dept_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>
                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Jabatan <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="jabatan" name="jabatan" required>
                                         <?php foreach ($jabatan as  $p) {
                                                if ($p['jab_id'] == $lowongan['jabatan_id']) { ?>
                                                 <option value="<?= $p['jab_id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['jab_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Penempatan <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="penempatan" name="penempatan">
                                         <?php foreach ($penempatan as  $p) {
                                                if ($p['id'] == $lowongan['penempatan_id']) { ?>
                                                 <option value="<?= $p['id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>
                                     </select>
                                 </div>


                             </div>
                         </div>
                         <!-- row 3 -->
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col">
                                     <label for="title">Divisi <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="divisi" name="divisi" required>
                                         <?php foreach ($divisi as  $p) {
                                                if ($p['div_id'] == $lowongan['divisi_id']) { ?>
                                                 <option value="<?= $p['div_id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['div_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Posisi <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="posisi" name="posisi" required>
                                         <?php foreach ($posisi as  $p) {
                                                if ($p['pos_id'] == $lowongan['posisi_id']) { ?>
                                                 <option value="<?= $p['pos_id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['pos_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>
                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="title">Golongan <label for="title" class="m">*</label></label>
                                     <select class="form-select" id="golongan" name="golongan">
                                         <?php foreach ($golongan as  $p) {
                                                if ($p['gol_id'] == $lowongan['golongan_id']) { ?>
                                                 <option value="<?= $p['gol_id'] ?>" selected><?= $p['nama'] ?></option>
                                             <?php } else { ?>
                                                 <option value="<?= $p['gol_id'] ?>"><?= $p['nama'] ?></option>
                                         <?php }
                                            } ?>
                                     </select>
                                 </div>
                             </div>


                         </div>

                         <!-- Tipe Pekerjaan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Tipe Pekerjaan</label>
                                 <select name="tipe_pekerjaan" id="tipe_pekerjaan" class="form-select" aria-label="Default select example">
                                     <?php
                                        if ($lowongan['tipe_pekerjaan'] == "tetap") { ?>
                                         <option value="tetap" selected> Tetap </option>
                                         <option value="kontrak"> Kontrak </option>
                                     <?php } else { ?>
                                         <option value="tetap"> Tetap </option>
                                         <option value="kontrak" selected> Kontrak </option>
                                     <?php }
                                        ?>
                                 </select>
                                 <!-- <input type="text" class="form-control" id="tipe_pekerjaan" name="tipe_pekerjaan"> -->
                             </div>
                         </div>
                         <!-- Pengalaman Kerja -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Pengalaman Kerja</label>
                                 <select name="pengalaman_kerja" id="pengalaman_kerja" class="form-select" aria-label="Default select example">
                                     <?php
                                        if ($lowongan['pengalaman_kerja'] == "1/2") { ?>
                                         <option value="1/2" selected>1/2 tahun</option>
                                         <option value="1">1 tahun</option>
                                         <option value="2">2 tahun</option>
                                     <?php } else if ($lowongan['pengalaman_kerja'] == "1") { ?>
                                         <option value="1/2">1/2 tahun</option>
                                         <option value="1" selected>1 tahun</option>
                                         <option value="2">2 tahun</option>
                                     <?php } else { ?>
                                         <option value="1/2">1/2 tahun</option>
                                         <option value="1">1 tahun</option>
                                         <option value="2" selected>2 tahun</option>
                                     <?php }
                                        ?>

                                 </select>
                                 <!-- <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja"> -->
                             </div>
                         </div>

                         <!-- Level Pekerjaan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Level Pekerjaan</label>
                                 <input type="text" class="form-control" id="level_pekerjaan" name="level_pekerjaan" value="<?= $lowongan['level_pekerjaan'] ?>" placeholder="level_pekerjaan" required>
                             </div>
                         </div>
                         <!-- Pendidikan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Pendidikan</label>
                                 <select name="pendidikan" id="pendidikan" class="form-select" aria-label="Default select example">
                                     <?php
                                        if ($lowongan['pendidikan'] == "S1") { ?>
                                         <option value="S1" selected>S1</option>
                                         <option value="D3">D3</option>
                                         <option value="SMA/SMK">SMA/SMK</option>
                                         <option value="S1/D3/SMA/SMK">S1/D3/SMA/SMK</option>
                                     <?php } else if ($lowongan['pendidikan'] == "D3") { ?>
                                         <option value="S1">S1</option>
                                         <option value="D3" selected>D3</option>
                                         <option value="SMA/SMK">SMA/SMK</option>
                                         <option value="S1/D3/SMA/SMK">S1/D3/SMA/SMK</option>
                                     <?php } else if ($lowongan['pendidikan'] == "SMA/SMK") { ?>
                                         <option value="S1">S1</option>
                                         <option value="D3">D3</option>
                                         <option value="SMA/SMK" selected>SMA/SMK</option>
                                         <option value="S1/D3/SMA/SMK">S1/D3/SMA/SMK</option>
                                     <?php } else { ?>
                                         <option value="S1">S1</option>
                                         <option value="D3">D3</option>
                                         <option value="SMA/SMK">SMA/SMK</option>
                                         <option value="S1/D3/SMA/SMK" selected>S1/D3/SMA/SMK</option>
                                     <?php }
                                        ?>
                                 </select>
                                 <!-- <input type="text" class="form-control" id="pendidikan" name="pendidikan"> -->
                             </div>
                         </div>

                         <!-- Gaji -->

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
                                 <textarea class="ckeditor" id="ket" name="deskripsi"> <?= $lowongan['deskripsi'] ?></textarea>
                             </div>
                         </div>

                         <!-- Syarat PEngalaman -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Persayaratan</label>
                                 <textarea class="ckeditor" id="syarat_pengalaman" name="syarat_pengalaman"><?= $lowongan['syarat_pengalaman'] ?></textarea>
                             </div>
                         </div>
                         <!-- Keterangan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Tugas dan Tanggungjawab</label>
                                 <textarea class="ckeditor" id="ket" name="ket" required><?= $lowongan['ket'] ?></textarea>
                             </div>
                         </div>
                         <!-- Tunjangan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Tunjangan</label>
                                 <textarea class="ckeditor" id="tunjangan" name="tunjangan"><?= $lowongan['tunjangan'] ?></textarea>
                             </div>
                         </div>

                     </div>

                     <!-- Post Date -->
                     <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                     <input type="hidden" class="form-control" id="post_date" name="post_date" placeholder="" readonly value="<?php echo date("Y-m-d"); ?>">

                     <div class="row m-4">
                         <div class="col-auto ml-auto ">
                             <a href="<?= base_url() ?>admin2/pekerjaan/pekerjaanmaster/" class="btn btn-warning">Cancel</a>
                             <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/perusahaan/'); ?>">Organisasi</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('admin2/organisasi/department/'); ?>">Lowongan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Edit Department</li>
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
                             <h3 class="m-0 font-weight-bold ">Edit Data Department</h3>
                         </div>
                         <!-- <input type="hidden" id="id" name="id" value="<?= $dept['id'] ?>"> -->
                         <div class="row">
                             <!-- karyawan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Perusahaan</label>
                                     <select class="form-control" id="karyawan" name="karyawan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($all_detailkaryawan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>

                             <!-- karyawan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">karyawan</label>
                                     <select class="form-control" id="karyawan" name="karyawan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($all_detailkaryawan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>

                             <!-- Perusahaan -->
                             <div class="col-md-12">
                                 <div class="modal-body">

                                     <label for="title">Deskripsi</label>
                                     <textarea class="ckeditor" id="deskripsi" name="deskripsi"></textarea>


                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <!-- karyawan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Opsi Pelatih</label>
                                     <select class="form-control" id="karyawan" name="karyawan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($all_detailkaryawan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>

                             <!-- Perusahaan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Jenis Pelatihan</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($perusahaan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php endforeach; ?>
                                     </select>

                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <!-- karyawan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Trainer</label>
                                     <select class="form-control" id="karyawan" name="karyawan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($all_detailkaryawan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>

                             <!-- Perusahaan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Biaya Pelatihan</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($perusahaan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php endforeach; ?>
                                     </select>

                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <!-- karyawan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Tanggal Mulai</label>
                                     <select class="form-control" id="karyawan" name="karyawan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($all_detailkaryawan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>

                             <!-- Perusahaan -->
                             <div class="col-md-6">
                                 <div class="modal-body">

                                     <label for="title">Tanggal Berakhir</label>
                                     <select class="form-control" id="perusahaan" name="perusahaan" required>
                                         <option value="">-- Pilih --</option>
                                         <?php foreach ($perusahaan as $p) : ?>
                                             <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                         <?php endforeach; ?>
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
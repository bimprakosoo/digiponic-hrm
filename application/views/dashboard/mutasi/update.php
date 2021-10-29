 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Lamaran Masuk</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow m-4 ">
                 <?= form_open('admin/update_mutasi' . $m_db['id']); ?>

                 <div class="card-body ">
                     <div class="modal-body">
                         <h1 class="m-0 font-weight-bold ">Edit Mutasi Karyawan</h1>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                             <label for="title">Nama</label>
                             <input type="text" class="form-control" id="nama" name="nama" value="<?= $m_db['nama']; ?> " readonly>
                             <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                     </div>
                     <div class="modal-body">

                         <div class="form-group">
                             <label for="id_departemen">Departemen</label>
                             <select name="id_departemen" id="id_departemen" class="form-control">
                                 <option value="">Pilih Departemen</option>
                                 <?php foreach ($dept as $s) : ?>
                                     <option value="<?= $s['id_departemen']; ?>"><?= $s['department']; ?></option>
                                 <?php endforeach; ?>
                             </select>

                             <!-- <input type="text" class="form-control" id="status_id" name="status_id" value="<?= $positif['status_id']; ?>"> -->
                             <?= form_error('status_id', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                     </div>
                 </div>

                 <div class="row pb-2 m-4">
                     <div class="col-auto ml-auto ">
                         <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                     </div>
                 </div>

             </div>
         </div>
     </div>

 </main>
 <!-- End Content -->
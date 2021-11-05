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
                 <form action="<?= base_url('admin/create'); ?>" method="POST" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h1 class="m-0 font-weight-bold ">Tambah Data Lowongan</h1>
                         </div>
                         <!-- Nama -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Nama Lowongan</label>
                                 <input type="text" class="form-control" id="nama_lowongan" name="nama_lowongan">
                             </div>
                         </div>
                         <!-- Lokasi -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Lokasi</label>
                                 <input type="text" class="form-control" id="lokasi" name="lokasi">
                             </div>
                         </div>
                         <!-- Perusahaan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Perusahaan</label>
                                 <input type="text" class="form-control" id="perusahaan" name="perusahaan">
                             </div>
                         </div>
                         <!-- Industri -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Industri</label>
                                 <input type="text" class="form-control" id="industri" name="industri">
                             </div>
                         </div>
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
                                     <option value="1/2">1/2 tahun</option>
                                     <option value="1">1 tahun</option>
                                     <option value="2">2 tahun</option>
                                 </select>
                                 <!-- <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja"> -->
                             </div>
                         </div>
                         <!-- Insentif -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Insentif</label>
                                 <input type="text" class="form-control" id="insentif_lembur" name="insentif_lembur">
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
                         <!-- Waktu Bekerja -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Waktu Bekerja</label>
                                 <textarea class="ckeditor text-start" id="waktu_bekerja" name="waktu_bekerja"></textarea>
                             </div>
                         </div>
                         <!-- Gaji -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Gaji</label>
                                 <input type="text" class="form-control" id="gaji" name="gaji">
                             </div>
                         </div>
                         <!-- Post Date -->
                         <div class="modal-body">
                             <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Post Date</label>
                             <div class="col-sm-8">
                                 <div class="input-group mb-3 date">
                                     <!-- <button class="btn btn-primary" type="button" id="button-addon1">Date</button> -->
                                     <input type="text" class="form-control" id="post_date" name="post_date" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

                                 </div>
                             </div>
                         </div>
                         <!-- <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Post Date</label>
                                 <input type="text" class="form-control" id="post_date" name="post_date">
                             </div>
                         </div> -->

                         <!-- Keterangan -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Keterangan</label>
                                 <textarea class="ckeditor" id="ket" name="ket"></textarea>
                             </div>
                         </div>
                         <!-- Syarat PEngalaman -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Syarat Pengalaman</label>
                                 <textarea class="ckeditor" id="syarat_pengalaman" name="syarat_pengalaman"></textarea>
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
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="colFormLabel" class="col-sm-4 col-form-label text-start">Upload Image</label>
                                     <input class="form-control" type="file" id="file_image" name="image">
                             </div>
                         </div>
                     </div>

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
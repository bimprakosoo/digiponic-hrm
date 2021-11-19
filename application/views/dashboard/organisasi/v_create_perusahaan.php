 <!-- content -->
 <div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
     <nav aria-label="breadcrumb" class="m-4">
         <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
             <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
             <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
             <li class="breadcrumb-item"><a href="#">Lowongan</a></li>
             <li class="breadcrumb-item active" aria-current="page">Tambah Data Perusahaan</li>
         </ol>
     </nav>
 </div>
 <main class="content">

     <div class="container-fluid p-0 ">

         <!-- Daftar Semua Lowongan -->
         <div class="container-fluid p-0">

             <div class="card shadow m-4 ">
                 <form action="<?= base_url('admin2/organisasi/perusahaan/create_perusahaan'); ?>" method="POST" enctype="multipart/form-data">

                     <div class="card-body ">
                         <div class="modal-body">
                             <h1 class="m-0 font-weight-bold ">Tambah Data Perusahaan</h1>
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

                         <div class="row">
                             <div class="mb-3 col-md-6">
                                 <!-- provinsi -->
                                 <div class="modal-body">
                                     <div class="form-group">
                                         <label for="title">Provinsi</label>
                                         <select class="form-control" id="kota" name="kota" required>
                                             <option value="">-- Pilih Kota --</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <!-- Kota -->
                                 <div class="modal-body">
                                     <div class="form-group">
                                         <label for="title">Kota</label>
                                         <select class="form-control" id="kecamatan" name="kecamatan" required>
                                             <option value="">-- Pilih Kecamatan --</option>
                                         </select>
                                     </div>
                                 </div>


                             </div>
                         </div>



                         <!-- Email -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Email</label>
                                 <input type="text" class="form-control" id="industri" name="industri">
                             </div>
                         </div>

                         <!-- Alamat -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Alamat</label>
                                 <input type="text" class="form-control" id="industri" name="industri">
                             </div>
                         </div>

                         <!-- Telp -->
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="title">Telp</label>
                                 <input type="text" class="form-control" id="industri" name="industri">
                             </div>
                         </div>


                         <th>Kota</th>
                         <th>Email</th>
                         <th>Alamat</th>
                         <th>No Telp</th>

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
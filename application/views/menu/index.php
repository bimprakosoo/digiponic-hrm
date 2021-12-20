 <!-- content -->
 <main class="content">

     <div class="container-fluid p-0 ">
         <!-- <div class="card ">
             <div class="row my-2 my-xl-3 m-2">
                 <div class="col-auto d-none d-sm-block ">
                     <h3><strong>Tambah Data Lowongan</strong></h3>
                 </div>

                 <div class="col-auto ml-auto ">
                     <button class="btn btn-primary">Tambah Data</button>
                 </div>
             </div>
         </div> -->

         <div class="container-fluid p-0">

             <div class="card shadow mb-4 ">
                 <div class="card-header py-3">
                     <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                     <h1 class="m-0 font-weight-bold "><?= $title ?></h1>

                     <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                     <?= $this->session->set_flashdata('messege'); ?>
                 </div>
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
                 <div class="card-body ">
                     <div class="table-responsive">
                         <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Menu</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($menu as $m) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td><?= $m['menu']; ?></td>
                                         <td>
                                             <button class="btn btn-primary" data-toggle="modal" data-target="#edit-<?= $i; ?>">Edit</button>
                                             <button class="btn btn-danger" data-toggle="modal" data-target="#delete-<?= $i; ?>">Delete</button>
                                         </td>
                                     </tr>
                                     <?php $i++; ?>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>

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

 <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newMenuModalLabel">Tambah Menu</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
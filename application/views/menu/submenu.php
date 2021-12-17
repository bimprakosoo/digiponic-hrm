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
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New SubMenu</a>
                 <div class="card-body ">
                     <div class="table-responsive">
                         <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nama</th>
                                     <th>Menu</th>
                                     <th>SubMenu2</th>
                                     <th>Url</th>
                                     <th>Icon</th>
                                     <th>menu/submenu</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1; ?>
                                 <?php foreach ($subMenu as $sm) : ?>
                                     <tr>
                                         <th scope="row"><?= $i ?></th>
                                         <td><?= $sm['title']; ?></td>
                                         <td><?= $sm['menu']; ?></td>
                                         <td><?= $sm['subsub_id']; ?></td>
                                         <td><?= $sm['url']; ?></td>
                                         <td><?= $sm['icon']; ?></td>
                                         <td><?= $sm['sclass']; ?></td>
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

 <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Menu</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu/submenu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="title" name="title" placeholder="nama Menu">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="title_id" name="title_id" placeholder="nama_id">
                     </div>
                     <div class="form-group">
                         <div>
                             <select name="menu_id" id="menu_id" class="form-control">
                                 <?php foreach ($menu as $m) : ?>
                                     <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <div>
                             <select name="subsub_id" id="subsub_id" class="form-control">
                                 <option value="0">pilih-submenu</option>
                                 <?php foreach ($subMenu as $sm) {
                                        if ($sm['subsub_id'] == 0) { ?>
                                         <option value="<?= $sm['subsub_id'] ?>"><?= $sm['title'] ?></option>
                                 <?php }
                                    }  ?>
                             </select>
                         </div>
                     </div>
                     <!-- <div class="form-group">
                         <input type="text" class="form-control" id="submenu" name="submenu" placeholder="id dari sub menu">
                     </div> -->
                     <div class="form-group">
                         <input type="text" class="form-control" id="url" name="url" placeholder="url path">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="icon" name="icon" placeholder="iconnya">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="sclass" name="sclass" placeholder="0=>noting 1=>menu or 2=>menu-dropdown">
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
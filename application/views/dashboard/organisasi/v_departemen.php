<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Organisasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departemen</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
        <div class="card ">
            <div class="row my-2 my-xl-3 m-2">
                <div class="col-auto d-none d-sm-block ">
                    <h3><strong>Tambah Data Departemen</strong></h3>
                </div>

                <div class="col-auto ml-auto ">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#modalDepartment">Tambah</a>
                </div>
            </div>
        </div>

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Departemen</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Nama Departemen</th>
                                    <th>Perusahaan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($dept as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['nama']; ?></td> <!-- nama departemnt -->
                                        <td><?= $d['nama_perusahaan']; ?></td>

                                        <td><button class="btn btn-secondary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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


    <!-- BEGIN  modal -->
    <div class="modal fade" id="modalDepartment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-0 font-weight-bold ">Tambah Data department</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body m-3">
                    <form action="<?= base_url('admin2/organisasi/department/add_Dept'); ?>" method="POST">

                        <!-- Department -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">department</label>
                                <input type="text" class="form-control" id="department" name="department">
                            </div>
                        </div>

                        <!-- Perusahaan -->
                        <div class="mb-3 col-md-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Perusahaan</label>
                                    <select class="form-control" id="perusahaan" name="perusahaan" required>
                                        <option value="">-- Pilih Perusahaan --</option>
                                        <?php foreach ($perusahaan as $p) : ?>
                                            <option value="<?= $p['id'] ?>"><?= $p['nama_perusahaan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
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

</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true

        });
    });
</script>
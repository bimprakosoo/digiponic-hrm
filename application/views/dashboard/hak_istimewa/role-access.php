<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url('admin2/dashboard/'); ?>">Dashboards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hak Istimewa</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">

        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-body py-3" style="background: #fff;">
                    <h6 class="m-0 font-weight-bold text-primary">Management Hak Access</h6>
                    <!-- <h1 class="m-0 font-weight-bold ">Management Menu Access User</h1> -->
                </div>
                <div class="card-body ">
                    <!-- code -->

                    <div class="row">
                         <?= $this->session->flashdata('message'); ?>
                        <p>Role : <?= $role['role']; ?></p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $m['menu']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id'] ?>" data-menu="<?= $m['id'] ?>">
                                            </div>

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



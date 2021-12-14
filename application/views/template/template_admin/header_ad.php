<div class="main">
    <!-- Header -->
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle d-flex">
            <i class="hamburger align-self-center"></i>
        </a>

        <a value="<?= $user['role_id'] ?>"><?= $user['role_id'] ?></a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">


                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/image/profil/') . $user['image']; ?>" class="avatar img-fluid rounded mr-1" />
                        <strong class="text-dark"><?= $user['nama']; ?></strong>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i>
                            Profile</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i>
                            Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->
<div class="main">
    <!-- Header -->
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle d-flex">
            <i class="hamburger align-self-center"></i>
        </a>

        <a><?= $user['idusers'] ?></a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown" aria-expanded="true">
                        <div class="position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="noti_count hidden-dot" id='unread_count'></span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown" data-bs-popper="none">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="text-dark">Data Ijin Baru</div>
                                    <div class="text-muted small mt-1">Ada data ijin baru. Silahkan di cek.</div>
                                    <div class="text-muted small mt-1">2 min ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/image/profil/') . $user['image']; ?>" class="avatar img-fluid rounded mr-1" />
                        <strong class="text-dark"><?= $user['nama']; ?></strong>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?php echo base_url('admin2/dashboard/dashboard/profile') ?>"><i class="align-middle mr-1" data-feather="user"></i>
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
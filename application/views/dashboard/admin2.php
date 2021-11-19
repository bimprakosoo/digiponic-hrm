<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
    <meta name="author" content="AdminKit" />
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/Logo.svg" />

    <title>Dashboard</title>

    <link href="<?php echo base_url(); ?>assets/admin2/static/css/app.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <!-- SideBar -->
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="<?php echo base_url(); ?>landingpage">
                    <span class="align-middle"><img src="<?php echo base_url(); ?>assets/image/Logo.svg" alt=""></span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="admin.html">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Pekerjaan</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">Lowongan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">Lamaran Masuk</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-cards.html">Hasil Seleksi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#or" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Organisasi</span>
                        </a>
                        <ul id="or" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">Perusahaan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">Departemen</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-cards.html">Divisi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-general.html">Jabatan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-grid.html">Golongan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-modals.html">Posisi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-typography.html">Penempatan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#kh" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Kehadiran</span>
                        </a>
                        <ul id="kh" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">Absensi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">Surat Ijin / Sakit</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#cuti" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Cuti</span>
                        </a>
                        <ul id="cuti" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">Form Cuti</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">Jumlah Cuti</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-cards.html">Data Harian</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">
                            <i class="align-middle" data-feather="credit-card"></i>
                            <span class="align-middle">Mutasi</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-blank.html">
                            <i class="align-middle" data-feather="book"></i>
                            <span class="align-middle">Karyawan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#penilaian" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Penilaian Kerja</span>
                        </a>
                        <ul id="penilaian" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">KPI Departemen</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">KPI Karyawan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">
                            <i class="align-middle" data-feather="credit-card"></i>
                            <span class="align-middle">Top Kerja</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#acara" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i>
                            <span class="align-middle">Acara dan Rapat</span>
                        </a>
                        <ul id="acara" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-alerts.html">Acara</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="ui-buttons.html">Rapat</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">
                            <i class="align-middle" data-feather="credit-card"></i>
                            <span class="align-middle">Artikel</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-invoice.html">
                            <i class="align-middle" data-feather="credit-card"></i>
                            <span class="align-middle">Hak Istimewa</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- End Side Bar -->

        <div class="main">
            <!-- Header -->
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search" />
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0 " aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">4 New Notifications</div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">
                                                    Restart server 12 to complete the update.
                                                </div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">
                                                    Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-lg dropdown-menu-right
                    py-0
                  " aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">4 New Messages</div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" />
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">
                                                    Nam pretium turpis et arcu. Duis arcu tortor.
                                                </div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris" />
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">
                                                    Curabitur ligula sapien euismod vitae.
                                                </div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason" />
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">
                                                    Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman" />
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">
                                                    Aenean tellus metus, bibendum sed, posuere ac, mattis non.
                                                </div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" />
                                <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i>
                                    Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i>
                                    Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i>
                                    Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Header -->
            <!-- content -->
            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Profile</h1>

                    <div class="row">
                        <!-- left coloum -->
                        <div class="col-md-8 col-xl-9">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Activities</h5>
                                </div>
                                <div class="card-body h-100">

                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="dropdown float-right text-navy">
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Week
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="float-right">Show: </p>
                                            <p>8 task completed out of 10</p>
                                        </div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <!-- Calendar -->
                                    <div class="row">
                                        <div class="col-md-1 text-center">
                                            Sun
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Mon
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Tue
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Wed
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Thu
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Fri
                                        </div>
                                        <div class="col-md-1 text-center">
                                            Sat
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-1 text-center">
                                            22
                                        </div>
                                        <div class="col-md-1 text-center">
                                            23
                                        </div>
                                        <div class="col-md-1 text-center">
                                            24
                                        </div>
                                        <div class="col-md-1 text-center">
                                            25
                                        </div>
                                        <div class="col-md-1 text-center">
                                            26
                                        </div>
                                        <div class="col-md-1 text-center">
                                            27
                                        </div>
                                        <div class="col-md-1 text-center">
                                            28
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="Charles Hall ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">30m ago</small>
                                            <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
                                            <small class="text-muted ">Today 7:21 pm</small>

                                            <div class="border text-sm text-muted p-2 mt-1 ">
                                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                                sapien ut libero venenatis faucibus. Nullam quis ante.
                                            </div>

                                            <a href="# " class="btn btn-sm btn-danger mt-1 "><i class="feather-sm " data-feather="heart "></i> Like</a>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-4.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="Christina Mason ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">1h ago</small>
                                            <strong>Christina Mason</strong> posted a new blog<br />

                                            <small class="text-muted ">Today 6:35 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-2.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="William Harris ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">3h ago</small>
                                            <strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br />
                                            <small class="text-muted ">Today 5:12 pm</small>

                                            <div class="row g-0 mt-1 ">
                                                <div class="col-6 col-md-4 col-lg-4 col-xl-3 ">
                                                    <img src="<?php echo base_url(); ?>assets/admin2/static/img/photos/unsplash-1.jpg " class="img-fluid pr-2 " alt="Unsplash ">
                                                </div>
                                                <div class="col-6 col-md-4 col-lg-4 col-xl-3 ">
                                                    <img src="<?php echo base_url(); ?>assets/admin2/static/img/photos/unsplash-2.jpg " class="img-fluid pr-2 " alt="Unsplash ">
                                                </div>
                                            </div>

                                            <a href="# " class="btn btn-sm btn-danger mt-1 "><i class="feather-sm " data-feather="heart "></i> Like</a>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-2.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="William Harris ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">1d ago</small>
                                            <strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted ">Yesterday 3:12 pm</small>

                                            <div class="d-flex align-items-start mt-1 ">
                                                <a class="pr-3 " href="# ">
                                                    <img src="img/avatars/avatar-4.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="Christina Mason ">
                                                </a>
                                                <div class="flex-grow-1 ">
                                                    <div class="border text-sm text-muted p-2 mt-1 ">
                                                        Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar-4.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="Christina Mason ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">1d ago</small>
                                            <strong>Christina Mason</strong> posted a new blog<br />
                                            <small class="text-muted ">Yesterday 2:43 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="d-flex align-items-start ">
                                        <img src="<?php echo base_url(); ?>assets/admin2/static/img/avatars/avatar.jpg " width="36 " height="36 " class="rounded-circle mr-2 " alt="Charles Hall ">
                                        <div class="flex-grow-1 ">
                                            <small class="float-right text-navy ">1d ago</small>
                                            <strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br />
                                            <small class="text-muted ">Yesterdag 1:51 pm</small>
                                        </div>
                                    </div>

                                    <hr />
                                    <a href="# " class="btn btn-primary btn-block ">Load more</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Left Coloum -->
                        <!-- Right coloum -->
                        <div class="col-md-4 col-xl-3 ">
                            <div class="card mb-3 ">
                                <div class="card-header ">
                                    <h5 class="card-title mb-0 ">Profile Details</h5>
                                </div>
                                <div class="card-body text-center ">
                                    <img src="img/avatars/avatar-4.jpg " alt="Christina Mason " class="img-fluid rounded-circle mb-2 " width="128 " height="128 " />
                                    <h5 class="card-title mb-0 ">Christina Mason</h5>
                                    <div class="text-muted mb-2 ">Lead Developer</div>

                                    <div>
                                        <a class="btn btn-primary btn-sm " href="# ">Follow</a>
                                        <a class="btn btn-primary btn-sm " href="# "><span data-feather="message-square "></span> Message</a>
                                    </div>
                                </div>
                                <hr class="my-0 " />
                                <div class="card-body ">
                                    <h5 class="h6 card-title ">Skills</h5>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">HTML</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">JavaScript</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">Sass</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">Angular</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">Vue</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">React</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">Redux</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">UI</a>
                                    <a href="# " class="badge bg-primary mr-1 my-1 ">UX</a>
                                </div>
                                <hr class="my-0 " />
                                <div class="card-body ">
                                    <h5 class="h6 card-title ">About</h5>
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="mb-1 "><span data-feather="home " class="feather-sm mr-1 "></span> Lives in <a href="# ">San Francisco, SA</a></li>

                                        <li class="mb-1 "><span data-feather="briefcase " class="feather-sm mr-1 "></span> Works at <a href="# ">GitHub</a></li>
                                        <li class="mb-1 "><span data-feather="map-pin " class="feather-sm mr-1 "></span> From <a href="# ">Boston</a></li>
                                    </ul>
                                </div>
                                <hr class="my-0 " />
                                <div class="card-body ">
                                    <h5 class="h6 card-title ">Elsewhere</h5>
                                    <ul class="list-unstyled mb-0 ">
                                        <li class="mb-1 "><span class="fas fa-globe fa-fw mr-1 "></span> <a href="# ">staciehall.co</a></li>
                                        <li class="mb-1 "><span class="fab fa-twitter fa-fw mr-1 "></span> <a href="# ">Twitter</a></li>
                                        <li class="mb-1 "><span class="fab fa-facebook fa-fw mr-1 "></span> <a href="# ">Facebook</a></li>
                                        <li class="mb-1 "><span class="fab fa-instagram fa-fw mr-1 "></span> <a href="# ">Instagram</a></li>
                                        <li class="mb-1 "><span class="fab fa-linkedin fa-fw mr-1 "></span> <a href="# ">LinkedIn</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Right Coloum -->
                    </div>
                </div>
            </main>
            <!-- End Content -->
            <footer class="footer ">
                <div class="container-fluid ">
                    <div class="row text-muted ">
                        <div class="col-6 text-left ">
                            <p class="mb-0 ">
                                <a href="index.html " class="text-muted "><strong>AdminKit Demo</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-right ">
                            <ul class="list-inline ">
                                <li class="list-inline-item ">
                                    <a class="text-muted " href="# ">Support</a>
                                </li>
                                <li class="list-inline-item ">
                                    <a class="text-muted " href="# ">Help Center</a>
                                </li>
                                <li class="list-inline-item ">
                                    <a class="text-muted " href="# ">Privacy</a>
                                </li>
                                <li class="list-inline-item ">
                                    <a class="text-muted " href="# ">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/admin2/static/js/app.js "></script>

</body>

</html>
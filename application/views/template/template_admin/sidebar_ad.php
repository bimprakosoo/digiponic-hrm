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
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin/lowongan_ad">Lowongan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin/lamaran_masuk">Lamaran Masuk</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin/hasil_seleksi">Hasil Seleksi</a>
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
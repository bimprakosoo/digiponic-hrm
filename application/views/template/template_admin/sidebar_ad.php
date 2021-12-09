<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
    <meta name="author" content="AdminKit" />
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/Logo2.png" />

    <title>Dashboard</title>

    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- <script src="<?php echo base_url(); ?> assets/admin2/ckeditor/ckeditor.js"></script> -->
    <link href="<?php echo base_url(); ?>assets/admin2/static/css/app.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin2/static/css/custom.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2a5bcf5393.js" crossorigin="anonymous"></script>

    <!-- datatable -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- <script>
        $.datepicker.setDefaults({
            showOn: "button",
            buttonImage: "<?php echo base_url(); ?>assets/calendar.svg",
            buttonText: "Date Picker",
            buttonImageOnly: true
        });
        $(function() {
            $("#post_date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script> -->

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
                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/dashboard/dashboard/">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fas fa-briefcase"></i>
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
                            <i class="fas fa-building"></i>
                            <span class="align-middle">Organisasi</span>
                        </a>
                        <ul id="or" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/perusahaan/">Perusahaan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/department/">Departemen</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/divisi/">Divisi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/jabatan/">Jabatan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/golongan/">Golongan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/posisi/">Posisi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/organisasi/penempatan/">Penempatan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#kh" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fas fa-clipboard-list"></i>
                            <span class="align-middle">Kehadiran</span>
                        </a>
                        <ul id="kh" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/kehadiran/absensi/">Absensi</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/kehadiran/sakit/">Surat Ijin / Sakit</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#cuti" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fas fa-id-badge"></i>
                            <span class="align-middle">Cuti</span>
                        </a>
                        <ul id="cuti" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/cuti/permohonan_cuti/">Permohonan Cuti</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/cuti/data_cuti_karyawan/">Data Cuti Karyawan</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/cuti/pengunduran_diri/">Pengunduruan Diri</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/mutasi/mutasi">
                            <i class="fas fa-exchange-alt"></i>
                            <span class="align-middle">Mutasi</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/karyawan/karyawan/data_karyawan">
                            <i class="align-middle" data-feather="book"></i>
                            <span class="align-middle">Karyawan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a data-target="#penilaian" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="fas fa-clipboard-check"></i>
                            <span class="align-middle">Penilaian Kerja</span>
                        </a>
                        <ul id="penilaian" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/penilaian_pekerja/kpi_departemen/">KPI Departemen</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/penilaian_pekerja/kpi_karyawan/">KPI Karyawan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/top_kerja/top_kerja/">
                            <i class="fas fa-star"></i>
                            <span class="align-middle">Top Kerja</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/acara_rapat/acara_rapat/">
                            <i class="fas fa-handshake"></i>
                            <span class="align-middle">Acara dan Rapat</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/artikel/artikel/">
                            <i class="fas fa-newspaper"></i>
                            <span class="align-middle">Artikel</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo base_url(); ?>admin2/hak_istimewa/hak_istimewa/">
                            <i class="fas fa-users"></i>
                            <span class="align-middle">Hak Istimewa</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- End Side Bar -->
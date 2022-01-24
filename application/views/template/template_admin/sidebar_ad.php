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

    <title> <?= $title; ?></title>

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

    <!-- <script>
        $.datepicker.setDefaults({
            showOn: "button",
            buttonImage: "<?php echo base_url(); ?>assets/calendar.svg",
            buttonText: "Date Picker",
            buttonImageOnly: true
        });
        $(function() {
            $("#txtFromDate").datepicker();
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
                    <?php foreach ($roleMenu as $m) : ?>
                        <?php
                        // var_dump($roleMenu);
                        // die;
                        ?>
                        <li class="sidebar-item ">
                            <!-- no-dropdown -->
                            <?php if ($m['drops'] == 0) { ?>
                                <a class="sidebar-link" href="<?= base_url($m['url']); ?>">
                                    <i class="<?= $m['icon']; ?>"></i>
                                    <span class="align-middle"><?= $m['menu']; ?></span>
                                </a>
                                <!-- dropdown -->
                            <?php } else if ($m['drops'] == 1) { ?>
                                <a data-target="#<?= str_replace(' ', '_', $m['menu']); ?>" data-toggle="collapse" class="sidebar-link collapsed">
                                    <i class="<?= $m['icon']; ?>"></i>
                                    <span class="align-middle"><?= $m['menu']; ?></span>
                                </a>
                                <ul id="<?= str_replace('', '_', $m['menu']);  ?>" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                                    <?php
                                    $MenuId = $m['id'];
                                    $role_id    = $this->session->userdata('role_id');
                                    $querySubMenu = "SELECT * 
                                                        FROM user_sub_menu
                                                        JOIN user_access_submenu ON user_sub_menu.id = user_access_submenu.menu_id
                                                        WHERE user_sub_menu.menu_id = $MenuId
                                                        AND user_access_submenu.role_id = $role_id
                                                        ";

                                    $subMenu = $this->db->query($querySubMenu)->result_array();
                                    // var_dump($subMenu);

                                    ?>

                                    <?php foreach ($subMenu as $sm) : ?>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="<?= base_url($sm['url']); ?>">
                                                <span class="align-middle"><?= str_replace('', '_', $sm['title']); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            <?php } ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
        <!-- End Side Bar -->
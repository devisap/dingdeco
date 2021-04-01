<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Symadeco Project" />
    <meta name="author" content />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_symadeco.svg" />
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <!-- Global JS -->

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <!-- Plugin JS -->
    <script src="<?= base_url(); ?>assets/js/plugin/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script data-search-pseudo-elements defer src="<?= base_url(); ?>assets/js/plugin/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- CK editor JS harus di taruh sebelum, initialisasi editor pada textarea -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- Select2js -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2 ml-3" id="sidebarToggle" href="assets/#"><i data-feather="menu"></i></button>
        <img style="width:1.3%" class="navbar-brand-img ml-0" src="<?= base_url(); ?>assets/img/ic_symadeco.svg"></img>
        <a class="navbar-brand" href="<?php echo site_url('Dashboard'); ?>">SYMA Decoration</a>
        <ul class="navbar-nav align-items-center ml-auto">
            <!-- <li class="nav-item dropdown no-caret mr-3 dropdown-notifications list-pemberitahuan">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell"></i>&nbsp;
                    <span class="badge badge-danger bg-danger"><?php echo $countJamaahDaftar; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="bell"></i>
                        Pemberitahuan
                    </h6>
                    <?php
                    if ($countJamaahDaftar == 0) {
                    ?>
                        <a class="dropdown-item dropdown-notifications-item notifikasi">
                            Tidak Ada Pemberitahuan
                        </a>
                    <?php } else { ?>
                        <a class="dropdown-item dropdown-notifications-item notifikasi" href="<?php echo site_url('Jamaah/notifJamaah'); ?>">
                            <i class="fas fa-user"></i>&nbsp;&nbsp;
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Pendaftaran Jamaah</div>
                                    <div class="dropdown-notifications-item-content-details">Terdapat <?php echo $countJamaahDaftar ?> pendaftaran jamaah baru</div>
                            </div>
                        </a>
                        <?php } ?>                    
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications list-notifikasi">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope"></i>&nbsp;
                    <span class="badge badge-primary bg-primary"><?php echo $countMessage; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="mr-2" data-feather="mail"></i>
                        Chat
                    </h6>
                    <?php
                    if ($countMessage == 0) {
                    ?>
                        <a class="dropdown-item dropdown-notifications-item notifikasi">
                            Tidak Ada Chat
                        </a>
                    <?php } ?>
                    <?php
                    foreach ($dataNotifChat as $data) {
                    ?>
                        <a class="dropdown-item dropdown-notifications-item notifikasi" href="<?php echo base_url('Chat/detailChatNotif/' . $data->ID_CHAT_ROOM . '') ?>">
                            <img class="dropdown-notifications-item-img" src="<?php echo $data->FOTO ?>" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text"><?php echo $data->MESSAGE ?></div>
                                <div class="dropdown-notifications-item-content-details"><?php echo $data->NAMALENGKAP ?> &#xB7; <?php echo $data->CREATEDAT ?></div>
                            </div>
                        </a>
                    <?php } ?>
                    <a class="dropdown-item dropdown-notifications-footer" href="<?php echo base_url('Chat') ?>">Lihat Semua Chat</a>
                </div>
            </li> -->
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="assets/javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" /> <i data-feather="user"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <i data-feather="user"></i>
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Admin</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- <a class="dropdown-item" href="<?php echo site_url('Admin/ChangePassword'); ?>">
                        <div class="dropdown-item-icon"><i data-feather="key"></i></div>
                        Change Password
                    </a> -->
                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#KonfirmasiModal">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!--Modal Konfirmasi-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="KonfirmasiModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah anda yakin keluar ? </h5>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('Admin') ?>" type="button" class="btn btn-danger"><i class="fa fa-sign-out-alt mr-1"></i>Keluar</a>
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Modal Konfirmasi-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <?php $this->load->view('template/menu'); ?>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
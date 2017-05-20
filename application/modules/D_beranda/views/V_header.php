<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Market Place SCF</title>

    <link href="<?=base_url()?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>admin/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="<?=base_url()?>admin/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>admin/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle img-responsive" src="<?=base_url()?>admin/img/profil/<?= ucfirst($this->session->userdata('foto_profil')); ?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= ucfirst($this->session->userdata('nama_usaha')); ?></strong>
                             </span> <span class="text-muted text-xs block"><?= ucfirst($this->session->userdata('nama_pj')); ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?=base_url('distributor/profil')?>">Profile</a></li>
                            <li><a href="<?=base_url('A_logged_in/user_log_out')?>">Keluar</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                    </div>
                </li>
                <li>
                    <a href="<?=base_url('distributor')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
                </li>
                <li>
                    <a href="<?=base_url('distributor/produsen')?>"><i class="fa fa-edit"></i> <span class="nav-label">Daftar Produsen</span></a>
                </li>
                <li>
                    <a href="<?=base_url('distributor/transaksi')?>"><i class="fa fa-edit"></i> <span class="nav-label">Transaksi</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Notifikasi </span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?=base_url('distributor/invoice')?>">Invoice</a></li>
                        <li><a href="<?=base_url('distributor/tagihan')?>">Tagihan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url('distributor/pencarian')?>"><i class="fa fa-search"></i> <span class="nav-label">Pencarian</span></a>
                </li>
                <li>
                    <a href="<?=base_url('distributor/faq')?>"><i class="fa fa-magic"></i> <span class="nav-label">FAQ</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang di Rantai Pasar ( Market Place SCF )</span>
                </li>
                
                <li>
                    <a href="<?=base_url('A_logged_in/user_log_out')?>">
                        <i class="fa fa-sign-out"></i> Keluar
                    </a>
                </li>
            </ul>
        </nav>
    </div>
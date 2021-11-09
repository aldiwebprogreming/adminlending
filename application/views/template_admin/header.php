<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Lending</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>lugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href=" <?= base_url('assets/') ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans <?= base_url('assets/') ?> Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="<?= base_url('assets/')  ?>calender/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/')  ?>calender/theme.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
         <!--  <span class="badge badge-warning navbar-badge"></span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <!--    <span class="dropdown-item dropdown-header">15 Notifications</span> -->
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('login/logout') ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/') ?>dist/img/logobm.png" alt="AdminLTE Logo" class="brand-image  elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BJMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/') ?>dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->username; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('admin/') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <li class="nav-item">
                <a href="<?= base_url('admin/utama') ?>" class="nav-link">
                  <i class="fas fa-pager nav-icon"></i>
                  <p>Halaman Utama</p>
                </a>
           </li>

            <li class="nav-item">
                <a href="<?= base_url('admin/produk') ?>" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Produk Best Seller</p>
                </a>
           </li>

             <li class="nav-item">
                <a href="<?= base_url('admin/produk_salle') ?>" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Produk ON Salle</p>
                </a>
           </li>
           <li class="nav-item">
                <a href="<?= base_url('admin/section2') ?>" class="nav-link">
                  <i class="fas fa-pen-square nav-icon"></i>
                  <p>Halaman Section 2</p>
                </a>
           </li>
            <li class="nav-item">
                <a href="<?= base_url('admin/section3') ?>" class="nav-link">
                  <i class="fas fa-pen-square nav-icon"></i>
                  <p>Halaman Section 3</p>
                </a>
           </li>
            <li class="nav-item">
                <a href="<?= base_url('admin/section4') ?>" class="nav-link">
                  <i class="fas fa-pen-square nav-icon"></i>
                  <p>Halaman Section 4</p>
                </a>
           </li>


           <?php 

              if ($this->session->rule == 'Admin') {
              
              }else{

            ?>

           <li class="nav-item">
                <a href="<?= base_url('admin/admin') ?>" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Admin</p>
                </a>
           </li>

           <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
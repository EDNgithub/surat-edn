<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url(); ?>/asset/admin/dist/img/EDN.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/asset/admin/dist/img/EDN.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo site_url('C_superadmin/index')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
              Home
              </p>
            </a>
          </li>
          <li class="nav-header">Data Master</li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_superadmin/user')?>" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
              Data User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_superadmin/divisi')?>" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
              Data Divisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_superadmin/jabatan')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Data Jabatan
              </p>
            </a>
          </li>
          
          <li class="nav-header">Surat Masuk</li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_superadmin/surat')?>" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
              Surat Divisi
              </p>
            </a>
          </li>
          <li class="nav-header">Control</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
              FAQ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-times-circle"></i>
              <p>
              Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

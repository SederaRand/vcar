<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Poualah estla - Dashboard</title>

	<!-- Custom fonts for this template-->
  	<link href="<?php echo base_url('assets/back_end/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
 	 <link href="<?php echo base_url('assets/back_end/css/sb-admin-2.css') ?>" rel="stylesheet">

	 <link rel="stylesheet" type="text/css" href="<?php echo site_url('bootstrap/dist/css/bootstrap.css')?>">

	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	 <script type="text/javascript" src="<?php echo site_url('bootstrap/dist/js/bootstrap.js')?>"></script>
</head>


	  <!-- Bootstrap core JavaScript-->

	  <script src="<?php echo base_url('assets/back_end/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	  <!-- Core plugin JavaScript-->
	  <script src="<?php echo base_url('assets/back_end/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	  <!-- Custom scripts for all pages-->
	  <script src="<?php echo base_url('assets/back_end/js/sb-admin-2.min.js') ?>"></script>

	  <!-- Page level plugins -->
	  <script src="<?php echo base_url('assets/back_end/vendor/chart.js/Chart.min.js') ?>"></script>

	  <!-- Page level custom scripts -->
	  <script src="<?php echo base_url('assets/back_end/js/demo/chart-area-demo.js') ?>"></script>
	  <script src="<?php echo base_url('assets/back_end/js/demo/chart-pie-demo.js') ?>"></script>

	  <script src="<?php echo base_url('assets/back_end/vendor/datatables/jquery.dataTables.min.js') ?>"></script>

	  <script src="<?php echo base_url('assets/back_end/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

	  <script src="<?php echo base_url('assets/back_end/js/demo/datatables-demo.js') ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?>">

<body>
<div id="wrapper">
	<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> ChiChin </div>
      </a>

	  <?php
	  $uri = $this->uri->segment(2);
	  ?>

	   <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('admin/dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('admin/News/parametres'); ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Paramètres</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('admin/news');?>" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Personnalisations</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

 </div>

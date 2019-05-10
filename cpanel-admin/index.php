<?php
session_start();
include "conf/conn.php";
if(isset($_SESSION['id_biodata'])==0){
echo '<script>alert("Anda Harus Login Terlebih Dahulu !!!");
                window.location.href="pages/login.php"</script>';
}else{

?>

<!-- Designed By Muhamad Rizal Azhari -->
<!-- https://bit.ly/2vBKb8Y -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/Font-Awesome-4.5.0/css/font-awesome.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

  <!-- Style Modal -->
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }
    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DSB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DASHBOARD</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            <?php
						if($_SESSION['profile']!=NULL){
            echo "<img src='img/profile/".$_SESSION['profile']."' class='user-image' alt='User Image'>";
						}else{
							if($_SESSION['gender']=="m"){ 
							echo "<img src='img/profile-male.png' class='user-image' alt='User Image'>";
							}elseif($_SESSION['gender']=="f"){
							echo "<img src='img/profile-female.png' class='user-image' alt='User Image'>";
							}else{
              echo "<img src='img/profile.png' class='user-image' alt='User Image'>"; 
              }
						}
						?>

              <span class="hidden-xs fa fa-sort-down"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

            <?php
						if($_SESSION['profile']!=NULL){
            echo "<img src='img/profile/".$_SESSION['profile']."' class='img-circle' alt='User Image'>";
						}else{
							if($_SESSION['gender']=="m"){ 
							echo "<img src='img/profile-male.png' class='img-circle' alt='User Image'>";
							}elseif($_SESSION['gender']=="f"){
							echo "<img src='img/profile-female.png' class='img-circle' alt='User Image'>";
							}else{
              echo "<img src='img/profile.png' class='img-circle' alt='User Image'>"; 
              }
						}
						?>

                <p>
                  <?php echo $_SESSION['fullname']; ?>
                  <small><?php echo $_SESSION['position']; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?page=pengaturan" class="btn btn-default btn-flat"><span class="text-primary">Pengaturan</span> <i class="fa fa-cogs text-primary"></i></a>
                </div>
                <div class="pull-right">
                  <a href="pages/logout.php" class="btn btn-default btn-flat"><span class="text-primary">Logout</span> <i class="fa fa-sign-out text-primary"></i></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

            <?php
						if($_SESSION['profile']!=NULL){
            echo "<img src='img/profile/".$_SESSION['profile']."' class='img-circle' alt='User Image'>";
						}else{
							if($_SESSION['gender']=="m"){ 
							echo "<img src='img/profile-male.png' class='img-circle' alt='User Image'>";
							}elseif($_SESSION['gender']=="f"){
							echo "<img src='img/profile-female.png' class='img-circle' alt='User Image'>";
							}else{
              echo "<img src='img/profile.png' class='img-circle' alt='User Image'>";
              }
						}
						?>

        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="treeview">
        <li><a href="index.php"><i class="fa fa-dashboard text-primary"></i> <span>Beranda</span></a></li>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase text-primary"></i> <span>Kelola Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=biodata"><i class="fa fa-minus text-primary"></i> <span>Biodata</span></a></li>
            <li><a href="index.php?page=data_pekerjaan"><i class="fa fa-minus text-primary"></i> <span>Pekerjaan</span></a></li>
            <li><a href="index.php?page=data_pendidikan"><i class="fa fa-minus text-primary"></i> <span>Pendidikan</span></a></li>
            <li><a href="index.php?page=data_galeri"><i class="fa fa-minus text-primary"></i> <span>Galeri</span></a></li>
          </ul>
      </li>
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="index.php?page=pengaturan"><i class="fa fa-cogs text-primary"></i> <span>Pengaturan</span></a></li>
          <li><a href="pages/logout.php"><i class="fa fa-sign-out text-primary"></i> <span>Logout</span></a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content -->

    <?php include "conf/page.php"; ?>

  <!-- /Content -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2019 <a href="https://bit.ly/2vBKb8Y" target="_blank">Rizal Azhari</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="js/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="js/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>

<?php } ?>

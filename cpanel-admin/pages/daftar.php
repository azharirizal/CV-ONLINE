<!-- Designed By Muhamad Rizal Azhari -->
<!-- https://muhamadrizalazhari.000webhostapp.com/ -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/Font-Awesome-4.5.0/css/font-awesome.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition" background="../img/daftar.jpg">
<div class="login-box">
  <div class="login-logo">
    <a href="daftar.php" style="color: white;"><b>Daftar</b>&nbsp;Administrator</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Daftar Untuk Membuat Akun.</p>
    <form action="daftar_proses.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
        <span class="fa fa-users form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="save" value="save" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
      </div><br>
      <div class="row">
        <!-- /.col -->
        <div class="col-md-8">
        Sudah punya akun ?<a href="login.php" class="text-center"> Log In.</a>
        </div>
      </div>
    </form>
    <hr>

    <center><h5 class="form-signin">Copyright &copy; 2019 <a href="https://muhamadrizalazhari.000webhostapp.com/" target="_blank">Rizal Azhari</a></h5></center> 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Sistem Gudang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="app/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app/favicon/favicon-16x16.png">
    <link rel="manifest" href="app/favicon/site.webmanifest">
    
</head>
<body class="hold-transition login-page" style="background-image:url('app/img/bg.png')">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-info">
    <div class="card-header text-center">
    <img src="app/dist/img/AdminLTELogo.png" style="width:50px; margin-bottom:20px;">  <a href="../../index2.html" class="h1"><b>Storage Pro</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Selamat Datang <img src="app/emoji/smile.svg" style="width:25px"><img src="app/emoji/hand.svg" style="width:25px"> <br> Silahkan login untuk memulai sesi</p>

      <form action="config/auth.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
<script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

<?php
if (isset ($_GET['error'])){
  $x= ($_GET['error']);
  if($x==1){
    echo "<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    
    Toast.fire({
      icon: 'error',
      title: 'Login Gagal'
    })</script>"; 
  }

  else if($x==2){
    echo "<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan Inputkan Username dan Password'
    })</script>"; 
  }

  else {
    echo '';
  }


}
?>
</html>

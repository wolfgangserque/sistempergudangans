<!DOCTYPE html>
<html lang="en">

<?php session_start(); 
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php'); ?>
<?php include('../config/config.php');?>


<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

<?php include('preloader.php');?>

<?php include('navbar.php');?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <?php include('brandlogo.php');?>

  <?php include('sidebar.php');?>
</aside>
 

<div class="content-wrapper">

  <?php include('content_header.php'); ?>

  <?php 

  if (isset($_GET['page'])){
   if ($_GET['page']=='dashboard'){
    include('dashboard.php');
    }

    else if ($_GET['page']=='data_gudang_a'){
    include('data_gudang_a.php');
    }

    
    else if ($_GET['page']=='edit-data'){
      include('edit/edit-data.php');
      }

    else{
      include('not_found.php');
    }
  }
  else{
    include('dashboard.php');
  }
  ?>
  
</div>

<?php include('footer.php');?>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</body>
</html>

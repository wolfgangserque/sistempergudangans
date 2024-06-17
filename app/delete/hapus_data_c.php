<?php

include('../../config/config.php');
$id= $_GET['id'];

$query=mysqli_query($koneksi, "DELETE FROM tb_gudang_c WHERE id='$id'");
header('Location: ../index.php?page=data_gudang_c');
?>
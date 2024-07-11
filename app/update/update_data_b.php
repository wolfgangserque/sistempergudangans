<?php
include('../../config/config.php');
$id=$_POST['id'];
$nama_barang=$_POST['nama_barang'];
$deskripsi=$_POST['deskripsi'];
$kondisi=$_POST['kondisi'];
$penanggungjawab=$_POST['penanggungjawab'];

// NAMA FOTO
// $nama_file = $_FILES['foto']['name'];
// // echo $nama_file;

// // Lokasi Foto
// $file_tmp = $_FILES['foto']['tmp_name'];
// move_uploaded_file($file_tmp,'../foto/'.$nama_file);

$query=mysqli_query($koneksi, "UPDATE tb_gudang_b SET nama_barang='$nama_barang', deskripsi='$deskripsi', kondisi='$kondisi', penanggungjawab='$penanggungjawab' WHERE id='$id' ");
header('location: ../index.php?page=data_gudang_b');
?>
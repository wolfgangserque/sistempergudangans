<?php
include('../../config/config.php');
$id=$_GET['id'];
$nama_barang= $_GET['nama_barang'];
$deksripsi= $_GET['deksripsi'];
$kondisi= $_GET['kondisi'];
$penanggungjawab= $_GET['penanggungjawab'];
$query=mysqli_query($koneksi, "UPDATE tb_gudang SET nama_barang='$nama_barang', deksripsi='$deksripsi', kondisi='$kondisi', penanggungjawab='$penanggungjawab' WHERE id='$id' ");
header('location: ../index.php?page=data_gudang_a');
?>
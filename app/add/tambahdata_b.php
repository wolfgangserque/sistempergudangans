<?php
include('../../config/config.php');
$nama= $_GET['nama'];
$deskripsi= $_GET['deskripsi'];
$kondisi= $_GET['kondisi'];
$penanggungjawab= $_GET['penanggungjawab'];
$query=mysqli_query($koneksi, "INSERT INTO tb_gudang_b(id,nama_barang,deskripsi,kondisi,penanggungjawab) VALUES ('','$nama','$deskripsi','$kondisi','$penanggungjawab')");
header('location: ../index.php?page=data_gudang_b');
?>
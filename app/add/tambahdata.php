<?php
include('../../config/config.php');
$nama= $_GET['nama'];
$deksripsi= $_GET['deksripsi'];
$kondisi= $_GET['kondisi'];
$penanggungjawab= $_GET['penanggungjawab'];
$query=mysqli_query($koneksi, "INSERT INTO tb_gudang(id,nama_barang,deksripsi,kondisi,penanggungjawab) VALUES ('','$nama','$deksripsi','$kondisi','$penanggungjawab')");
header('location: ../index.php?page=data_gudang_a');
?>
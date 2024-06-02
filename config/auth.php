<?php

session_start();
include ('config.php');
$username= $_POST['username'];
$password= $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query)==1){
    header('Location:../app');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
   
    // echo "Login Berhasil";
}

else if ($username=='' || $password==''){
    header('Location:../index.php?error=2');
   
    // echo "Login Berhasil";
}

else {
    header('Location:../index.php?error=1');
    // echo"Login Tak Berhasil";
}


// echo $username;
// echo $password;
?>
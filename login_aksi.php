<?php
session_start();

include "koneksi.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM tbl_petugas
        WHERE username='$username' AND password='$password'";

$query = mysqli_query($db, $sql);

//cek data apakah ditemukan atau tidak
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>
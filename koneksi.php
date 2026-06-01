<?php

$server ="localhost";
$user = "root";
$password = "";
$database = "perpustakaan2";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
    die("Gagal terhubung diserver : ". mysqli_connect_eror());
}

?>
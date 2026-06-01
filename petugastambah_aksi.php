<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])){
    $idpetugas = $_POST['idpetugas'];
    $namapetugas = $_POST['namapetugas'];
    $hp = $_POST['hp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tbl_petugas (idpetugas, namapetugas, hp, username, password)
            VALUES ('$idpetugas', '$namapetugas', '$hp', '$username', '$password')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location:../../index.php?page=petugas&status=sukses');
    }else{
        header('Location:../../index.php?page=petugastambah&status=gagal');
    }
}else{
    die("Akses dilarang...!!!");
}

?>
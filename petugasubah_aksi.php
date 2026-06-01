<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])){

    $idpetugas = $_POST['idpetugas'];
    $namapetugas = $_POST['namapetugas'];
    $hp = $_POST['hp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE tbl_petugas 
            SET 
            idpetugas='$idpetugas',
            namapetugas='$namapetugas',
            hp='$hp',
            username='$username',
            password='$password'
            WHERE idpetugas='$idpetugas'";

    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: ../../index.php?page=petugas&status=sukses');
    }else{
        header('Location: ../../index.php?page=petugasubah&status=gagal');
    }

}else{
    die("Akses dilarang...!");
}
?>
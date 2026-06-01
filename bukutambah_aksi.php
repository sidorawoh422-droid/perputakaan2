<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])){
    $idbuku = $_POST['idbuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "INSERT INTO tbl_buku (idbuku, judul, pengarang, penerbit)
            VALUES ('$idbuku', '$judul', '$pengarang', '$penerbit')";

    $query = mysqli_query($db, $sql);

    if($query){
        header('Location:../../index.php?page=buku&status=sukses');
    }else{
        header('Location:../../index.php?page=buku&status=gagal');
    }
}else{
    die("Akses dilarang...!!!");
}
?>
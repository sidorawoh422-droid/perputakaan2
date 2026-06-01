<?php
include "../../../koneksi.php";

if(isset($_GET['idbuku'])){
    $idbuku = $_GET['idbuku'];
    $sql = "DELETE FROM tbl_buku WHERE idbuku = $idbuku";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: ../../index.php?page=buku');
    }else{
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang!");
}
?>
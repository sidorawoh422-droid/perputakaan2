<?php
include "../../../koneksi.php";

if(isset($_GET['idpetugas'])){
    $idpetugas = $_GET['idpetugas'];
    $sql = "DELETE FROM tbl_petugas WHERE idpetugas = $idpetugas";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: ../../index.php?page=petugas');
    }else{
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang!");
}
?>
<?php
include "../../../koneksi.php";

if(isset($_GET['idsiswa'])){
    $idsiswa = $_GET['idsiswa'];
    $sql = "DELETE FROM tbl_siswa WHERE idsiswa = $idsiswa";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: ../../index.php?page=siswa');
    }else{
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang!");
}
?>
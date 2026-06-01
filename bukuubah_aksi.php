<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])){

$idbuku = $_POST['idbuku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

$sql = "UPDATE tbl_buku SET idbuku='$idbuku',
        judul='$judul', pengarang='$pengarang',
        penerbit='$penerbit'
        WHERE idbuku='$idbuku'";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../../index.php?page=buku&status=sukses');
    }else{
        header('Location: ../../index.php?page=bukuubah&status=gagal');
    }
} else{
    die("Akses dilarang...!");
}

?>
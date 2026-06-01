<?php
 "../../../koneksi.pincludehp";

$idpinjam    = $_POST['idpinjam'];
$idpetugas   = $_POST['idpetugas'];
$idsiswa     = $_POST['idsiswa'];
$idbuku      = $_POST['idbuku'];
$waktupinjam = $_POST['waktupinjam'];

mysqli_query($db, "UPDATE tbl_pinjam SET 
    idpetugas='$idpetugas',
    idsiswa='$idsiswa',
    idbuku='$idbuku',
    waktupinjam='$waktupinjam'
WHERE idpinjam='$idpinjam'");

header("location:../../index.php?page=pinjam");
?>
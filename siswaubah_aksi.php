<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])){

$idsiswa = $_POST['idsiswa'];
$nis = $_POST['nis'];
$namasiswa = $_POST['namasiswa'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

$sql = "UPDATE tbl_siswa SET idsiswa='$idsiswa',
        nis='$nis', namasiswa='$namasiswa',
        kelas='$kelas', alamat='$alamat',
        hp='$hp'
        WHERE idsiswa='$idsiswa'";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../../index.php?page=siswa&status=sukses');
    }else{
        header('Location: ../../index.php?page=siswaubah&status=gagal');
    }
} else{
    die("Akses dilarang...!");
}

?>
<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])){
    $idsiswa = $_POST['idsiswa'];
    $nis = $_POST['nis'];
    $namasiswa = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['nomer'];

    $sql = "INSERT INTO tbl_siswa (idsiswa, nis, namasiswa, kelas, alamat, hp)
            VALUE ('$idsiswa', '$nis', '$namasiswa', '$kelas', '$alamat', '$hp')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location:../../index.php?page=siswa&status=sukses');
    }else{
        header('Location:../../index.php?page=siswa&status=gagal');
    }
}else{
    die("Akses dilarang...!!!");
}

?>
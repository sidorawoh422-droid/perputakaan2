<?php
include("../koneksi.php");

if(!isset($_GET['idsiswa'])){
    header('Location: index.php?page=siswa');
}
$idsiswa = $_GET['idsiswa'];

$sql = "SELECT * FROM tbl_siswa WHERE idsiswa=$idsiswa";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("data tidak ditemukan..");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Siswa</title>
</head>
<body>
    <h3>Form Edit Siswa</h3>
    <br>
    <form action="halaman/siswa/siswaubah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Siswa</td>
            <td><input type="text" name="idsiswa" readonly value="<?php echo $siswa['idsiswa'] ?>"></td>
            </tr>
            <tr>
             <td>NIS</td>
            <td><input type="text" name="nis" value="<?php echo $siswa['nis'] ?>"></td>
            </tr>
            <tr>
            <td>Namasiswa</td>
            <td><input type="text" name="namasiswa" value="<?php echo $siswa['namasiswa'] ?>"></td>
            </tr>
            <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $siswa['kelas'] ?>"></td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?>"></td>
            </tr>
            <tr>
            <td>Hp</td>
            <td><input type="number" name="hp" value="<?php echo $siswa['hp'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Simpan"></td>
            </tr>
        </table>
    </form>
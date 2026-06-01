<?php
include("../koneksi.php");

if(!isset($_GET['idbuku'])){
    header('Location: index.php?page=buku');
}
$idbuku = $_GET['idbuku'];

$sql = "SELECT * FROM tbl_buku WHERE idbuku=$idbuku";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("data tidak ditemukan..");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Buku</title>
</head>
<body>
    <h3>Form Edit Buku</h3>
    <br>
    <form action="halaman/buku/bukuubah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Buku</td>
            <td><input type="text" name="idbuku" readonly value="<?php echo $buku['idbuku'] ?>"></td>
            </tr>
            <tr>
             <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $buku['judul'] ?>"></td>
            </tr>
            <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $buku['pengarang'] ?>"></td>
            </tr>
            <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" value="<?php echo $buku['penerbit'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Simpan"></td>
            </tr>
        </table>
    </form>
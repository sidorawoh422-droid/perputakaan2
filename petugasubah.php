<?php
include("../koneksi.php");

if(!isset($_GET['idpetugas'])){
    header('Location: index.php?page=petugas');
}
$idpetugas = $_GET['idpetugas'];

$sql = "SELECT * FROM tbl_petugas WHERE idpetugas=$idpetugas";
$query = mysqli_query($db, $sql);
$petugas = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("data tidak ditemukan..");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Petugas</title>
</head>
<body>
    <h3>Form Edit Petugas</h3>
    <br>
    <form action="halaman/petugas/petugasubah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Petugas</td>
            <td><input type="text" name="idpetugas" readonly value="<?php echo $petugas['idpetugas'] ?>"></td>
            </tr>
            <tr>
             <td>Namapetugas</td>
            <td><input type="text" name="namapetugas" value="<?php echo $petugas['namapetugas'] ?>"></td>
            </tr>
            <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="<?php echo $petugas['hp'] ?>"></td>
            </tr>
            <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $petugas['username'] ?>"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $petugas['password'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Simpan"></td>
            </tr>
        </table>
    </form>
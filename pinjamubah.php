<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pinjam</title>
</head>
<body>
    <a href="index.php?page=pinjam">Kembali ke Data Peminjaman</a>
    <br/><br/>

<?php
include "../../koneksi.php";
$idpinjam = $_GET['idpinjam'];
$sql = "SELECT * FROM tbl_pinjam
        INNER JOIN tbl_petugas ON tbl_petugas.idpetugas = tbl_pinjam.idpetugas
        INNER JOIN tbl_siswa ON tbl_siswa.idsiswa = tbl_pinjam.idsiswa
        INNER JOIN tbl_buku ON tbl_buku.idbuku = tbl_pinjam.idbuku
        WHERE idpinjam = '$idpinjam'";
$query = mysqli_query($db, $sql);

while ($pinjam = mysqli_fetch_array($query)){
?>

<form action="halaman/pinjam/pinjamubah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Pinjam</td>
            <td>
                <input type="text" name="idpinjam" value="<?php echo $pinjam['idpinjam'] ?>" readonly>
            </td>
        </tr>

        <tr>
            <td>Petugas </td>
            <td>

                <select name="idpetugas">
                    <option value="<?php echo $pinjam['idpetugas'] ?>">
                        <?php echo $pinjam['namapetugas'] ?>
                    </option>
                    <?php
                    $petugas_query = mysqli_query($db, "SELECT * FROM tbl_petugas");
                    while($petugas_data = mysqli_fetch_array($petugas_query)){
                    ?>
                    <option value="<?php echo $petugas_data['idpetugas'] ?>">
                        <?php echo $petugas_data['namapetugas'] ?>
                    </option>

                    <?php
                    }
                    ?>
                </select>

            </td>
        </tr>

        <tr>
            <td> Siswa </td>
            <td>

                <select name="idsiswa">
                    <option value="<?php echo $pinjam['idsiswa'] ?>">
                        <?php echo $pinjam['namasiswa'] ?>
                    </option>

                    <?php
                    $siswa_query = mysqli_query($db, "SELECT * FROM tbl_siswa");
                    while($siswa_data = mysqli_fetch_array($siswa_query)){
                    ?>

                    <option value="<?php echo $siswa_data['idsiswa'] ?>">
                        <?php echo $siswa_data['namasiswa'] ?>
                    </option>

                    <?php
                    }
                    ?>

                </select>

            </td>
        </tr>

        <tr>
            <td> Judul Buku </td>
            <td>

                <select name="idbuku">
                    <option value="<?php echo $pinjam['idbuku'] ?>">
                        <?php echo $pinjam['judul'] ?>
                    </option>

                    <?php
                    $buku_query = mysqli_query($db, "SELECT * FROM tbl_buku");
                    while($buku_data = mysqli_fetch_array($buku_query)){
                    ?>

                    <option value="<?php echo $buku_data['idbuku'] ?>">
                        <?php echo $buku_data['judul'] ?>
                    </option>

                    <?php
                    }
                    ?>

                </select>

            </td>
        </tr>

        <tr>
            <td> Waktu Pinjam </td>
            <td>

                <input type="datetime-local" name="waktupinjam"
                value="<?php echo $pinjam['waktupinjam'];?>">

            </td>
        </tr>

        <tr>
            <td></td>
            <td>

                <input type="submit" name="tombolubah" value="Ubah">

            </td>
        </tr>
    </table>
</form>

<?php
}
?>

</body>
</html>
```

<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pinjam Buku</title>
</head>
<body>

<h3 align="center">Tambah Pinjam Buku</h3>

<form action="halaman/pinjam/pinjamtambah_aksi.php" method="post">

    <table align="center">

        <!-- PETUGAS -->
        <tr>
            <td>Petugas</td>
            <td>
                <select name="idpetugas" required>
                    <option value="">Pilih Nama Petugas</option>

                    <?php
                    $petugas_query = mysqli_query($db, "SELECT * FROM tbl_petugas");

                    while($petugas_data = mysqli_fetch_array($petugas_query)){
                    ?>

                    <option value="<?php echo $petugas_data['idpetugas']; ?>">
                        <?php echo $petugas_data['namapetugas']; ?>
                    </option>

                    <?php
                    }
                    ?>

                </select>
            </td>
        </tr>

        <!-- SISWA -->
        <tr>
            <td>Siswa</td>
            <td>
                <select name="idsiswa" required>
                    <option value="">Pilih Nama Siswa</option>

                    <?php
                    $siswa_query = mysqli_query($db, "SELECT * FROM tbl_siswa");

                    while($siswa_data = mysqli_fetch_array($siswa_query)){
                    ?>

                    <option value="<?php echo $siswa_data['idsiswa']; ?>">
                        <?php echo $siswa_data['namasiswa']; ?>
                    </option>

                    <?php
                    }
                    ?>

                </select>
            </td>
        </tr>

        <!-- BUKU -->
        <tr>
            <td>Buku</td>
            <td>
                <select name="idbuku" required>
                    <option value="">Pilih Judul Buku</option>

                    <?php
                    $buku_query = mysqli_query($db, "SELECT * FROM tbl_buku");

                    while($buku_data = mysqli_fetch_array($buku_query)){
                    ?>

                    <option value="<?php echo $buku_data['idbuku']; ?>">
                        <?php echo $buku_data['judul']; ?>
                    </option>

                    <?php
                    }
                    ?>

                </select>
            </td>
        </tr>

        <!-- WAKTU PINJAM -->
        <tr>
            <td>Waktu Pinjam</td>
            <td>
                <input type="datetime-local" name="waktupinjam" required>
            </td>
        </tr>

        <!-- TOMBOL -->
        <tr>
            <td></td>
            <td>
                <input type="submit" name="tomboltambah" value="Tambah">
            </td>
        </tr>

    </table>

</form>

</body>
</html>
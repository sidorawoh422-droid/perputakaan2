<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku | SMK Negeri 1 Sayung</title>
</head>
<body>

    <h3>
        <center>Daftar Pinjam Buku Perpustakaan</center>
    </h3>
    <br>
    <h3>
        <center>SMK Negeri 1 Sayung</center>
    </h3>

    <a href="index.php?page=pinjamtambah">Tambah Pinjam Buku</a>
    <table align="center" border="1" width="100%">
        <tr>
            <td width="5%">No</td>
            <td width="10%">ID Pinjam</td>
            <td width="20%">Petugas</td>
            <td width="10%">Siswa</td>
            <td width="20%">Judul Buku</td>
            <td width="15%">Waktu Pinjam</td>
            <td width="20%">Aksi</td>
        </tr>
<?php
    include "../koneksi.php";

    //untuk menentukan banyaknya data yg ditampilkan dlm 1 halaman.
    $batas = 10;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $mulai = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

    //ambil data dr tabel pinjam
    $sql = "SELECT * FROM tbl_pinjam
            INNER JOIN tbl_petugas ON tbl_petugas.idpetugas = tbl_pinjam.idpetugas
            INNER JOIN tbl_siswa ON tbl_siswa.idsiswa = tbl_pinjam.idsiswa
            INNER JOIN tbl_buku ON tbl_buku.idbuku = tbl_pinjam.idbuku
            LIMIT $mulai, $batas";

    $ambildata1 = mysqli_query($db, $sql);
    $sql2 = "SELECT * FROM tbl_pinjam
            INNER JOIN tbl_petugas ON tbl_petugas.idpetugas = tbl_pinjam.idpetugas
            INNER JOIN tbl_siswa ON tbl_siswa.idsiswa = tbl_pinjam.idsiswa
            INNER JOIN tbl_buku ON tbl_buku.idbuku = tbl_pinjam.idbuku";

    $ambildata2 = mysqli_query($db, $sql2);
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata / $batas);
    $nomor = $mulai + 1;

    while ($datapinjam = mysqli_fetch_array($ambildata1)) {
?>
        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $datapinjam['idpinjam'] ?></td>
            <td><?php echo $datapinjam['namapetugas'] ?></td>
            <td><?php echo $datapinjam['namasiswa'] ?></td>
            <td><?php echo $datapinjam['judul'] ?></td>
            <td><?php echo $datapinjam['waktupinjam'] ?></td>
            <td align="center">

    <a href="../admin/index.php?page=pinjamubah&idpinjam=<?php echo $datapinjam['idpinjam']; ?>">
        Edit
    </a>

    |

    <a href="halaman/pinjam/pinjamhapus.php?idpinjam=<?php echo $datapinjam['idpinjam']; ?>">
        Hapus
    </a>

</td>
        </tr>
<?php
    }
?>
    </table>
    <br>
    <div align="center">
        <?php
            for($i=1; $i<=$jumlahhalaman; $i++) {
        ?>
        <a href="../admin/index.php?page=pinjam&halaman=
        <?php echo $i; ?>">
        <?php echo $i; ?></a>

        <?php
            }
        ?>
    </div>

</body>
</html>
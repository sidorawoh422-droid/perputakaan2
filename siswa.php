<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h3><center>Daftar Siswa</center></h3>
    <p></p>
    <h3><center>Smk Negeri 1 Sayung</center></h3>
    <p></p>
    <a href="index.php?page=siswatambah"> [+] Tambah Siswa</a>
    <table align="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Siswa</th>
                <th>Nis</th>
                <th>Namasiswa</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Nomer</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("../koneksi.php");
            $sql = "SELECT * FROM tbl_siswa";
            $query = mysqli_query($db, $sql);
            $nomer = 1;

            while($datasiswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$nomer++."</td>";
                echo "<td>".$datasiswa['idsiswa']."</td>";
                echo "<td>".$datasiswa['nis']."</td>";
                echo "<td>".$datasiswa['namasiswa']."</td>";
                echo "<td>".$datasiswa['kelas']."</td>";
                echo "<td>".$datasiswa['alamat']."</td>";
                echo "<td>".$datasiswa['hp']."</td>";

                echo "<td>";
                echo "<a href='../admin/index.php?page=siswaubah&idsiswa=".$datasiswa['idsiswa']."'> Edit </a> | ";
                echo "<a href='halaman/siswa/siswahapus.php?idsiswa=".$datasiswa['idsiswa']."'> Hapus </a> | ";
                echo "</td>";

                echo "</tr>";
            }
          ?>
        </tbody>
    </table>
</body>
</html>
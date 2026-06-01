<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h3><center>Daftar Petugas</center></h3>
    <p></p>
    <h3><center>Smk Negeri 1 Sayung</center></h3>
    <p></p>
    <a href="index.php?page=petugastambah"> [+] Tambah Petugas</a>
    <table align="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Petugas</th>
                <th>Nama Petugas</th>
                <th>Nomer Hp</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("../koneksi.php");
            $sql = "SELECT * FROM tbl_petugas";
            $query = mysqli_query($db, $sql);
            $nomer = 1;

            while($datapetugas = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$nomer++."</td>";
                echo "<td>".$datapetugas['idpetugas']."</td>";
                echo "<td>".$datapetugas['namapetugas']."</td>";
                echo "<td>".$datapetugas['hp']."</td>";
                echo "<td>".$datapetugas['username']."</td>";
                echo "<td>".$datapetugas['password']."</td>";
                echo "<td>";
                echo "<a href='../admin/index.php?page=petugasubah&idpetugas=".$datapetugas['idpetugas']."'> Edit </a> | ";
                echo "<a href='halaman/petugas/petugashapus.php?idpetugas=".$datapetugas['idpetugas']."'> Hapus </a> | ";
                echo "</td>";

                echo "</tr>";
            }
          ?>
        </tbody>
    </table>
</body>
</html>
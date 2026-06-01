<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung </title>
</head>
<body>
    <h3><center>Daftar Buku Perpustakaan</center></h3>
    <p></p>
    <h3><center>SMK Negeri 1 Sayung</center></h3>
    <p></p>
    <a href="index.php?page=bukutambah"> [+] Tambah Buku</a>
    <table align="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>
</thead>
<tbody>
    <?php
    include ("../koneksi.php");
    $sql = "SELECT * FROM tbl_buku";
    $query = mysqli_query($db, $sql);
    $nomer = 1;

    while($databuku = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$nomer++."</td>";
        echo "<td>".$databuku['idbuku']."</td>";
        echo "<td>".$databuku['judul']."</td>";
        echo "<td>".$databuku['pengarang']."</td>";
        echo "<td>".$databuku['penerbit']."</td>";
        echo "<td>";
        echo "<a href='../admin/index.php?page=bukuubah&idbuku=".$databuku['idbuku']."'> Edit </a> | ";
        echo "<a href='halaman/buku/bukuhapus.php?idbuku=".$databuku['idbuku']."'> Hapus </a> | ";
        echo "</td>";

        echo "</tr>";
    }
    ?>
    </tbody>
    </table>

</body>
</html>
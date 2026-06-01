<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h3>Form Tambah Buku</h3>
    <br>
    <form action="halaman/buku/bukutambah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Buku</td>
            <td><input type="text" name="idbuku" placeholder="Masukan ID Buku"></td>
            </tr>
            <tr>
             <td>Judul</td>
            <td><input type="text" name="judul" placeholder="Masukan judul"></td>
            </tr>
            <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" placeholder="Masukan Pengarang"></td>
            </tr>
            <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" placeholder="Masukan penerbit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tomboltambah" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
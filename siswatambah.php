<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h3>Form Tambah Siswa</h3>
    <br>
    <form action="halaman/siswa/siswatambah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Siswa</td>
            <td><input type="text" name="idsiswa" placeholder="Masukan ID Siswa"></td>
            </tr>
            <tr>
             <td>NIS</td>
            <td><input type="text" name="nis" placeholder="Masukan NIS"></td>
            </tr>
            <tr>
            <td>Namasiswa</td>
            <td><input type="text" name="namasiswa" placeholder="Masukan Nama Siswa"></td>
            </tr>
            <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" placeholder="Masukan Kelas"></td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat"></td>
            </tr>
            <tr>
            <td>Hp</td>
            <td><input type="text" name="hp" placeholder="Masukan HP"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tomboltambah" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
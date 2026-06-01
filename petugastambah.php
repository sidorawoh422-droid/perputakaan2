<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h3>Form Tambah Petugas</h3>
    <br>
    <form action="halaman/petugas/petugastambah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Petugas</td>
            <td><input type="text" name="idpetugas" placeholder="Masukan ID Petugas"></td>
            </tr>
            <tr>
             <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" placeholder="Masukan nama petugas"></td>
            </tr>
            <tr>
            <td>Nomer Hp</td>
            <td><input type="text" name="hp" placeholder="Masukan nomer hp"></td>
            </tr>
            <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukan username"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukan password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tomboltambah" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
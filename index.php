<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
</head>
<body>
    <h2><center>Aplikasi Perpustakaan</center></h2>
    <h2><center>SMK Negeri 1 Sayung</center></h2>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=='gagal'){
            echo "Gagal Login, username atau password salah";
        }
        else if($_GET['pesan']=='logout'){
            echo "Anda harus login dahulu untuk masuk admin!";
        }
    }
    ?>

    <form action="login_aksi.php" method="post" name="formlogin">
        <table align="center">
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" placeholder="Masukan username"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="Masukan password"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="tombollogin" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
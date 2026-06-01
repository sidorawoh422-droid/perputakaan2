```php
<?php
include "../../../koneksi.php";

if(isset($_GET['idpinjam'])){
    $idpinjam = $_GET['idpinjam'];
    $sql = "DELETE FROM tbl_peminjaman WHERE idpinjam = $idpinjam";
    $query = mysqli_query($db, $sql);

    if($query){
        header("location: ../../index.php?page=pinjam");
    }else{
        die("Gagal menghapus...");
    }

}else{
    die("Akses dilarang!");
}

?>
```

<?php
 "../../../koneksi.pincludehp";

if(isset($_POST['tomboltambah'])){
    $idpetugas = $_POST['idpetugas'];
    $idsiswa = $_POST['idsiswa'];
    $idbuku = $_POST['idbuku'];
    $waktupinjam = $_POST['waktupinjam'];

    $sql = "INSERT INTO tbl_pinjam
            (idpetugas, idsiswa, idbuku, waktupinjam)
            VALUES
            ('$idpetugas', '$idsiswa', '$idbuku', '$waktupinjam')";

    $query = mysqli_query($db, $sql);

    if($query){
        header("Location:../../index.php?page=pinjam");
    }else{
        echo "Data gagal ditambahkan";
    }

}else{
    die("Akses dilarang");
}
?>
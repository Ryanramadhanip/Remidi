<?php
    include '../koneksi.php';

    $id_mobil = $_GET['id_mobil'];

    $sql = "INSERT INTO sewa()";

    $result = mysqli_query($koneksi, $sql);

    $cek = mysqli_affected_rows($koneksi);

    if($cek == 1)
    {
        header("Location: mobil_read.php");
    }
    else{
        echo "Gagal Menghapus Data";
    }
?>
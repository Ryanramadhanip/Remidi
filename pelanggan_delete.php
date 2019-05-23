<?php
    include '../koneksi.php';

    $id_pelanggan = $_GET['id_pelanggan'];

    $sql = "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan";

    $result = mysqli_query($koneksi, $sql);

    $cek = mysqli_affected_rows($koneksi);

    if($cek == 1)
    {
        header("Location: pelanggan_read.php");
    }
    else{
        echo "Gagal Menghapus Data";
    }
?>
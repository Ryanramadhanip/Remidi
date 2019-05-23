<?php
    include '../koneksi.php';

    $id_karyawan = $_GET['id_karyawan'];

    $sql = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";

    $result = mysqli_query($koneksi, $sql);

    $cek = mysqli_affected_rows($koneksi);

    if($cek == 1)
    {
        header("Location: karyawan_read.php");
    }
    else{
        echo "Gagal Menghapus Data";
    }
?>
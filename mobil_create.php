<?php
    include '../koneksi.php';

    if(isset($_POST['simpan']))
    {
        $no = $_POST['txt_no'];
        $merk = $_POST['txt_merk'];
        $jenis = $_POST['txt_jenis'];
        $warna = $_POST['txt_warna'];
        $tahun = $_POST['txt_tahun'];
        $biaya = $_POST['txt_biaya'];

        $sql = "INSERT INTO mobil(nomor_mobil, merk, jenis, warna, tahun_pembuatan, biaya_sewa_per_hari)
        VALUES ('$no', '$merk', '$jenis', '$warna',' $tahun', $biaya)";

        $hasil_tambah = mysqli_query($koneksi, $sql);
        $cek = mysqli_affected_rows($koneksi);

        if($cek == 1)
        {
            header("Location: mobil_read.php");
        }
        else {
            header("Location: tambah.php");
        }
    }
?>
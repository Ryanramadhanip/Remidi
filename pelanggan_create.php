<?php
    include '../koneksi.php';

    

    if(isset($_POST['simpan']))
    {
        $nama = $_POST['txt_nama'];
        $alamat = $_POST['txt_alamat'];
        $kontak = $_POST['txt_kontak'];

        $sql = "INSERT INTO pelanggan(nama_pelanggan, alamat_pelanggan, kontak)
        VALUES ('$nama', '$alamat', '$kontak')";

        $hasil_tambah = mysqli_query($koneksi, $sql);
        $cek = mysqli_affected_rows($koneksi);

        if($cek == 1)
        {
            header("Location: pelanggan_read.php");
        }
        else {
            header("Location: pelanggan_tambah.php");
        }
    }

   

?>
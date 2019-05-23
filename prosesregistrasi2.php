<?php
    session_start();
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];
    $nama = $_POST['txt_nama'];
    $alamat = $_POST['txt_alamat'];
    $kontak = $_POST['txt_kontak'];

    $sql = "INSERT INTO pelanggan(nama_pelanggan, alamat_pelanggan, kontak, username, password)
            VALUES (
                '".$_POST["txt_nama"]."',
                '".$_POST["txt_alamat"]."',
                '".$_POST["txt_kontak"]."',
                '".$_POST["txt_username"]."',
                '".$_POST["txt_password"]."'
            )";

    if($koneksi->query($sql) === TRUE) {
        ?>
        <script type="text/javascript">
        alert('Data berhasil ditambah');
        window.location.href="login2.php";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
        alert('Data gagal');
        window.location.href="prosesregistrasi2.php";
        <script>
        <?php
    }
?>
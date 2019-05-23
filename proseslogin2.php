<?php
    session_start();
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    $sql = "SELECT username FROM pelanggan
            WHERE username = '$username' and
            password = '$password'";

    $result = mysqli_query($koneksi, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        header("Location: ../pembeli/index.php");
    } else { ?>
        <script type="text/javascript">alert('Login gagal');
        window.location.href="login2.php";</script> <?php
    }
?>
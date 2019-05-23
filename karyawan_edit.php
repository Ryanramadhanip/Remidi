<html>
<head>
</head>
<body>
    <form action="karyawan_update.php" method="POST">
    <p> Kode Mobil<input type ="text" name ="txt_id" value="
    <?php
    echo $_GET["id_karyawan"]; 
    ?>"readonly></p>
    <p> Nama<input type ="text" name ="txt_nama"></p>
    <p> Alamat<input type ="text" name ="txt_alamat"></p>
    <p> Kontak<input type ="text" name ="txt_kontak"></p>
    <p> Username<input type ="text" name ="txt_username"></p>
    <p> Password<input type ="text" name ="txt_password"></p>

    <input type="submit" value="Update">
    </form>
    <p><a href='karyawan_read.php'> kembali ke daftar karyawan </a></p>
</body>
</html>
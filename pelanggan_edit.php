<html>
<head>
</head>
<body>
    <form action="pelanggan_update.php" method="POST">
    <p> Kode pelanggan<input type ="text" name ="txt_id" value="
    <?php
    echo $_GET["id_pelanggan"]; 
    ?>"readonly></p>
    <p> Nama<input type ="text" name ="txt_nama"></p>
    <p> Alamat<input type ="text" name ="txt_alamat"></p>
    <p> Kontak<input type ="text" name ="txt_kontak"></p>

    <input type="submit" value="Update">
    </form>
    <p><a href='pelanggan_read.php'> kembali ke daftar pelanggan </a></p>
</body>
</html>
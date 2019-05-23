<html>
<head>
</head>
<body>
    <form action="update.php" method="POST">
    <p> Kode Mobil<input type ="text" name ="txt_id" value="
    <?php
    echo $_GET["id_mobil"]; 
    ?>"readonly></p>
    <p> Nomor<input type ="text" name ="txt_no"></p>
    <p> Merk<input type ="text" name ="txt_merk"></p>
    <p> Jenis<input type ="text" name ="txt_jenis"></p>
    <p> Warna<input type ="text" name ="txt_warna"></p>
    <p> Tahun<input type ="text" name ="txt_tahun"></p>
    <p> Biaya<input type ="text" name ="txt_biaya"></p>

    <input type="submit" value="Update">
    </form>
    <p><a href='mobil_read.php'> kembali ke daftar mobil </a></p>
</body>
</html>
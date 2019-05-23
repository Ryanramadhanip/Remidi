<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent_car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE mobil SET 
nomor_mobil ='".$_POST["txt_no"]."', 
merk ='".$_POST["txt_merk"]."',
jenis ='".$_POST["txt_jenis"]."',
warna ='".$_POST["txt_warna"]."',
tahun_pembuatan ='".$_POST["txt_tahun"]."',
biaya_sewa_per_hari ='".$_POST["txt_biaya"]."'
WHERE id_mobil ='".$_POST["txt_id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo "<a href='mobil_read.php'> kembali ke mobil </a>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
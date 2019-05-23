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
$sql = "UPDATE pelanggan SET 
nama_pelanggan ='".$_POST["txt_nama"]."', 
alamat_pelanggan ='".$_POST["txt_alamat"]."',
kontak ='".$_POST["txt_kontak"]."'
WHERE id_pelanggan ='".$_POST["txt_id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo "<a href='pelanggan_read.php'> kembali ke pelanggan </a>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
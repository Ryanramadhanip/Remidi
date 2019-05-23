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
$sql = "UPDATE karyawan SET 
nama_karyawan ='".$_POST["txt_nama"]."', 
alamat_karyawan ='".$_POST["txt_alamat"]."',
kontak ='".$_POST["txt_kontak"]."',
username ='".$_POST["txt_username"]."',
password ='".$_POST["txt_password"]."'
WHERE id_karyawan ='".$_POST["txt_id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo "<a href='karyawan_read.php'> kembali ke karyawan </a>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
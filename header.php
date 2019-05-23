<?php
    session_start();

    if(isset($_SESSION['id_karyawan']))
    {
        header("Location: login/login.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="http://localhost/ukl/assets/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Rent Car</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ukl/mobil/mobil_read.php">Mobil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ukl/pelanggan/pelanggan_read.php">Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ukl/karyawan/karyawan_read.php">Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ukl/penyewaan/penyewaan_read.php">Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/ukl/login/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    </body>
</html>
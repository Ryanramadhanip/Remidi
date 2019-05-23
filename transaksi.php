<?php
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    include 'header.php';

    $sql = "SELECT * FROM mobil";
    $sql = "SELECT * FROM transaksi";
    $result = $koneksi->query($sql);

    $mobil = array();
    $trans = array();

    while($data = mysqli_fetch_assoc($result))
    {
        $mobil[] = $data;
    }
    while($data2 = mysqli_fetch_assoc($result))
    {
        $trans[] = $data2;
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
  <div class="card-header">
    Data Mobil
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nomor Mobil</th>
      <th scope="col">Merek</th>
      <th scope="col">Jenis</th>
      <th scope="col">Warna</th>
      <th scope="col">Tahun Pembuatan</th>
      <th scope="col">Biaya Sewa perhari</th>
      <th scope="col">Total harga</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;
      foreach ($trans as $t)
      foreach ($mobil as $b) { ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $b['nomor_mobil'] ?></td>
      <td><?= $b['merk']?></td>
      <td><?= $b['jenis']?></td>
      <td><?= $b['warna'] ?></td>
      <td><?= $b['tahun_pembuatan'] ?></td>
      <td><?= $b['biaya_sewa_per_hari'] ?></td>
      <td><?= $b['harga'] ?></td>
      <td>
         <a href="proses.php?id_mobil=<?= $b['id_mobil'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ?')">Sewa</a></td>
    </tr>
    <?php
        $no++;
      }
    ?>
  </tbody>
</table>
    
  </div>
</div>
        </div>
    </div>
</div>
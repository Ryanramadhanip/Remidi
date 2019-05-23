<?php
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    include '../header.php';

    $sql = "SELECT * FROM sewa";
    $result = $koneksi->query($sql);

    $trans = array();

    while($data = mysqli_fetch_assoc($result))
    {
        $trans[] = $data;
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
  <div class="card-header">
    Data Transaksi
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Sewa</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;
      foreach ($trans as $b) { ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $b['#'] ?></td>
      <td><?= $b['tgl_sewa']?></td>
      <td><?= $b['tgl_kembali']?></td>
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






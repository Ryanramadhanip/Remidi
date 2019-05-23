<?php
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    include '../header.php';

    $sql = "SELECT * FROM mobil";
    $result = $koneksi->query($sql);

    $mobil = array();

    while($data = mysqli_fetch_assoc($result))
    {
        $mobil[] = $data;
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
  <a href="tambah.php" class="btn btn-outline-secondary mb-2">Tambah Data</a>
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
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;
      foreach ($mobil as $b) { ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $b['nomor_mobil'] ?></td>
      <td><?= $b['merk']?></td>
      <td><?= $b['jenis']?></td>
      <td><?= $b['warna'] ?></td>
      <td><?= $b['tahun_pembuatan'] ?></td>
      <td><?= $b['biaya_sewa_per_hari'] ?></td>
      <td> 
         <a href="mobil_edit.php?id_mobil=<?= $b['id_mobil'] ?>" class="badge badge-warning">Edit</a>
         <a href="mobil_delete.php?id_mobil=<?= $b['id_mobil'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a></td>
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






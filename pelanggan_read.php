<?php
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    include '../header.php';

    $sql = "SELECT * FROM pelanggan";
    $result = $koneksi->query($sql);

    $pel = array();

    while($data = mysqli_fetch_assoc($result))
    {
        $pel[] = $data;
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
  <div class="card-header">
    Data Pelanggan
  </div>
  <div class="card-body">
  <a href="pelanggan_tambah.php" class="btn btn-outline-secondary mb-2">Tambah Data</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Pelanggan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Alamat Pelanggan</th>
      <th scope="col">Kontak</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;
      foreach ($pel as $b) { ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $b['id_pelanggan']?></td>
      <td><?= $b['nama_pelanggan'] ?></td>
      <td><?= $b['alamat_pelanggan']?></td>
      <td><?= $b['kontak'] ?></td>
      <td> 
         <a href="pelanggan_edit.php?id_pelanggan=<?= $b['id_pelanggan'] ?>" class="badge badge-warning">Edit</a>
         <a href="pelanggan_delete.php?id_pelanggan=<?= $b['id_pelanggan'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a></td>
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






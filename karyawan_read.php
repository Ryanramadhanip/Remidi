<?php
    $koneksi = new mysqli("localhost", "root", "", "rent_car");
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    include '../header.php';

    $sql = "SELECT * FROM karyawan";
    $result = $koneksi->query($sql);

    $karyawan = array();

    while($data = mysqli_fetch_assoc($result))
    {
        $karyawan[] = $data;
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
  <div class="card-header">
    Data Karyawan
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kontak</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;
      foreach ($karyawan as $b) { ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $b['nama_karyawan'] ?></td>
      <td><?= $b['alamat_karyawan']?></td>
      <td><?= $b['kontak']?></td>
      <td><?= $b['username'] ?></td>
      <td><?= $b['password'] ?></td>
      <td> 
         <a href="karyawan_edit.php?id_karyawan=<?= $b['id_karyawan'] ?>" class="badge badge-warning">Edit</a>
         <a href="karyawan_delete.php?id_karyawan=<?= $b['id_karyawan'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a></td>
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






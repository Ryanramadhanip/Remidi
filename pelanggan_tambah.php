<?php
    include '../header.php';
    include '../koneksi.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
        <div class="card">
  <div class="card-header">
    Tambah Data
  </div>
  <div class="card-body">
  <form method="post" action="pelanggan_create.php">
  <div class="form-group">
    <label for="exampleInput">Nama</label>
    <input type="text" name="txt_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleInput">Alamat</label>
    <input type="text" name="txt_alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInput">Kontak</label>
    <input type="text" name="txt_kontak" class="form-control" id="exampleInputPassword1" placeholder="Kontak">
  </div>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
        </div>
    </div>
</div>
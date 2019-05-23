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
  <form method="post" action="mobil_create.php">
  <div class="form-group">
    <label for="exampleInput">Nomor Mobil</label>
    <input type="text" name="txt_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Mobil">
  </div>
  <div class="form-group">
    <label for="exampleInput">Merk</label>
    <input type="text" name="txt_merk" class="form-control" id="exampleInputPassword1" placeholder="Merk Mobil">
  </div>
  <div class="form-group">
    <label for="exampleInput">Jenis</label>
    <input type="text" name="txt_jenis" class="form-control" id="exampleInputPassword1" placeholder="Jenis Mobil">
  </div>
  <div class="form-group">
    <label for="exampleInput">Warna</label>
    <input type="text" name="txt_warna" class="form-control" id="exampleInputPassword1" placeholder="Warna">
  </div>
  <div class="form-group">
    <label for="exampleInput">Tahun Pembuatan</label>
    <input type="text" name="txt_tahun" class="form-control" id="exampleInputPassword1" placeholder="Tahun Pembuatan">
  </div>
  <div class="form-group">
    <label for="exampleInput">Biaya Sewa Per Hari</label>
    <input type="text" name="txt_biaya" class="form-control" id="exampleInputPassword1" placeholder="Biaya Sewa">
  </div>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
        </div>
    </div>
</div>
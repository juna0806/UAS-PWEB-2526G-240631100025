<?php
include "config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
<h3>Edit Data Barang</h3>
</div>

<div class="card-body">

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id']; ?>">

<div class="mb-3">
<label>Kode Barang</label>
<input type="text" class="form-control" name="kode_barang" value="<?= $row['kode_barang']; ?>" required>
</div>

<div class="mb-3">
<label>Nama Barang</label>
<input type="text" class="form-control" name="nama_barang" value="<?= $row['nama_barang']; ?>" required>
</div>

<div class="mb-3">
<label>Kategori</label>
<input type="text" class="form-control" name="kategori" value="<?= $row['kategori']; ?>" required>
</div>

<div class="mb-3">
<label>Merk</label>
<input type="text" class="form-control" name="merk" value="<?= $row['merk']; ?>" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" class="form-control" name="stok" value="<?= $row['stok']; ?>" required>
</div>

<div class="mb-3">
<label>Satuan</label>
<input type="text" class="form-control" name="satuan" value="<?= $row['satuan']; ?>" required>
</div>

<div class="mb-3">
<label>Lokasi</label>
<input type="text" class="form-control" name="lokasi" value="<?= $row['lokasi']; ?>" required>
</div>

<div class="mb-3">
<label>Tanggal Masuk</label>
<input type="date" class="form-control" name="tanggal_masuk" value="<?= $row['tanggal_masuk']; ?>" required>
</div>

<button class="btn btn-warning" type="submit">
Update
</button>

<a href="daftar.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>
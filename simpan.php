<?php
include "config/koneksi.php";

$kode_barang    = $_POST['kode_barang'];
$nama_barang    = $_POST['nama_barang'];
$kategori       = $_POST['kategori'];
$merk           = $_POST['merk'];
$stok           = $_POST['stok'];
$satuan         = $_POST['satuan'];
$lokasi         = $_POST['lokasi'];
$tanggal_masuk  = $_POST['tanggal_masuk'];

$sql = "INSERT INTO barang
(kode_barang, nama_barang, kategori, merk, stok, satuan, lokasi, tanggal_masuk)
VALUES
('$kode_barang','$nama_barang','$kategori','$merk','$stok','$satuan','$lokasi','$tanggal_masuk')";

if (mysqli_query($conn, $sql)) {
    header("Location: daftar.php");
    exit;
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
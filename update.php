<?php

include "config/koneksi.php";

$id = $_POST['id'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$lokasi = $_POST['lokasi'];
$tanggal_masuk = $_POST['tanggal_masuk'];

mysqli_query($conn,"UPDATE barang SET

kode_barang='$kode_barang',
nama_barang='$nama_barang',
kategori='$kategori',
merk='$merk',
stok='$stok',
satuan='$satuan',
lokasi='$lokasi',
tanggal_masuk='$tanggal_masuk'

WHERE id='$id'");

header("Location: daftar.php");

?>
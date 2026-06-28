<?php
include "config/koneksi.php";
include "functions.php";

$data = mysqli_query($conn, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Daftar Data Barang</h3>
        </div>

        <div class="card-body">

            <!-- Tombol Navigasi -->
            <a href="index.php" class="btn btn-secondary mb-3">
                Home
            </a>

            <a href="tambah.php" class="btn btn-success mb-3">
                Tambah Barang
            </a>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Merk</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Satuan</th>
                        <th>Lokasi</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($data)){
                ?>

                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $row['kode_barang']; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['merk']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= stokStatus($row['stok']); ?></td>
                    <td><?= $row['satuan']; ?></td>
                    <td><?= $row['lokasi']; ?></td>
                    <td><?= formatTanggal($row['tanggal_masuk']); ?></td>

                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="hapus.php?id=<?= $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>
                    </td>

                </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
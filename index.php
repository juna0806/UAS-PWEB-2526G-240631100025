<?php
include "config/koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM barang");
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris Barang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h2>Sistem Inventaris Barang</h2>
        </div>

        <div class="card-body">

            <h4>Selamat Datang</h4>

            <p>Aplikasi Pendataan Inventaris Barang</p>

            <hr>

            <h5>Total Barang</h5>

            <h1><?php echo $total; ?></h1>

            <br>

            <a href="daftar.php" class="btn btn-primary">
                Daftar Barang
            </a>

            <a href="tambah.php" class="btn btn-success">
                Tambah Barang
            </a>

        </div>

    </div>

</div>

</body>
</html>
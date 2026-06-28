<?php
include "config/koneksi.php";

// Cek apakah parameter id dikirim
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Hapus data berdasarkan id
    $sql = "DELETE FROM barang WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location='daftar.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                window.location='daftar.php';
              </script>";
    }

} else {

    echo "<script>
            alert('ID tidak ditemukan!');
            window.location='daftar.php';
          </script>";

}
?>
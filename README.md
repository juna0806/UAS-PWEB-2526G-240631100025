# Sistem Pendataan Barang

## 1. Nama
**Nama:** Arin Junaidatillah

## 2. NIM
**NIM:** 240631100025

## 3. Judul Aplikasi
**Sistem Pendataan Barang Berbasis Web**

## 4. Deskripsi Singkat
Sistem Pendataan Barang merupakan aplikasi berbasis web yang dibuat menggunakan PHP Native, MySQL, Bootstrap, dan XAMPP. Aplikasi ini digunakan untuk mengelola data inventaris barang dengan fitur menampilkan data, menambah data, mengubah data, dan menghapus data barang.

## 5. Screenshot Aplikasi

### Halaman Dashboard
[Dashboard](img/Daftar_Data_Barang.png)

### Halaman Edit Barang
[Daftar Barang](img/Data_Hapus_Barang.png)

### Halaman Hapus Data Barang
[Tambah Barang](img/fitur_hapus_Barang.png)

### Halaman Investasi Barang
[Edit Barang](img/Sistem_investasi_Barang.png)

### Halaman Tambah Barang
[Edit Barang](img/Tambah_Data_Barang.png)

## 6. Struktur Database

**Nama Database:**

```
db_inventaris
```

**Nama Tabel:**

```
barang
```

Struktur tabel:

| Field | Tipe Data |
|--------|-----------|
| id | INT (Primary Key) |
| kode_barang | VARCHAR(20) |
| nama_barang | VARCHAR(100) |
| kategori | VARCHAR(50) |
| merk | VARCHAR(50) |
| stok | INT |
| satuan | VARCHAR(20) |
| lokasi | VARCHAR(100) |
| tanggal_masuk | DATE |

Database juga disertakan dalam file **database.sql**.

## 7. Cara Menjalankan Aplikasi

1. Install XAMPP.
2. Jalankan Apache dan MySQL.
3. Salin folder **inventaris_barang** ke folder **htdocs**.
4. Buka phpMyAdmin.
5. Buat database **db_inventaris**.
6. Import file **database.sql**.
7. Jalankan aplikasi melalui browser.

http://localhost:8080/inventaris_barang
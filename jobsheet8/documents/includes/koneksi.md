# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Pembuka tag PHP
$host = "localhost"; // Mendefinisikan variabel host database
$port = "5432"; // Mendefinisikan variabel port koneksi database PostgreSQL
$db   = "simpus_kecil"; // Mendefinisikan variabel nama database yang akan dihubungkan
$user = "postgres"; // Mendefinisikan variabel username untuk otentikasi database
$pass = "Fano1922"; // Mendefinisikan variabel password untuk otentikasi database

try { // Memulai blok try untuk menangani potensi error saat koneksi database
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass); // Membuat objek PDO baru untuk membuat koneksi ke database PostgreSQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Mengatur atribut PDO agar melempar PDOException ketika terjadi error, mempermudah debugging
} catch (PDOException $e) { // Menangkap objek PDOException jika koneksi database gagal
    die("Koneksi database gagal: " . $e->getMessage()); // Menghentikan eksekusi script dan menampilkan pesan error koneksi database
}
```

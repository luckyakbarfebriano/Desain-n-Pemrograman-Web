# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Memulai blok kode PHP
session_start(); // Memulai atau melanjutkan sesi PHP

$__jobsheetRoot = dirname(__DIR__); // Mendefinisikan path root dari jobsheet
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']); // Mendapatkan direktori skrip yang sedang dieksekusi
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/'); // Menghitung path relatif dari skrip ke root jobsheet
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1); // Menentukan path dasar untuk aset statis (CSS, JS)
?> // Mengakhiri blok kode PHP
<!DOCTYPE html> // Mendeklarasikan tipe dokumen sebagai HTML5
<html lang="id"> // Elemen root HTML dengan atribut bahasa Indonesia
<head> // Bagian kepala dokumen, berisi metadata
    <meta charset="UTF-8"> // Mengatur encoding karakter ke UTF-8
    <meta name="viewport" content="width=device-width, initial-scale=1"> // Mengatur viewport untuk tampilan responsif
    <title>SIMPUS-kecil<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title> // Menentukan judul halaman, bisa dinamis
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css"> // Menghubungkan stylesheet eksternal
</head> // Penutup bagian kepala dokumen
<body> // Bagian isi dokumen HTML
    <a href="<?php echo $base; ?>../index.html" class="back-to-menu">&larr; Kembali ke Menu</a> // Tautan untuk kembali ke menu utama
    <header> // Bagian header halaman
        <h1>SIMPUS-kecil</h1> // Judul utama aplikasi
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button> // Tombol untuk toggle navigasi di perangkat kecil
        <nav> // Bagian navigasi utama
            <ul> // Daftar tidak berurutan untuk item navigasi
                <li><a href="<?php echo $base; ?>index.php">Beranda</a></li> // Tautan ke halaman beranda
                <li><a href="<?php echo $base; ?>buku/list.php">Daftar Buku</a></li> // Tautan ke daftar buku
                <li><a href="<?php echo $base; ?>buku/tambah.php">Tambah Buku</a></li> // Tautan ke halaman tambah buku
                <li><a href="<?php echo $base; ?>anggota/list.php">Daftar Anggota</a></li> // Tautan ke daftar anggota
                <li><a href="<?php echo $base; ?>anggota/tambah.php">Tambah Anggota</a></li> // Tautan ke halaman tambah anggota
            </ul> // Penutup daftar tidak berurutan
        </nav> // Penutup bagian navigasi
    </header> // Penutup bagian header

    <main> // Bagian konten utama halaman
```

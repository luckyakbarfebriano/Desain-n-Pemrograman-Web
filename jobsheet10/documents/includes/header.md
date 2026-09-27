# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
$sudahLogin = isset($_SESSION['user_id']); // menetapkan nilai ke variabel.

// Prefix relatif ke root proyek ini (bukan root domain) â€” supaya
// /assets, /index.php, dst tetap benar walau proyek diakses lewat
// subfolder, bukan cuma lewat vhost yang document root-nya langsung
// folder ini.
$__jobsheetRoot = dirname(__DIR__); // menetapkan nilai ke variabel.
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']); // menetapkan nilai ke variabel.
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/'); // menetapkan nilai ke variabel.
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1); // menetapkan nilai ke variabel.
?> // menjalankan instruksi pada alur program.
<!DOCTYPE html> // mendefinisikan elemen antarmuka halaman.
<html lang="id"> // mendefinisikan elemen antarmuka halaman.
<head> // mendefinisikan elemen antarmuka halaman.
    <meta charset="UTF-8"> // mendefinisikan elemen antarmuka halaman.
    <meta name="viewport" content="width=device-width, initial-scale=1"> // mendefinisikan elemen antarmuka halaman.
    <title>WE GO GYM<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title> // menampilkan nilai atau konten ke halaman.
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css"> // menampilkan nilai atau konten ke halaman.
</head> // mendefinisikan elemen antarmuka halaman.
<body> // mendefinisikan elemen antarmuka halaman.
    <a href="https://desain-n-pemrograman-web-vercel.vercel.app/" class="back-to-menu">â†  Kembali ke Menu</a> // mendefinisikan elemen antarmuka halaman.
    <header> // mendefinisikan elemen antarmuka halaman.
        <h1>WE GO GYM</h1> // mendefinisikan elemen antarmuka halaman.
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button> // mendefinisikan elemen antarmuka halaman.
        <nav> // mendefinisikan elemen antarmuka halaman.
            <ul> // mendefinisikan elemen antarmuka halaman.
                <li><a href="<?php echo $base; ?>index.php">Beranda</a></li> // menampilkan nilai atau konten ke halaman.
                <li><a href="<?php echo $base; ?>kelas/list.php">Daftar Kelas</a></li> // menampilkan nilai atau konten ke halaman.
                <?php if ($sudahLogin): ?> // membuka atau menjalankan instruksi PHP.
                <li><a href="<?php echo $base; ?>kelas/tambah.php">Tambah Kelas</a></li> // menampilkan nilai atau konten ke halaman.
                <li><a href="<?php echo $base; ?>anggota/list.php">Daftar Anggota</a></li> // menampilkan nilai atau konten ke halaman.
                <li><a href="<?php echo $base; ?>anggota/tambah.php">Tambah Anggota</a></li> // menampilkan nilai atau konten ke halaman.
                <?php endif; ?> // membuka atau menjalankan instruksi PHP.
            </ul> // mendefinisikan elemen antarmuka halaman.
        </nav> // mendefinisikan elemen antarmuka halaman.
        <div class="auth-status"> // mendefinisikan elemen antarmuka halaman.
            <?php if ($sudahLogin): ?> // membuka atau menjalankan instruksi PHP.
                <span><?php echo $_SESSION['nama']; ?></span> // menampilkan nilai atau konten ke halaman.
                <a href="<?php echo $base; ?>auth/logout.php">Logout</a> // menampilkan nilai atau konten ke halaman.
            <?php else: ?> // membuka atau menjalankan instruksi PHP.
                <a href="<?php echo $base; ?>auth/login.php">Login</a> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.
        </div> // mendefinisikan elemen antarmuka halaman.
    </header> // mendefinisikan elemen antarmuka halaman.

    <main> // mendefinisikan elemen antarmuka halaman.
```

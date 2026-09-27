# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 25407020134 

```php
<?php // membuka atau menjalankan instruksi PHP.
// Guard clause: di-include di baris paling atas setiap halaman yang
// membutuhkan login (sebelum header.php mengeluarkan output apa pun),
// agar header('Location: ...') masih bisa dipanggil.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

if (!isset($_SESSION['user_id'])) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: ../auth/login.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.
``` 
# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 

```php 
<?php // membuka atau menjalankan instruksi PHP.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
session_destroy(); // menjalankan instruksi pada alur program.
header('Location: login.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
``` 
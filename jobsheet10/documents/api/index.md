# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 

```php 
<?php // membuka atau menjalankan instruksi PHP.
// Front controller: meneruskan setiap request ke file PHP yang diminta.
$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); // menetapkan nilai ke variabel.

if ($path === '/' || $path === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $path = '/index.php'; // menetapkan nilai ke variabel.
} // menutup blok kode sebelumnya.

// Hanya izinkan index.php serta file PHP di folder anggota/, kelas/, dan auth/.
// Folder includes/, sql/, Dokumentasi/ tidak bisa dibuka langsung dari browser.
if (!preg_match('#^/(index\.php|(anggota|kelas|auth)/[A-Za-z0-9_\-]+\.php)$#', $path)) { // memeriksa kondisi sebelum menjalankan blok kode.
    http_response_code(404); // menetapkan kode status HTTP respons.
    exit('Halaman tidak ditemukan'); // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$target = __DIR__ . '/..' . $path; // menetapkan nilai ke variabel.
if (!is_file($target)) { // memeriksa kondisi sebelum menjalankan blok kode.
    http_response_code(404); // menetapkan kode status HTTP respons.
    exit('Halaman tidak ditemukan'); // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

chdir(dirname($target)); // menjalankan instruksi pada alur program.
require $target; // memuat file pendukung yang diperlukan.
``` 
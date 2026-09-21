<?php
// Front controller: meneruskan setiap request ke file PHP yang diminta.
$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));// Front controller: meneruskan setiap request ke file PHP yang diminta.
$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
 
if ($path === '/' || $path === '') {
    $path = '/index.php';
}
 
// Hanya izinkan index.php serta file PHP di folder anggota/ dan kelas/.
// Folder includes/, sql/, documents/ tidak bisa dibuka langsung dari browser.
if (!preg_match('#^/(index\.php|(anggota|kelas)/[A-Za-z0-9_\-]+\.php)$#', $path)) {
    http_response_code(404);
    exit('Halaman tidak ditemukan');
}
 
$target = __DIR__ . '/..' . $path;
if (!is_file($target)) {
    http_response_code(404);
    exit('Halaman tidak ditemukan');
}
 
chdir(dirname($target));
require $target;
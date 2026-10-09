<?php
$config = require __DIR__ . '/config.php';

if ($config['db_pass'] === '') {
    die("Konfigurasi database belum lengkap (DB_PASS belum diisi).");
}

try {
    $pdo = new PDO(
        "pgsql:host={$config['db_host']};port={$config['db_port']};dbname={$config['db_name']}",
        $config['db_user'],
        $config['db_pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Pooler mode transaksi bisa menolak prepared statement asli
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Koneksi database gagal.");
}

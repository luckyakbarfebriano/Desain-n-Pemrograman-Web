<?php
$host = "aws-0-ap-southeast-1.pooler.supabase.com";
$port = "6543"; // Transaction pooler (cocok untuk serverless)
$db   = "postgres";
$user = "postgres.xnkygkkcmqydfzwiafdz";

// Password TIDAK ditulis di kode. Diisi lewat Environment Variable DB_PASS.
$pass = getenv('DB_PASS') ?: ($_ENV['DB_PASS'] ?? ($_SERVER['DB_PASS'] ?? ''));

if ($pass === '') {
    die("Konfigurasi database belum lengkap (DB_PASS belum diisi).");
}

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Pooler mode transaksi bisa menolak prepared statement asli
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Koneksi database gagal.");
}
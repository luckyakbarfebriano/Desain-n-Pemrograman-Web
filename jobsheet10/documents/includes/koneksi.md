# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO 

```php 
<?php // membuka atau menjalankan instruksi PHP.
$host = "aws-0-ap-southeast-1.pooler.supabase.com"; // menetapkan nilai ke variabel.
$port = "6543"; // Transaction pooler (cocok untuk serverless) // menetapkan nilai ke variabel.
$db   = "postgres"; // menetapkan nilai ke variabel.
$user = "postgres.xnkygkkcmqydfzwiafdz"; // menetapkan nilai ke variabel.

// Password TIDAK ditulis di kode. Diisi lewat Environment Variable DB_PASS.
$pass = getenv('DB_PASS') ?: ($_ENV['DB_PASS'] ?? ($_SERVER['DB_PASS'] ?? '')); // menetapkan nilai ke variabel.

if ($pass === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    die("Konfigurasi database belum lengkap (DB_PASS belum diisi)."); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

try { // menjalankan instruksi pada alur program.
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass); // menetapkan nilai ke variabel.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // menjalankan instruksi pada alur program.
    // Pooler mode transaksi bisa menolak prepared statement asli
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true); // menjalankan instruksi pada alur program.
} catch (PDOException $e) { // menutup blok kode sebelumnya.
    error_log($e->getMessage()); // menjalankan instruksi pada alur program.
    die("Koneksi database gagal."); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
```
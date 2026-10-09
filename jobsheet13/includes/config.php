<?php
// Konfigurasi database dipisah dari kode koneksi (includes/koneksi.php).
//
// Semua nilai dibaca dari Environment Variable. Di Vercel isi lewat:
// Project -> Settings -> Environment Variables.
//
// Nilai default di bawah (host, port, nama DB, user) sama dengan yang dipakai
// jobsheet 7-12, jadi aplikasi tetap jalan walau hanya DB_PASS yang diisi.
// Password TIDAK PERNAH punya nilai default di kode.

if (!function_exists('env_value')) {
    // getenv() saja kadang kosong di lingkungan serverless, jadi dicek juga
    // $_ENV dan $_SERVER.
    function env_value($key, $default = '')
    {
        $v = getenv($key);
        if ($v === false || $v === '') {
            $v = $_ENV[$key] ?? ($_SERVER[$key] ?? '');
        }
        return $v !== '' ? $v : $default;
    }
}

return [
    'db_host' => env_value('DB_HOST', 'aws-0-ap-southeast-1.pooler.supabase.com'),
    'db_port' => env_value('DB_PORT', '6543'), // Transaction pooler (cocok untuk serverless)
    'db_name' => env_value('DB_NAME', 'postgres'),
    'db_user' => env_value('DB_USER', 'postgres.xnkygkkcmqydfzwiafdz'),
    'db_pass' => env_value('DB_PASS', ''),
];

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/csrf.php';
$sudahLogin = isset($_SESSION['user_id']);

// Prefix relatif ke root proyek ini (bukan root domain) — supaya
// /assets, /index.php, dst tetap benar walau proyek diakses lewat
// subfolder, bukan cuma lewat vhost yang document root-nya langsung
// folder ini.
$__jobsheetRoot = dirname(__DIR__);
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);
?>
<?php
$__uri = $_SERVER['REQUEST_URI'] ?? '';
$__inKelas = strpos($__uri, '/kelas/') !== false;
$__inAnggota = strpos($__uri, '/anggota/') !== false;
$__inPend = strpos($__uri, '/pendaftaran/') !== false;
$__inAuth = strpos($__uri, '/auth/') !== false;
$__inBeranda = !$__inKelas && !$__inAnggota && !$__inPend && !$__inAuth;
$bolehKelola = $sudahLogin;
$__heading = isset($page_heading) ? $page_heading : (isset($page_title) ? $page_title : 'Beranda');
$__action = null;
if ($bolehKelola && strpos($__uri, '/kelas/list.php') !== false) {
    $__action = ['kelas/tambah.php', 'Tambah Kelas'];
} elseif ($bolehKelola && strpos($__uri, '/anggota/list.php') !== false) {
    $__action = ['anggota/tambah.php', 'Tambah Member'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WE GO GYM<?php echo isset($page_title) ? ' | ' . htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') : ''; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
</head>
<body>
    <div class="shell">
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <aside class="sidebar" id="sidebar">
            <div>
                <a href="https://desain-n-pemrograman-web-vercel.vercel.app/" class="back-link">&larr; Kembali ke Menu</a>
                <h1 class="brand-title">WE GO GYM</h1>
                <nav class="side-nav">
                    <a href="<?php echo $base; ?>index.php" class="nav-item<?php echo $__inBeranda ? ' active' : ''; ?>"><i class="fa-solid fa-house"></i> Beranda</a>
                    <a href="<?php echo $base; ?>kelas/list.php" class="nav-item<?php echo $__inKelas ? ' active' : ''; ?>"><i class="fa-solid fa-list-check"></i> Daftar Kelas</a>
                    <?php if ($sudahLogin): ?>
                    <a href="<?php echo $base; ?>anggota/list.php" class="nav-item<?php echo $__inAnggota ? ' active' : ''; ?>"><i class="fa-regular fa-user"></i> Member</a>
                    <?php endif; ?>
                </nav>
            </div>
            <?php if ($sudahLogin): ?>
                <a href="<?php echo $base; ?>auth/logout.php" class="btn-logout">Logout</a>
            <?php else: ?>
                <a href="<?php echo $base; ?>auth/login.php" class="btn-logout">Login</a>
            <?php endif; ?>
        </aside>

        <main class="content-area">
            <div class="mobile-bar">
                <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button>
                <span class="mobile-brand">WE GO GYM</span>
            </div>
            <div class="page-header">
                <h2 class="main-title"><?php echo htmlspecialchars($__heading, ENT_QUOTES, 'UTF-8'); ?></h2>
                <div class="header-right">
                    <?php if ($__action): ?>
                        <a class="btn-blue" href="<?php echo $base . $__action[0]; ?>"><i class="fa-solid fa-plus"></i> <?php echo $__action[1]; ?></a>
                    <?php endif; ?>
                    <?php if ($sudahLogin): ?>
                        <span class="user-chip"><i class="fa-regular fa-user"></i> <?php echo htmlspecialchars((string) $_SESSION['nama'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php else: ?>
                        <span class="user-chip guest"><i class="fa-regular fa-user"></i> Tamu</span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="page-body">

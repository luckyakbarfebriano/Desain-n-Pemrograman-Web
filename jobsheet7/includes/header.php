<?php
session_start();

$__jobsheetRoot = dirname(__DIR__);
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);
$sudahLogin = false;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WE GO GYM<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
</head>
<body>
    <div class="shell">
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <aside class="sidebar" id="sidebar">
            <div class="brand">
                <span class="brand-mark">🏋️</span>
                <span class="brand-name">WE GO GYM</span>
            </div>
            <nav class="side-nav">
                <a href="<?php echo $base; ?>index.php" class="nav-item<?php echo (strpos($_SERVER['REQUEST_URI'], '/index.php') !== false) ? ' active' : ''; ?>"><span class="nav-icon">🏠</span><span>Beranda</span></a>
                <a href="<?php echo $base; ?>kelas/list.php" class="nav-item<?php echo (strpos($_SERVER['REQUEST_URI'], '/kelas/list.php') !== false) ? ' active' : ''; ?>"><span class="nav-icon">🏋️</span><span>Daftar Kelas</span></a>
                <a href="<?php echo $base; ?>kelas/tambah.php" class="nav-item<?php echo (strpos($_SERVER['REQUEST_URI'], '/kelas/tambah.php') !== false) ? ' active' : ''; ?>"><span class="nav-icon">➕</span><span>Tambah Kelas</span></a>
                <a href="<?php echo $base; ?>anggota/list.php" class="nav-item<?php echo (strpos($_SERVER['REQUEST_URI'], '/anggota/list.php') !== false) ? ' active' : ''; ?>"><span class="nav-icon">👥</span><span>Daftar Anggota</span></a>
                <a href="<?php echo $base; ?>anggota/tambah.php" class="nav-item<?php echo (strpos($_SERVER['REQUEST_URI'], '/anggota/tambah.php') !== false) ? ' active' : ''; ?>"><span class="nav-icon">➕</span><span>Tambah Anggota</span></a>
            </nav>
            <div class="sidebar-footer">
                <a href="https://desain-n-pemrograman-web-vercel.vercel.app/" class="back-to-menu">&larr; Kembali ke Menu</a>
            </div>
        </aside>
        <div class="content-area">
            <div class="topbar">
                <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button>
                <div class="topbar-title"><?php echo isset($page_title) ? $page_title : 'Beranda'; ?></div>
                <div class="topbar-user">
                    <span class="guest-tag">Mode Tanpa Login</span>
                </div>
            </div>
            <main class="dashboard-main">

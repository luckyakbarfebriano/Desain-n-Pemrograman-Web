<?php
session_start();

$__jobsheetRoot = dirname(__DIR__);
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);

if (!isset($_SESSION['kelas'])) {
    $_SESSION['kelas'] = [
        ['nama_kelas' => 'Yoga Pagi', 'instruktur' => 'Rina Wijaya', 'jadwal' => 'Senin & Rabu, 06:00', 'kapasitas' => 15],
        ['nama_kelas' => 'Zumba Party', 'instruktur' => 'Dimas Prakoso', 'jadwal' => 'Selasa & Kamis, 17:00', 'kapasitas' => 20],
        ['nama_kelas' => 'HIIT Blast', 'instruktur' => 'Bagus Setiawan', 'jadwal' => 'Senin, Rabu, Jumat, 18:00', 'kapasitas' => 12],
        ['nama_kelas' => 'Muay Thai Basic', 'instruktur' => 'Chalermchai Boon', 'jadwal' => 'Selasa & Kamis, 19:00', 'kapasitas' => 10],
        ['nama_kelas' => 'CrossFit WOD', 'instruktur' => 'Farhan Maulana', 'jadwal' => 'Senin-Jumat, 06:30', 'kapasitas' => 8],
        ['nama_kelas' => 'Pilates Reformer', 'instruktur' => 'Sarah Amelia', 'jadwal' => 'Rabu & Jumat, 09:00', 'kapasitas' => 10],
        ['nama_kelas' => 'Boxing Fundamentals', 'instruktur' => 'Rocky Pratama', 'jadwal' => 'Selasa & Kamis, 20:00', 'kapasitas' => 12],
        ['nama_kelas' => 'Spin Cycle', 'instruktur' => 'Nadia Kusuma', 'jadwal' => 'Senin & Rabu, 07:00', 'kapasitas' => 18],
        ['nama_kelas' => 'Body Combat', 'instruktur' => 'Yoga Saputra', 'jadwal' => 'Sabtu, 08:00', 'kapasitas' => 20],
        ['nama_kelas' => 'Aerobik Ceria', 'instruktur' => 'Wulan Sari', 'jadwal' => 'Senin, Rabu, Jumat, 08:00', 'kapasitas' => 25],
        ['nama_kelas' => 'Calisthenics Skill', 'instruktur' => 'Reza Firmansyah', 'jadwal' => 'Selasa & Kamis, 16:00', 'kapasitas' => 10],
        ['nama_kelas' => 'Powerlifting Club', 'instruktur' => 'Anton Wijaksono', 'jadwal' => 'Senin & Kamis, 19:30', 'kapasitas' => 6],
        ['nama_kelas' => 'Aqua Fitness', 'instruktur' => 'Melati Putri', 'jadwal' => 'Sabtu & Minggu, 09:00', 'kapasitas' => 15],
    ];
}

if (!isset($_SESSION['anggota'])) {
    $_SESSION['anggota'] = [
        ['no_anggota' => 'A001', 'nama' => 'Siti Aminah', 'alamat' => 'Malang', 'no_hp' => '08123*****'],
        ['no_anggota' => 'A002', 'nama' => 'Budi Santoso', 'alamat' => 'Batu', 'no_hp' => '08124*****'],
        ['no_anggota' => 'A003', 'nama' => 'Dewi Lestari', 'alamat' => 'Malang', 'no_hp' => '08125*****'],
        ['no_anggota' => 'A004', 'nama' => 'Ahmad Fauzan', 'alamat' => 'Lawang', 'no_hp' => '08126*****'],
        ['no_anggota' => 'A005', 'nama' => 'Putri Ramadhani', 'alamat' => 'Singosari', 'no_hp' => '08127*****'],
        ['no_anggota' => 'A006', 'nama' => 'Rizky Firmansyah', 'alamat' => 'Batu', 'no_hp' => '08128*****'],
        ['no_anggota' => 'A007', 'nama' => 'Nurul Hidayah', 'alamat' => 'Malang', 'no_hp' => '08129*****'],
        ['no_anggota' => 'A008', 'nama' => 'Fajar Nugroho', 'alamat' => 'Dau', 'no_hp' => '08131*****'],
        ['no_anggota' => 'A009', 'nama' => 'Intan Permatasari', 'alamat' => 'Karangploso', 'no_hp' => '08132*****'],
        ['no_anggota' => 'A010', 'nama' => 'Yusuf Maulana', 'alamat' => 'Malang', 'no_hp' => '08133*****'],
    ];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WE GO GYM<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title>
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
</head>
<body>
    <a href="<?php echo $base; ?>../index.html" class="back-to-menu">&larr; Kembali ke Menu</a>
    <header>
        <h1>WE GO GYM</h1>
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button>
        <nav>
            <ul>
                <li><a href="<?php echo $base; ?>index.php">Beranda</a></li>
                <li><a href="<?php echo $base; ?>kelas/list.php">Daftar Kelas</a></li>
                <li><a href="<?php echo $base; ?>kelas/tambah.php">Tambah Kelas</a></li>
                <li><a href="<?php echo $base; ?>anggota/list.php">Daftar Anggota</a></li>
                <li><a href="<?php echo $base; ?>anggota/tambah.php">Tambah Anggota</a></li>
            </ul>
        </nav>
    </header>

    <main>
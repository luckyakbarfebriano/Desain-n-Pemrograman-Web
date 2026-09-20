<?php
session_start();

$__jobsheetRoot = dirname(__DIR__);
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);

if (!isset($_SESSION['buku'])) {
    $_SESSION['buku'] = [
        ['judul' => 'The Psycology of Money', 'pengarang' => 'Morgan Housel', 'tahun' => 2020, 'stok' => 5],
        ['judul' => 'Crypto Trading Guide', 'pengarang' => 'Timothy Ronald, Kalimasada', 'tahun' => 2023, 'stok' => 3],
        ['judul' => 'The Richest Man in Babylon', 'pengarang' => 'George Samuel Clason', 'tahun' => 1926, 'stok' => 10],
        ['judul' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'tahun' => 2005, 'stok' => 4],
        ['judul' => 'Bumi Manusia', 'pengarang' => 'Pramoedya Ananta Toer', 'tahun' => 1980, 'stok' => 2],
        ['judul' => 'Negeri 5 Menara', 'pengarang' => 'Ahmad Fuadi', 'tahun' => 2009, 'stok' => 0],
        ['judul' => 'Atomic Habits', 'pengarang' => 'James Clear', 'tahun' => 2018, 'stok' => 7],
        ['judul' => 'Filosofi Teras', 'pengarang' => 'Henry Manampiring', 'tahun' => 2018, 'stok' => 5],
        ['judul' => "Harry Potter and the Philosopher's Stone", 'pengarang' => 'J.K. Rowling', 'tahun' => 1997, 'stok' => 6],
        ['judul' => '1984', 'pengarang' => 'George Orwell', 'tahun' => 1949, 'stok' => 8],
        ['judul' => 'To Kill a Mockingbird', 'pengarang' => 'Harper Lee', 'tahun' => 1960, 'stok' => 4],
        ['judul' => 'Sapiens: A Brief History of Humankind', 'pengarang' => 'Yuval Noah Harari', 'tahun' => 2011, 'stok' => 6],
        ['judul' => 'The Alchemist', 'pengarang' => 'Paulo Coelho', 'tahun' => 1988, 'stok' => 9],
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
    <title>SIMPUS-kecil<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title>
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
</head>
<body>
    <a href="<?php echo $base; ?>../index.html" class="back-to-menu">&larr; Kembali ke Menu</a>
    <header>
        <h1>SIMPUS-kecil</h1>
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button>
        <nav>
            <ul>
                <li><a href="<?php echo $base; ?>index.php">Beranda</a></li>
                <li><a href="<?php echo $base; ?>buku/list.php">Daftar Buku</a></li>
                <li><a href="<?php echo $base; ?>buku/tambah.php">Tambah Buku</a></li>
                <li><a href="<?php echo $base; ?>anggota/list.php">Daftar Anggota</a></li>
                <li><a href="<?php echo $base; ?>anggota/tambah.php">Tambah Anggota</a></li>
            </ul>
        </nav>
    </header>

    <main>
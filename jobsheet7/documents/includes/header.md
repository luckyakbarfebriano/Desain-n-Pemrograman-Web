# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO

```php
<?php
session_start(); // Memulai sesi untuk menyimpan data sementara di server.

$__jobsheetRoot = dirname(__DIR__); // Mendapatkan direktori root dari proyek jobsheet.
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']); // Mendapatkan direktori skrip yang sedang dieksekusi.
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/'); // Menghitung path relatif direktori saat ini dari root.
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1); // Membuat base URL relatif untuk akses file di direktori utama.

if (!isset($_SESSION['buku'])) { // Memeriksa apakah data buku dalam sesi belum ada.
    $_SESSION['buku'] = [ // Menginisialisasi array data buku ke dalam sesi.
        ['judul' => 'The Psycology of Money', 'pengarang' => 'Morgan Housel', 'tahun' => 2020, 'stok' => 5], // Data buku pertama.
        ['judul' => 'Crypto Trading Guide', 'pengarang' => 'Timothy Ronald, Kalimasada', 'tahun' => 2023, 'stok' => 3], // Data buku kedua.
        ['judul' => 'The Richest Man in Babylon', 'pengarang' => 'George Samuel Clason', 'tahun' => 1926, 'stok' => 10], // Data buku ketiga.
        ['judul' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'tahun' => 2005, 'stok' => 4], // Data buku keempat.
        ['judul' => 'Bumi Manusia', 'pengarang' => 'Pramoedya Ananta Toer', 'tahun' => 1980, 'stok' => 2], // Data buku kelima.
        ['judul' => 'Negeri 5 Menara', 'pengarang' => 'Ahmad Fuadi', 'tahun' => 2009, 'stok' => 0], // Data buku keenam.
        ['judul' => 'Atomic Habits', 'pengarang' => 'James Clear', 'tahun' => 2018, 'stok' => 7], // Data buku ketujuh.
        ['judul' => 'Filosofi Teras', 'pengarang' => 'Henry Manampiring', 'tahun' => 2018, 'stok' => 5], // Data buku kedelapan.
        ['judul' => "Harry Potter and the Philosopher's Stone", 'pengarang' => 'J.K. Rowling', 'tahun' => 1997, 'stok' => 6], // Data buku kesembilan.
        ['judul' => '1984', 'pengarang' => 'George Orwell', 'tahun' => 1949, 'stok' => 8], // Data buku kesepuluh.
        ['judul' => 'To Kill a Mockingbird', 'pengarang' => 'Harper Lee', 'tahun' => 1960, 'stok' => 4], // Data buku kesebelas.
        ['judul' => 'Sapiens: A Brief History of Humankind', 'pengarang' => 'Yuval Noah Harari', 'tahun' => 2011, 'stok' => 6], // Data buku keduabelas.
        ['judul' => 'The Alchemist', 'pengarang' => 'Paulo Coelho', 'tahun' => 1988, 'stok' => 9], // Data buku ketigabelas.
    ; // Penutup array data buku.
} // Penutup pengkondisian sesi buku.

if (!isset($_SESSION['anggota'])) { // Memeriksa apakah data anggota dalam sesi belum ada.
    $_SESSION['anggota' = [ // Menginisialisasi array data anggota ke dalam sesi.
        ['no_anggota' => 'A001', 'nama' => 'Siti Aminah', 'alamat' => 'Malang', 'no_hp' => '08123*****'], // Data anggota pertama.
        ['no_anggota' => 'A002', 'nama' => 'Budi Santoso', 'alamat' => 'Batu', 'no_hp' => '08124*****'], // Data anggota kedua.
        ['no_anggota' => 'A003', 'nama' => 'Dewi Lestari', 'alamat' => 'Malang', 'no_hp' => '08125*****'], // Data anggota ketiga.
        ['no_anggota' => 'A004', 'nama' => 'Ahmad Fauzan', 'alamat' => 'Lawang', 'no_hp' => '08126*****'], // Data anggota keempat.
        ['no_anggota' => 'A005', 'nama' => 'Putri Ramadhani', 'alamat' => 'Singosari', 'no_hp' => '08127*****'], // Data anggota kelima.
        ['no_anggota' => 'A006', 'nama' => 'Rizky Firmansyah', 'alamat' => 'Batu', 'no_hp' => '08128*****'], // Data anggota keenam.
        ['no_anggota' => 'A007', 'nama' => 'Nurul Hidayah', 'alamat' => 'Malang', 'no_hp' => '08129*****'], // Data anggota ketujuh.
        ['no_anggota' => 'A008', 'nama' => 'Fajar Nugroho', 'alamat' => 'Dau', 'no_hp' => '08131*****'], // Data anggota kedelapan.
        ['no_anggota' => 'A009', 'nama' => 'Intan Permatasari', 'alamat' => 'Karangploso', 'no_hp' => '08132*****'], // Data anggota kesembilan.
        ['no_anggota' => 'A010', 'nama' => 'Yusuf Maulana', 'alamat' => 'Malang', 'no_hp' => '08133*****'], // Data anggota kesepuluh.
    ]; // Penutup array data anggota.
} // Penutup pengkondisian sesi anggota.
?>
<!DOCTYPE html> <!-- Mendefinisikan tipe dokumen sebagai HTML5. -->
<html lang="id"> <!-- Membuka elemen HTML dengan bahasa Indonesia. -->
<head> <!-- Membuka bagian kepala dokumen. -->
    <meta charset="UTF-8"> <!-- Mengatur pengkodean karakter dokumen menjadi UTF-8. -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mengatur viewport agar responsif di perangkat mobile. -->
    <title>SIMPUS-kecil<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title> <!-- Judul halaman yang dinamis. -->
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css"> <!-- Menghubungkan file CSS eksternal. -->
</head> <!-- Menutup bagian kepala dokumen. -->
<body> <!-- Membuka bagian tubuh dokumen. -->
    <a href="<?php echo $base; ?>../index.html" class="back-to-menu">&larr; Kembali ke Menu</a> <!-- Tombol navigasi untuk kembali ke menu utama. -->
    <header> <!-- Membuka elemen header. -->
        <h1>SIMPUS-kecil</h1> <!-- Judul utama aplikasi. -->
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu">&#9776;</button> <!-- Tombol menu hamburger untuk perangkat mobile. -->
        <nav> <!-- Membuka elemen navigasi. -->
            <ul> <!-- Membuka daftar navigasi. -->
                <li><a href="<?php echo $base; ?>index.php">Beranda</a></li> <!-- Link ke halaman beranda. -->
                <li><a href="<?php echo $base; ?>buku/list.php">Daftar Buku</a></li> <!-- Link ke halaman daftar buku. -->
                <li><a href="<?php echo $base; ?>buku/tambah.php">Tambah Buku</a></li> <!-- Link ke halaman tambah buku. -->
                <li><a href="<?php echo $base; ?>anggota/list.php">Daftar Anggota</a></li> <!-- Link ke halaman daftar anggota. -->
                <li><a href="<?php echo $base; ?>anggota/tambah.php">Tambah Anggota</a></li> <!-- Link ke halaman tambah anggota. -->
            </ul> <!-- Menutup daftar navigasi. -->
        </nav> <!-- Menutup elemen navigasi. -->
    </header> <!-- Menutup elemen header. -->

    <main> <!-- Membuka elemen utama konten. -->
```

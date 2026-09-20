# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Memulai blok kode PHP
session_start(); // Memulai sesi PHP, diperlukan untuk menggunakan variabel $_SESSION
require __DIR__ . '/../includes/koneksi.php'; // Mengimpor file koneksi.php dari direktori induk

$judul = trim($_POST['judul' ?? ''); // Mengambil nilai 'judul' dari POST, menghapus spasi awal/akhir, atau string kosong jika tidak ada
$pengarang = trim($_POST['pengarang'] ?? ''); // Mengambil nilai 'pengarang' dari POST, menghapus spasi awal/akhir, atau string kosong jika tidak ada
$tahun = $_POST['tahun'] ?? ''; // Mengambil nilai 'tahun' dari POST, atau string kosong jika tidak ada
$isbn = trim($_POST['isbn'] ?? ''); // Mengambil nilai 'isbn' dari POST, menghapus spasi awal/akhir, atau string kosong jika tidak ada
$stok = $_POST['stok'] ?? ''; // Mengambil nilai 'stok' dari POST, atau string kosong jika tidak ada
$kategori = trim($_POST['kategori'] ?? ''); // Mengambil nilai 'kategori' dari POST, menghapus spasi awal/akhir, atau string kosong jika tidak ada

$errors = []; // Menginisialisasi array kosong untuk menyimpan pesan kesalahan validasi
if ($judul === '') $errors[] = "Judul wajib diisi."; // Menambahkan pesan kesalahan jika judul kosong
if ($pengarang === '') $errors[] = "Pengarang wajib diisi."; // Menambahkan pesan kesalahan jika pengarang kosong
if (!is_numeric($tahun) || $tahun < 1900 || $tahun > 2026) $errors[] = "Tahun harus di antara 1900-2026."; // Menambahkan pesan kesalahan jika tahun tidak numerik atau di luar rentang
if (!is_numeric($stok) || $stok < 0) $errors[] = "Stok tidak boleh negatif."; // Menambahkan pesan kesalahan jika stok tidak numerik atau negatif

if (!empty($errors)) { // Memeriksa apakah ada kesalahan validasi
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // Menyimpan pesan kesalahan ke sesi flash
    header('Location: tambah.php'); // Mengarahkan kembali ke halaman tambah.php
    exit; // Menghentikan eksekusi skrip
}

$stmt = $pdo->prepare( // Mempersiapkan pernyataan SQL untuk memasukkan data buku
    "insert into buku (judul, pengarang, tahun, isbn, stok, kategori)
     values (:judul, :pengarang, :tahun, :isbn, :stok, :kategori)
     returning id" // Mengembalikan ID dari baris yang baru saja dimasukkan (khusus PostgreSQL)
);
$stmt->execute([ // Menjalankan pernyataan yang telah dipersiapkan dengan nilai-nilai yang aman
    'judul' => $judul, // Mengikat nilai judul ke placeholder :judul
    'pengarang' => $pengarang, // Mengikat nilai pengarang ke placeholder :pengarang
    'tahun' => (int) $tahun, // Mengikat nilai tahun (dikonversi ke integer) ke placeholder :tahun
    'isbn' => $isbn, // Mengikat nilai isbn ke placeholder :isbn
    'stok' => (int) $stok, // Mengikat nilai stok (dikonversi ke integer) ke placeholder :stok
    'kategori' => $kategori, // Mengikat nilai kategori ke placeholder :kategori
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Buku berhasil ditambahkan.']; // Menyimpan pesan sukses ke sesi flash
header('Location: list.php'); // Mengarahkan ke halaman list.php
exit; // Menghentikan eksekusi skrip
```

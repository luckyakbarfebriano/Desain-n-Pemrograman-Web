# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php
session_start(); // Memulai sesi PHP untuk menyimpan data sementara.

$judul = trim($_POST['judul' ?? ''); // Mengambil dan membersihkan input judul dari spasi.
$pengarang = trim($_POST['pengarang'] ?? ''); // Mengambil dan membersihkan input pengarang dari spasi.
$tahun = $_POST['tahun'] ?? ''; // Mengambil input tahun dari form.
$isbn = trim($_POST['isbn'] ?? ''); // Mengambil dan membersihkan input ISBN dari spasi.
$stok = $_POST['stok'] ?? ''; // Mengambil input stok dari form.
$kategori = trim($_POST['kategori'] ?? ''); // Mengambil dan membersihkan input kategori dari spasi.

$errors = []; // Inisialisasi array untuk menampung pesan kesalahan validasi.
if ($judul === '') $errors[ = "Judul wajib diisi."; // Menambah error jika input judul kosong.
if ($pengarang === '') $errors[] = "Pengarang wajib diisi."; // Menambah error jika input pengarang kosong.
if (!is_numeric($tahun) || $tahun < 1900 || $tahun > 2026) $errors[] = "Tahun harus di antara 1900-2026."; // Validasi angka dan rentang tahun.
if (!is_numeric($stok) || $stok < 0) $errors[] = "Stok tidak boleh negatif."; // Validasi angka dan memastikan stok tidak negatif.

if (!empty($errors)) { // Mengecek apakah terdapat error pada validasi.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // Menyimpan pesan error ke dalam sesi flash.
    header('Location: tambah.php'); // Mengalihkan pengguna kembali ke halaman tambah jika validasi gagal.
    exit; // Menghentikan eksekusi skrip.
}

if (!isset($_SESSION['buku'])) { // Mengecek apakah array buku di sesi belum ada.
    $_SESSION['buku'] = []; // Menginisialisasi array buku dalam sesi jika belum ada.
}

$_SESSION['buku'[] = [ // Menambahkan data buku baru ke dalam array sesi.
    'judul' => $judul, // Menyimpan judul ke dalam elemen array buku.
    'pengarang' => $pengarang, // Menyimpan pengarang ke dalam elemen array buku.
    'tahun' => (int) $tahun, // Menyimpan tahun sebagai integer ke dalam array buku.
    'isbn' => $isbn, // Menyimpan isbn ke dalam elemen array buku.
    'stok' => (int) $stok, // Menyimpan stok sebagai integer ke dalam array buku.
    'kategori' => $kategori, // Menyimpan kategori ke dalam elemen array buku.
]; // Menutup array elemen data buku.

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Buku berhasil ditambahkan.']; // Menyimpan pesan sukses ke dalam sesi flash.
header('Location: list.php'); // Mengalihkan pengguna ke halaman daftar buku setelah data disimpan.
exit; // Menghentikan eksekusi skrip.
```

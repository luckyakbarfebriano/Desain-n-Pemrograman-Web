# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php
session_start(); // Memulai sesi PHP untuk mengelola data sesi.

$nama = trim($_POST['nama'] ?? ''); // Mengambil nilai 'nama' dari POST request, menghapus spasi di awal/akhir, dan memberikan nilai kosong jika tidak ada.
$no_anggota = trim($_POST['no_anggota'] ?? ''); // Mengambil nilai 'no_anggota' dari POST request, menghapus spasi, dan memberikan nilai kosong jika tidak ada.
$alamat = trim($_POST['alamat'] ?? ''); // Mengambil nilai 'alamat' dari POST request, menghapus spasi, dan memberikan nilai kosong jika tidak ada.
$no_hp = trim($_POST['no_hp'] ?? ''); // Mengambil nilai 'no_hp' dari POST request, menghapus spasi, dan memberikan nilai kosong jika tidak ada.

$errors = []; // Menginisialisasi array kosong untuk menyimpan pesan kesalahan validasi.
if ($nama === '') $errors[] = "Nama wajib diisi."; // Menambahkan pesan error jika 'nama' kosong.
if ($no_anggota === '') $errors[] = "No Anggota wajib diisi."; // Menambahkan pesan error jika 'no_anggota' kosong.
if ($alamat === '') $errors[] = "Alamat wajib diisi."; // Menambahkan pesan error jika 'alamat' kosong.
if ($no_hp === '') $errors[] = "No HP wajib diisi."; // Menambahkan pesan error jika 'no_hp' kosong.

if (!empty($errors)) { // Memeriksa apakah ada kesalahan validasi yang terkumpul.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // Menyimpan pesan error ke dalam sesi flash.
    header('Location: tambah.php'); // Mengarahkan kembali pengguna ke halaman 'tambah.php'.
    exit; // Menghentikan eksekusi skrip setelah redirect.
}

if (!isset($_SESSION['anggota'])) { // Memeriksa apakah array 'anggota' sudah ada dalam sesi.
    $_SESSION['anggota'] = []; // Membuat array 'anggota' kosong jika belum ada.
}

$_SESSION['anggota'][] = [ // Menambahkan data anggota baru ke dalam array 'anggota' di sesi.
    'no_anggota' => $no_anggota, // Menyimpan nomor anggota.
    'nama' => $nama, // Menyimpan nama.
    'alamat' => $alamat, // Menyimpan alamat.
    'no_hp' => $no_hp, // Menyimpan nomor HP.
];

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.']; // Menyimpan pesan sukses ke dalam sesi flash.
header('Location: list.php'); // Mengarahkan pengguna ke halaman 'list.php' untuk menampilkan daftar anggota.
exit; // Menghentikan eksekusi skrip setelah redirect.
```

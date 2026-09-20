# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Membuka blok kode PHP.
session_start(); // Memulai session untuk menyimpan pesan dan data sementara pengguna.
require __DIR__ . '/../includes/koneksi.php'; // Memuat koneksi database agar variabel PDO dapat digunakan.

$nama = trim($_POST['nama'] ?? ''); // Mengambil nama dari form, menghapus spasi berlebih, atau memakai teks kosong jika tidak ada.
$no_anggota = trim($_POST['no_anggota'] ?? ''); // Mengambil nomor anggota dari form dan membersihkan spasi di awal atau akhir.
$alamat = trim($_POST['alamat'] ?? ''); // Mengambil alamat dari form dan membersihkan spasi di awal atau akhir.
$no_hp = trim($_POST['no_hp'] ?? ''); // Mengambil nomor telepon dari form dan membersihkan spasi di awal atau akhir.

$errors = []; // Membuat array kosong untuk menampung pesan kesalahan validasi.
if ($nama === '') $errors[] = "Nama wajib diisi."; // Menambahkan kesalahan jika nama belum diisi.
if ($no_anggota === '') $errors[] = "No Anggota wajib diisi."; // Menambahkan kesalahan jika nomor anggota belum diisi.
if ($alamat === '') $errors[] = "Alamat wajib diisi."; // Menambahkan kesalahan jika alamat belum diisi.
if ($no_hp === '') $errors[] = "No HP wajib diisi."; // Menambahkan kesalahan jika nomor telepon belum diisi.

if (!empty($errors)) { // Memeriksa apakah terdapat kesalahan validasi.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // Menyimpan pesan kesalahan ke session dengan tipe error.
    header('Location: tambah.php'); // Mengarahkan pengguna kembali ke halaman tambah anggota.
    exit; // Menghentikan proses agar data yang tidak valid tidak disimpan.
} // Menutup blok kondisi kesalahan.

$stmt = $pdo->prepare( // Menyiapkan query SQL agar dapat dijalankan secara aman.
    "insert into anggota (nama, no_anggota, alamat, no_hp) // Menentukan kolom tabel anggota yang akan diisi.
     values (:nama, :no_anggota, :alamat, :no_hp) // Menentukan placeholder untuk nilai setiap kolom.
     returning id" // Meminta database mengembalikan id data yang baru dibuat.
); // Menutup proses persiapan query.
$stmt->execute([ // Menjalankan query menggunakan data dari form.
    'nama' => $nama, // Menghubungkan placeholder nama dengan nilai nama.
    'no_anggota' => $no_anggota, // Menghubungkan placeholder nomor anggota dengan nilainya.
    'alamat' => $alamat, // Menghubungkan placeholder alamat dengan nilai alamat.
    'no_hp' => $no_hp, // Menghubungkan placeholder nomor telepon dengan nilainya.
]); // Menutup array parameter dan eksekusi query.

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.']; // Menyimpan pesan keberhasilan ke session.
header('Location: list.php'); // Mengarahkan pengguna ke halaman daftar anggota.
exit; // Menghentikan eksekusi setelah redirect.
```

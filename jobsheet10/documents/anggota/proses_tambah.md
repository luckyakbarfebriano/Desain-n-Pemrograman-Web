# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 

```php 
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$nama = trim($_POST['nama'] ?? ''); // menetapkan nilai ke variabel.
$noAnggota = trim($_POST['no_anggota'] ?? ''); // menetapkan nilai ke variabel.
$alamat = trim($_POST['alamat'] ?? ''); // menetapkan nilai ke variabel.
$noHp = trim($_POST['no_hp'] ?? ''); // menetapkan nilai ke variabel.

$errors = []; // menetapkan nilai ke variabel.
if ($nama === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Nama wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if ($noAnggota === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "No. Anggota wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

if (!empty($errors)) { // memeriksa kondisi sebelum menjalankan blok kode.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // menjalankan instruksi pada alur program.
    header('Location: tambah.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$stmt = $pdo->prepare( // menetapkan nilai ke variabel.
    "INSERT INTO anggota (nama, no_anggota, alamat, no_hp) 
     VALUES (:nama, :no_anggota, :alamat, :no_hp) 
     RETURNING id" // menjalankan instruksi pada alur program.
); // menjalankan instruksi pada alur program.
$stmt->execute([ // menjalankan operasi database dan mengolah hasilnya.
    'nama' => $nama, // menjalankan instruksi pada alur program.
    'no_anggota' => $noAnggota, // menjalankan instruksi pada alur program.
    'alamat' => $alamat, // menjalankan instruksi pada alur program.
    'no_hp' => $noHp, // menjalankan instruksi pada alur program.
]); // menjalankan instruksi pada alur program.

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.']; // menjalankan instruksi pada alur program.
header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
``` 
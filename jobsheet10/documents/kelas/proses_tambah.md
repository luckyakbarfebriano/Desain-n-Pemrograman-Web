# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO 


```php 
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$nama_kelas = trim($_POST['nama_kelas'] ?? ''); // menetapkan nilai ke variabel.
$instruktur = trim($_POST['instruktur'] ?? ''); // menetapkan nilai ke variabel.
$jadwal = trim($_POST['jadwal'] ?? ''); // menetapkan nilai ke variabel.
$kapasitas = $_POST['kapasitas'] ?? ''; // menetapkan nilai ke variabel.

// Validasi server-side â€” wajib ada meski sudah divalidasi JS,
// karena validasi client bisa dilewati (nonaktifkan JS / kirim request manual).
$errors = []; // menetapkan nilai ke variabel.
if ($nama_kelas === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Nama kelas wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if ($instruktur === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Instruktur wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if ($jadwal === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Jadwal wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if (!is_numeric($kapasitas) || $kapasitas < 0) { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Kapasitas tidak boleh negatif."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

if (!empty($errors)) { // memeriksa kondisi sebelum menjalankan blok kode.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // menjalankan instruksi pada alur program.
    header('Location: tambah.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$stmt = $pdo->prepare( // menetapkan nilai ke variabel.
    "INSERT INTO kelas (nama_kelas, instruktur, jadwal, kapasitas)
     VALUES (:nama_kelas, :instruktur, :jadwal, :kapasitas)
     RETURNING id" // menjalankan instruksi pada alur program.
); // menjalankan instruksi pada alur program.
$stmt->execute([ // menjalankan operasi database dan mengolah hasilnya.
    'nama_kelas' => $nama_kelas, // menjalankan instruksi pada alur program.
    'instruktur' => $instruktur, // menjalankan instruksi pada alur program.
    'jadwal' => $jadwal, // menjalankan instruksi pada alur program.
    'kapasitas' => (int) $kapasitas, // menjalankan instruksi pada alur program.
]); // menjalankan instruksi pada alur program.

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kelas berhasil ditambahkan.']; // menjalankan instruksi pada alur program.
header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
``` 
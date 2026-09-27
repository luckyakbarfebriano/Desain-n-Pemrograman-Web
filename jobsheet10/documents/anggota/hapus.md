# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 
``` php 
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$id = $_POST['id'] ?? null; // menetapkan nilai ke variabel.
if ($id) { // memeriksa kondisi sebelum menjalankan blok kode.
    $stmt = $pdo->prepare("DELETE FROM anggota WHERE id = :id"); // menetapkan nilai ke variabel.
    $stmt->execute(['id' => $id]); // menjalankan operasi database dan mengolah hasilnya.
    $_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil dihapus.']; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
```
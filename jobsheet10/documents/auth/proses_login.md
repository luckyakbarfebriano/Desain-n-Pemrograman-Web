# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 

```php 
<?php // membuka atau menjalankan instruksi PHP.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$username = trim($_POST['username'] ?? ''); // menetapkan nilai ke variabel.
$password = $_POST['password'] ?? ''; // menetapkan nilai ke variabel.

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username"); // menetapkan nilai ke variabel.
$stmt->execute(['username' => $username]); // menjalankan operasi database dan mengolah hasilnya.
$user = $stmt->fetch(PDO::FETCH_ASSOC); // menetapkan nilai ke variabel.

if ($user && password_verify($password, $user['password'])) { // memeriksa kondisi sebelum menjalankan blok kode.
    $_SESSION['user_id'] = $user['id']; // menjalankan instruksi pada alur program.
    $_SESSION['nama'] = $user['nama']; // menjalankan instruksi pada alur program.
    $_SESSION['role'] = $user['role']; // menjalankan instruksi pada alur program.
    header('Location: ../index.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Username atau password salah.']; // menjalankan instruksi pada alur program.
header('Location: login.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
``` 
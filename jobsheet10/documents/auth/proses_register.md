# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 


```php 
<?php // membuka atau menjalankan instruksi PHP.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$nama = trim($_POST['nama'] ?? ''); // menetapkan nilai ke variabel.
$username = trim($_POST['username'] ?? ''); // menetapkan nilai ke variabel.
$password = $_POST['password'] ?? ''; // menetapkan nilai ke variabel.

$errors = []; // menetapkan nilai ke variabel.
if ($nama === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Nama wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if ($username === '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Username wajib diisi."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if (strlen($password) < 6) { // memeriksa kondisi sebelum menjalankan blok kode.
    $errors[] = "Password minimal 6 karakter."; // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.

if (!empty($errors)) { // memeriksa kondisi sebelum menjalankan blok kode.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)]; // menjalankan instruksi pada alur program.
    header('Location: register.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$cek = $pdo->prepare("SELECT id FROM users WHERE username = :username"); // menetapkan nilai ke variabel.
$cek->execute(['username' => $username]); // menjalankan operasi database dan mengolah hasilnya.
if ($cek->fetch()) { // memeriksa kondisi sebelum menjalankan blok kode.
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Username sudah digunakan.']; // menjalankan instruksi pada alur program.
    header('Location: register.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$stmt = $pdo->prepare( // menetapkan nilai ke variabel.
    "INSERT INTO users (nama, username, password, role) VALUES (:nama, :username, :password, 'petugas')" // menjalankan instruksi pada alur program.
); // menjalankan instruksi pada alur program.
$stmt->execute([ // menjalankan operasi database dan mengolah hasilnya.
    'nama' => $nama, // menjalankan instruksi pada alur program.
    'username' => $username, // menjalankan instruksi pada alur program.
    'password' => password_hash($password, PASSWORD_DEFAULT), // menjalankan instruksi pada alur program.
]); // menjalankan instruksi pada alur program.

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Registrasi berhasil, silakan login.']; // menjalankan instruksi pada alur program.
header('Location: login.php'); // mengarahkan pengguna ke halaman tujuan.
exit; // menghentikan eksekusi program.
``` 
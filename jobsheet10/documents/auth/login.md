# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
if (session_status() === PHP_SESSION_NONE) { // memeriksa kondisi sebelum menjalankan blok kode.
    session_start(); // menjalankan instruksi pada alur program.
} // menutup blok kode sebelumnya.
if (isset($_SESSION['user_id'])) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: ../index.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$page_title = "Login"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.
?> // menjalankan instruksi pada alur program.
        <section> // mendefinisikan elemen antarmuka halaman.
            <h2>Login Petugas</h2> // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): ?> // membuka atau menjalankan instruksi PHP.
                <p class="flash flash-<?php echo $flash['type'; ?>"><?php echo $flash['pesan']; ?></p> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.

            <form method="post" action="proses_login.php"> // membuka formulir input pengguna.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="username">Username</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="username" name="username" required> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="password">Password</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="password" id="password" name="password" required> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Masuk</button> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
            </form> // menutup formulir input pengguna.
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p> // mendefinisikan elemen antarmuka halaman.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
```

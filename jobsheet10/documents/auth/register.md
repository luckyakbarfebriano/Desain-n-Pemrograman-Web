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

$page_title = "Registrasi Petugas"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.
?> <?php // menjalankan instruksi pada alur program. ?>
        <section> <?php // mendefinisikan elemen antarmuka halaman. ?>
            <h2>Registrasi Petugas</h2> <?php // mendefinisikan elemen antarmuka halaman. ?>

            <?php if ($flash): ?> <?php // membuka atau menjalankan instruksi PHP. ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> <?php // menampilkan nilai atau konten ke halaman. ?>
            <?php endif; ?> <?php // membuka atau menjalankan instruksi PHP. ?>

            <form method="post" action="proses_register.php"> <?php // membuka formulir input pengguna. ?>
                <p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <label for="nama">Nama</label><br> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <input type="text" id="nama" name="nama" required> <?php // mendefinisikan elemen antarmuka halaman. ?>
                </p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                <p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <label for="username">Username</label><br> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <input type="text" id="username" name="username" required> <?php // mendefinisikan elemen antarmuka halaman. ?>
                </p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                <p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <label for="password">Password</label><br> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <input type="password" id="password" name="password" required minlength="6"> <?php // mendefinisikan elemen antarmuka halaman. ?>
                </p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                <p> <?php // mendefinisikan elemen antarmuka halaman. ?>
                    <button type="submit">Daftar</button> <?php // mendefinisikan elemen antarmuka halaman. ?>
                </p> <?php // mendefinisikan elemen antarmuka halaman. ?>
            </form> <?php // menutup formulir input pengguna. ?>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p> <?php // mendefinisikan elemen antarmuka halaman. ?>
        </section> <?php // mendefinisikan elemen antarmuka halaman. ?>
<?php include __DIR__ . '/../includes/footer.php'; ?> <?php // membuka atau menjalankan instruksi PHP. ?>
```

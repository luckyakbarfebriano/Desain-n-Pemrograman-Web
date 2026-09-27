# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
$page_title = "Tambah Anggota"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.
?> // menjalankan instruksi pada alur program.
        <section> // mendefinisikan elemen antarmuka halaman.
            <h2>Tambah Anggota</h2> // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): ?> // membuka atau menjalankan instruksi PHP.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.

            <form id="form-tambah" method="post" action="proses_tambah.php"> // membuka formulir input pengguna.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="nama">Nama</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="nama" name="nama" required> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="no_anggota">No. Anggota</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="no_anggota" name="no_anggota" required> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="alamat">Alamat</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="alamat" name="alamat"> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="no_hp">No. HP</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="no_hp" name="no_hp"> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Simpan</button> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
            </form> // menutup formulir input pengguna.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
```

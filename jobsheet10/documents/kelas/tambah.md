# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
$page_title = "Tambah Kelas"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.
<?php // menjalankan instruksi pada alur program. 
        <section> <?php // mendefinisikan elemen antarmuka halaman. 
            <h2>Tambah Kelas</h2> <?php // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): // membuka atau menjalankan instruksi PHP. 
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> <?php // menampilkan nilai atau konten ke halaman.
            <?php endif; // membuka atau menjalankan instruksi PHP. 

            <form id="form-tambah" method="post" action="proses_tambah.php"> <?php // membuka formulir input pengguna.
                <p> <?php // mendefinisikan elemen antarmuka halaman. 
                    <label for="nama_kelas">Nama Kelas</label><br> <?php // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="nama_kelas" name="nama_kelas" required> <?php // mendefinisikan elemen antarmuka halaman.
                </p> <?php // mendefinisikan elemen antarmuka halaman. 
                <p> <?php // mendefinisikan elemen antarmuka halaman. 
                    <label for="instruktur">Instruktur</label><br> <?php // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="instruktur" name="instruktur" required> <?php // mendefinisikan elemen antarmuka halaman.
                </p> <?php // mendefinisikan elemen antarmuka halaman. 
                <p> <?php // mendefinisikan elemen antarmuka halaman. 
                    <label for="jadwal">Jadwal</label><br> <?php // mendefinisikan elemen antarmuka halaman. 
                    <input type="text" id="jadwal" name="jadwal" placeholder="cth: Senin & Rabu, 07:00" required> <?php // mendefinisikan elemen antarmuka halaman. ?>
                </p> <?php // mendefinisikan elemen antarmuka halaman.
                <p> <?php // mendefinisikan elemen antarmuka halaman.
                    <label for="kapasitas">Kapasitas</label><br> <?php // mendefinisikan elemen antarmuka halaman. 
                    <input type="number" id="kapasitas" name="kapasitas" min="0" required> <?php // mendefinisikan elemen antarmuka halaman. 
                </p> <?php // mendefinisikan elemen antarmuka halaman. 
                <p> <?php // mendefinisikan elemen antarmuka halaman. 
                    <button type="submit">Simpan</button> <?php // mendefinisikan elemen antarmuka halaman. 
                </p> <?php // mendefinisikan elemen antarmuka halaman. 
            </form> <?php // menutup formulir input pengguna.
        </section> <?php // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; // membuka atau menjalankan instruksi PHP.
```

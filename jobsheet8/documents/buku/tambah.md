# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Memulai blok kode PHP
$page_title = "Tambah Buku"; // Mendefinisikan judul halaman untuk tampilan browser
include __DIR__ . '/../includes/header.php'; // Menyertakan file header.php yang berisi bagian atas halaman dan memulai HTML

$flash = $_SESSION['flash'] ?? null; // Mengambil pesan flash dari sesi jika ada, jika tidak null
unset($_SESSION['flash']); // Menghapus pesan flash dari sesi agar tidak muncul lagi setelah ditampilkan
?>
        <section> // Memulai bagian utama konten halaman
            <h2>Tambah Buku</h2> // Judul sub-bagian halaman

            <?php if ($flash): ?> // Memeriksa apakah ada pesan flash yang perlu ditampilkan
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan flash dengan tipe dan isi pesan
            <?php endif; ?> // Mengakhiri blok if

            <form id="form-tambah" method="post" action="proses_tambah.php"> // Memulai form HTML untuk menambah buku, dengan metode POST dan action ke proses_tambah.php
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="judul">Judul</label> // Label untuk input judul
                    <input type="text" id="judul" name="judul" required> // Input teks untuk judul buku, wajib diisi
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="pengarang">Pengarang</label> // Label untuk input pengarang
                    <input type="text" id="pengarang" name="pengarang" required> // Input teks untuk nama pengarang, wajib diisi
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="tahun">Tahun Terbit</label> // Label untuk input tahun terbit
                    <input type="number" id="tahun" name="tahun" min="1900" max="2026" required> // Input angka untuk tahun terbit, dengan batasan min dan max, wajib diisi
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="isbn">ISBN</label> // Label untuk input ISBN
                    <input type="text" id="isbn" name="isbn"> // Input teks untuk ISBN, tidak wajib diisi
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="stok">Stok</label> // Label untuk input stok
                    <input type="number" id="stok" name="stok" min="0" required> // Input angka untuk stok, dengan batasan min 0, wajib diisi
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk grup label dan input
                    <label for="kategori">Kategori</label> // Label untuk input kategori
                    <select id="kategori" name="kategori"> // Dropdown (select) untuk memilih kategori buku
                        <option value="fiksi">Fiksi</option> // Opsi kategori: Fiksi
                        <option value="non-fiksi">Non-Fiksi</option> // Opsi kategori: Non-Fiksi
                        <option value="referensi">Referensi</option> // Opsi kategori: Referensi
                    </select> // Mengakhiri dropdown
                </p> // Mengakhiri paragraf
                <p> // Memulai paragraf untuk tombol submit
                    <button type="submit">Simpan</button> // Tombol untuk mengirimkan form
                </p> // Mengakhiri paragraf
            </form> // Mengakhiri form HTML
        </section> // Mengakhiri bagian utama konten halaman
<?php include __DIR__ . '/../includes/footer.php'; ?> // Menyertakan file footer.php yang berisi bagian bawah halaman dan mengakhiri HTML
```

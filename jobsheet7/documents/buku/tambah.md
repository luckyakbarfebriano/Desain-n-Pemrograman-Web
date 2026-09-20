# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php
$page_title = "Tambah Buku"; // Mengatur judul halaman untuk keperluan tampilan header
include __DIR__ . '/../includes/header.php'; // Menyertakan file header untuk struktur atas halaman

$flash = $_SESSION['flash'] ?? null; // Mengambil data notifikasi dari sesi atau null jika tidak ada
unset($_SESSION['flash']); // Menghapus data notifikasi dari sesi setelah diambil untuk menghindari tampilan berulang
?>
        <section> // Mendefinisikan bagian utama konten untuk form penambahan buku
            <h2>Tambah Buku</h2> // Menampilkan judul form pada halaman web

            <?php if ($flash): ?> // Mengecek apakah ada pesan notifikasi yang tersimpan di sesi
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan notifikasi dengan gaya berdasarkan tipe pesan
            <?php endif; ?> // Menutup blok pengkondisian pesan notifikasi

            <form id="form-tambah" method="post" action="proses_tambah.php"> // Membuat formulir input yang mengirim data ke file proses_tambah.php menggunakan metode POST
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="judul">Judul</label> // Memberikan label teks untuk kolom input judul
                    <input type="text" id="judul" name="judul" required> // Kolom input teks untuk judul buku yang wajib diisi
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="pengarang">Pengarang</label> // Memberikan label teks untuk kolom input pengarang
                    <input type="text" id="pengarang" name="pengarang" required> // Kolom input teks untuk nama pengarang yang wajib diisi
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="tahun">Tahun Terbit</label> // Memberikan label teks untuk kolom input tahun terbit
                    <input type="number" id="tahun" name="tahun" min="1900" max="2026" required> // Kolom input angka untuk tahun dengan batasan 1900-2026 yang wajib diisi
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="isbn">ISBN</label> // Memberikan label teks untuk kolom input nomor ISBN
                    <input type="text" id="isbn" name="isbn"> // Kolom input teks untuk nomor ISBN yang bersifat opsional
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="stok">Stok</label> // Memberikan label teks untuk kolom input jumlah stok
                    <input type="number" id="stok" name="stok" min="0" required> // Kolom input angka untuk jumlah stok dengan nilai minimum 0 yang wajib diisi
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan elemen input
                    <label for="kategori">Kategori</label> // Memberikan label teks untuk pilihan kategori
                    <select id="kategori" name="kategori"> // Membuat menu dropdown untuk memilih kategori buku
                        <option value="fiksi">Fiksi</option> // Opsi pilihan untuk buku kategori fiksi
                        <option value="non-fiksi">Non-Fiksi</option> // Opsi pilihan untuk buku kategori non-fiksi
                        <option value="referensi">Referensi</option> // Opsi pilihan untuk buku kategori referensi
                    </select> // Menutup elemen menu dropdown
                </p> // Menutup paragraf pengelompokan
                <p> // Membuat baris paragraf untuk pengelompokan tombol aksi
                    <button type="submit">Simpan</button> // Tombol untuk mengirimkan data formulir ke server
                </p> // Menutup paragraf pengelompokan
            </form> // Menutup elemen formulir
        </section> // Menutup bagian utama konten
<?php include __DIR__ . '/../includes/footer.php'; // Menyertakan file footer untuk struktur bawah halaman ?>

```

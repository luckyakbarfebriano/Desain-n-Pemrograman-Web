# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Memulai blok PHP
$page_title = "Daftar Buku"; // Mendefinisikan judul halaman
include __DIR__ . '/../includes/header.php'; // Menyertakan file header.php untuk bagian atas halaman
require __DIR__ . '/../includes/koneksi.php'; // Membutuhkan file koneksi.php untuk menghubungkan ke database

$flash = $_SESSION['flash'] ?? null; // Mengambil pesan flash dari sesi, jika ada, atau null jika tidak
unset($_SESSION['flash']); // Menghapus pesan flash dari sesi setelah diambil

$daftarBuku = $pdo->query("SELECT * FROM buku ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); // Mengambil semua data buku dari tabel 'buku', diurutkan berdasarkan ID secara menurun, dan menyimpannya sebagai array asosiatif
?> // Mengakhiri blok PHP dan beralih ke HTML
        <section> // Memulai bagian (section) untuk konten utama halaman
            <h2>Daftar Buku</h2> // Judul utama untuk daftar buku

            <?php if ($flash): ?> // Memeriksa apakah ada pesan flash untuk ditampilkan
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan flash dengan kelas dinamis berdasarkan tipe dan isi pesan
            <?php endif; ?> // Mengakhiri kondisi if

            <div class="search-box"> // Wadah untuk kotak pencarian
                <label for="search-input">Cari Judul Buku</label> // Label untuk input pencarian
                <input type="text" id="search-input" placeholder="Ketik judul buku..."> // Input teks untuk mencari judul buku
            </div> // Mengakhiri wadah search-box

            <div class="table-responsive"> // Wadah untuk membuat tabel responsif
            <table> // Memulai tabel untuk menampilkan daftar buku
                <thead> // Bagian kepala tabel
                    <tr> // Baris untuk header tabel
                        <th>Judul</th> // Header kolom untuk Judul
                        <th>Pengarang</th> // Header kolom untuk Pengarang
                        <th>Tahun</th> // Header kolom untuk Tahun
                        <th>Stok</th> // Header kolom untuk Stok
                        <th>Aksi</th> // Header kolom untuk Aksi (Edit/Hapus)
                    </tr> // Mengakhiri baris header tabel
                </thead> // Mengakhiri bagian kepala tabel
                <tbody> // Bagian isi tabel
                    <?php foreach ($daftarBuku as $buku): ?> // Melakukan iterasi (perulangan) untuk setiap buku dalam array $daftarBuku
                    <tr> // Baris tabel untuk setiap buku
                        <td><?php echo htmlspecialchars($buku['judul']); ?></td> // Menampilkan judul buku, di-escape untuk keamanan
                        <td><?php echo htmlspecialchars($buku['pengarang']); ?></td> // Menampilkan pengarang buku, di-escape untuk keamanan
                        <td><?php echo $buku['tahun']; ?></td> // Menampilkan tahun terbit buku
                        <td><?php echo $buku['stok']; ?></td> // Menampilkan jumlah stok buku
                        <td> // Sel untuk tombol aksi
                            <button type="button">Edit</button> // Tombol untuk mengedit data buku
                            <button type="button" class="btn-hapus">Hapus</button> // Tombol untuk menghapus data buku dengan kelas 'btn-hapus'
                        </td> // Mengakhiri sel aksi
                    </tr> // Mengakhiri baris tabel untuk buku saat ini
                    <?php endforeach; ?> // Mengakhiri perulangan foreach
                </tbody> // Mengakhiri bagian isi tabel
            </table> // Mengakhiri tabel
            </div> // Mengakhiri wadah table-responsive
        </section> // Mengakhiri bagian (section)
<?php include __DIR__ . '/../includes/footer.php'; ?> // Menyertakan file footer.php untuk bagian bawah halaman
```

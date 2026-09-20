# LAPORAN JOBSHEET 77

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php
$page_title = "Daftar Buku"; // Menetapkan judul halaman untuk digunakan pada header
include __DIR__ . '/../includes/header.php'; // Memuat file header eksternal ke dalam halaman

$flash = $_SESSION['flash'] ?? null; // Mengambil pesan flash dari session jika ada
unset($_SESSION['flash']); // Menghapus pesan flash dari session agar tidak muncul berulang
$daftarBuku = $_SESSION['buku'] ?? [; // Mengambil data buku dari session, default ke array kosong
?>
        <section> // Membuka elemen section untuk konten utama
            <h2>Daftar Buku</h2> // Menampilkan judul bagian

            <?php if ($flash): ?> // Mengecek apakah ada pesan flash yang perlu ditampilkan
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan flash dengan gaya berdasarkan tipenya
            <?php endif; ?> // Menutup blok pengkondisian pesan flash

            <div class="search-box"> // Membuka kontainer untuk kolom pencarian
                <label for="search-input">Cari Judul Buku</label> // Memberikan label untuk input pencarian
                <input type="text" id="search-input" placeholder="Ketik judul buku..."> // Input field untuk mengetik kata kunci pencarian
            </div> // Menutup kontainer pencarian

            <div class="table-responsive"> // Membuka kontainer agar tabel bisa merespons ukuran layar
            <table> // Membuka elemen tabel
                <thead> // Membuka bagian kepala tabel
                    <tr> // Membuka baris pertama tabel
                        <th>Judul</th> // Header kolom judul
                        <th>Pengarang</th> // Header kolom pengarang
                        <th>Tahun</th> // Header kolom tahun
                        <th>Stok</th> // Header kolom stok
                        <th>Aksi</th> // Header kolom untuk aksi edit/hapus
                    </tr> // Menutup baris kepala tabel
                </thead> // Menutup bagian kepala tabel
                <tbody> // Membuka bagian isi tabel
                    <?php foreach ($daftarBuku as $buku): ?> // Melakukan iterasi terhadap data buku
                    <tr> // Membuka baris baru untuk setiap buku
                        <td><?php echo htmlspecialchars($buku['judul']); ?></td> // Menampilkan judul buku dengan pengamanan HTML
                        <td><?php echo htmlspecialchars($buku['pengarang']); ?></td> // Menampilkan nama pengarang dengan pengamanan HTML
                        <td><?php echo $buku['tahun']; ?></td> // Menampilkan tahun terbit
                        <td><?php echo $buku['stok']; ?></td> // Menampilkan jumlah stok buku
                        <td> // Membuka sel untuk tombol aksi
                            <button type="button">Edit</button> // Tombol untuk mengedit data
                            <button type="button" class="btn-hapus">Hapus</button> // Tombol untuk menghapus data
                        </td> // Menutup sel aksi
                    </tr> // Menutup baris buku
                    <?php endforeach; ?> // Mengakhiri perulangan data buku
                </tbody> // Menutup bagian isi tabel
            </table> // Menutup elemen tabel
            </div> // Menutup kontainer responsif
        </section> // Menutup elemen section
<?php include __DIR__ . '/../includes/footer.php'; ?> // Memuat file footer eksternal ke dalam halaman
```

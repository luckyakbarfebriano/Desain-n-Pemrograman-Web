# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Menandai awal blok kode PHP
$page_title = "Beranda"; // Mendefinisikan variabel judul halaman untuk digunakan pada tag title di header
include __DIR__ . '/includes/header.php'; // Menyisipkan berkas header.php yang memuat struktur awal dokumen HTML dan navigasi
require __DIR__ . '/includes/koneksi.php'; // Memuat file koneksi database menggunakan PDO (wajib ada untuk eksekusi query)

$totalBuku = $pdo->query("SELECT COUNT(*) FROM buku")->fetchColumn(); // Menjalankan query SQL untuk menghitung jumlah total data pada tabel buku
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn(); // Menjalankan query SQL untuk menghitung jumlah total data pada tabel anggota
?> // Menandai akhir blok kode PHP dan beralih ke kode HTML
        <section> // Membuka elemen bagian (section) untuk konten sambutan
            <h2>Selamat Datang di SIMPUS-kecil</h2> // Menampilkan heading judul utama ucapan selamat datang
            <p>SIMPUS-kecil adalah aplikasi perpustakaan sederhana yang dirancang untuk memudahkan pengelolaan data buku dan anggota perpustakaan.</p> // Menampilkan paragraf deskripsi singkat tentang aplikasi
        </section> // Menutup elemen bagian konten sambutan

        <section> // Membuka elemen bagian untuk menampilkan ringkasan data statistik
            <h2>Ringkasan</h2> // Menampilkan heading judul bagian ringkasan
            <article> // Membuka wadah kartu informasi untuk kategori total buku
                <h3>Total Buku</h3> // Menampilkan label judul kategori total buku
                <p><?php echo $totalBuku; ?></p> // Menampilkan data hasil perhitungan total buku dari database
            </article> // Menutup wadah kartu informasi total buku
            <article> // Membuka wadah kartu informasi untuk kategori total anggota
                <h3>Total Anggota</h3> // Menampilkan label judul kategori total anggota
                <p><?php echo $totalAnggota; ?></p> // Menampilkan data hasil perhitungan total anggota dari database
            </article> // Menutup wadah kartu informasi total anggota
            <article> // Membuka wadah kartu informasi untuk kategori buku yang sedang dipinjam
                <h3>Sedang Dipinjam</h3> // Menampilkan label judul kategori buku yang sedang dipinjam
                <p>3</p> // Menampilkan angka statis jumlah buku yang sedang dipinjam
            </article> // Menutup wadah kartu informasi buku yang sedang dipinjam
        </section> // Menutup elemen bagian ringkasan data
<?php include __DIR__ . '/includes/footer.php'; // Menyisipkan file footer.php untuk memuat penutup halaman dan struktur akhir HTML
```

# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php
$page_title = "Beranda"; // Menetapkan judul halaman untuk digunakan pada header
include __DIR__ . '/includes/header.php'; // Memasukkan file header agar tampilan konsisten

$totalBuku = count($_SESSION['buku'] ?? []); // Menghitung jumlah data buku dari sesi
$totalAnggota = count($_SESSION['anggota'] ?? []); // Menghitung jumlah data anggota dari sesi
?>
        <section> // Memulai bagian konten utama
            <h2>Selamat Datang di SIMPUS-kecil</h2> // Menampilkan judul selamat datang
            <p>SIMPUS-kecil adalah aplikasi perpustakaan sederhana yang dirancang untuk memudahkan pengelolaan data buku dan anggota perpustakaan.</p> // Penjelasan singkat aplikasi
        </section> // Menutup bagian konten utama

        <section> // Memulai bagian ringkasan statistik
            <h2>Ringkasan</h2> // Menampilkan judul ringkasan
            <article> // Elemen kontainer untuk statistik
                <h3>Total Buku</h3> // Menampilkan label untuk jumlah buku
                <p><?php echo $totalBuku; ?></p> // Menampilkan hasil perhitungan total buku
            </article> // Menutup elemen statistik buku
            <article> // Elemen kontainer untuk statistik anggota
                <h3>Total Anggota</h3> // Menampilkan label untuk jumlah anggota
                <p><?php echo $totalAnggota; ?></p> // Menampilkan hasil perhitungan total anggota
            </article> // Menutup elemen statistik anggota
            <article> // Elemen kontainer untuk statistik pinjaman
                <h3>Sedang Dipinjam</h3> // Menampilkan label untuk jumlah buku dipinjam
                <p>3</p> // Menampilkan nilai statis jumlah buku yang dipinjam
            </article> // Menutup elemen statistik pinjaman
        </section> // Menutup bagian ringkasan
<?php include __DIR__ . '/includes/footer.php'; ?> // Memasukkan file footer untuk menutup halaman
```

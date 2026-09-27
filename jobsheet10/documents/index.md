# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
$page_title = "Beranda"; // menetapkan nilai ke variabel.
include __DIR__ . '/includes/header.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$totalKelas = $pdo->query("SELECT COUNT(*) FROM kelas")->fetchColumn(); // menetapkan nilai ke variabel.
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn(); // menetapkan nilai ke variabel. // menjalankan instruksi pada alur program.
        <section><?php // mendefinisikan elemen antarmuka halaman.
            <h2>Selamat Datang di WE GO GYM</h2><?php // mendefinisikan elemen antarmuka halaman.
            <p>WE GO GYM adalah aplikasi manajemen gym sederhana yang dirancang untuk memudahkan pengelolaan kelas latihan dan data anggota member.</p><?php // mendefinisikan elemen antarmuka halaman.  
        </section><?php // mendefinisikan elemen antarmuka halaman.  

        <section><?php // mendefinisikan elemen antarmuka halaman.  
            <h2>Ringkasan</h2><?php // mendefinisikan elemen antarmuka halaman.  
            <article><?php // mendefinisikan elemen antarmuka halaman.  
                <h3>Total Kelas</h3><?php // mendefinisikan elemen antarmuka halaman.  
                <p><?php echo $totalKelas;  </p><?php // menampilkan nilai atau konten ke halaman.  
            </article><?php // mendefinisikan elemen antarmuka halaman.  
            <article><?php // mendefinisikan elemen antarmuka halaman.  
                <h3>Total Anggota</h3><?php // mendefinisikan elemen antarmuka halaman.  
                <p><?php echo $totalAnggota;  </p><?php // menampilkan nilai atau konten ke halaman.  
            </article><?php // mendefinisikan elemen antarmuka halaman.  
            <article><?php // mendefinisikan elemen antarmuka halaman.
                <h3>Kelas Hari Ini</h3><?php // mendefinisikan elemen antarmuka halaman.
                <p>4</p><?php // mendefinisikan elemen antarmuka halaman.
            </article><?php // mendefinisikan elemen antarmuka halaman.
        </section><?php // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/includes/footer.php'; // membuka atau menjalankan instruksi PHP.
```

# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Pembuka tag PHP
$page_title = "Daftar Anggota"; // Mengatur judul halaman untuk ditampilkan di browser
include __DIR__ . '/../includes/header.php'; // Menyertakan file header.php dari direktori induk, berisi HTML awal dan bagian umum lainnya

$flash = $_SESSION['flash'] ?? null; // Mengambil pesan flash dari session jika ada, atau null jika tidak ada
unset($_SESSION['flash']); // Menghapus pesan flash dari session setelah diambil untuk ditampilkan sekali saja
$daftarAnggota = $_SESSION['anggota'] ?? []; // Mengambil daftar anggota dari session, atau array kosong jika belum ada
?>
        <section> // Memulai elemen HTML section untuk mengelompokkan konten
            <h2>Daftar Anggota</h2> // Menampilkan judul utama bagian ini

            <?php if ($flash): // Memulai blok PHP if, mengecek apakah ada pesan flash yang akan ditampilkan ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan flash dalam paragraf dengan kelas CSS dinamis
            <?php endif; // Mengakhiri blok PHP if ?>

            <div class="search-box"> // Memulai elemen div untuk kotak pencarian
                <label for="search-input">Cari Nama Anggota</label> // Label untuk input pencarian
                <input type="text" id="search-input" placeholder="Ketik nama anggota..."> // Input teks untuk mencari nama anggota
            </div> // Mengakhiri elemen div kotak pencarian

            <div class="table-responsive"> // Memulai elemen div untuk membuat tabel responsif
            <table> // Memulai elemen HTML table untuk menampilkan data dalam bentuk tabel
                <thead> // Memulai bagian header tabel
                    <tr> // Memulai baris tabel untuk header
                        <th>No Anggota</th> // Kolom header untuk Nomor Anggota
                        <th>Nama</th> // Kolom header untuk Nama
                        <th>Alamat</th> // Kolom header untuk Alamat
                        <th>No HP</th> // Kolom header untuk Nomor HP
                        <th>Aksi</th> // Kolom header untuk Aksi (Edit/Hapus)
                    </tr> // Mengakhiri baris header tabel
                </thead> // Mengakhiri bagian header tabel
                <tbody> // Memulai bagian body tabel
                    <?php foreach ($daftarAnggota as $anggota): // Memulai loop PHP untuk setiap anggota dalam array daftarAnggota ?>
                    <tr> // Memulai baris tabel untuk setiap anggota
                        <td><?php echo htmlspecialchars($anggota['no_anggota'); ?></td> // Menampilkan nomor anggota, di-escape untuk keamanan
                        <td><?php echo htmlspecialchars($anggota['nama']); ?></td> // Menampilkan nama anggota, di-escape untuk keamanan
                        <td><?php echo htmlspecialchars($anggota['alamat']); ?></td> // Menampilkan alamat anggota, di-escape untuk keamanan
                        <td><?php echo htmlspecialchars($anggota['no_hp']); ?></td> // Menampilkan nomor HP anggota, di-escape untuk keamanan
                        <td> // Memulai sel tabel untuk tombol aksi
                            <button type="button">Edit</button> // Tombol untuk mengedit data anggota
                            <button type="button" class="btn-hapus">Hapus</button> // Tombol untuk menghapus data anggota dengan kelas CSS
                        </td> // Mengakhiri sel tabel untuk tombol aksi
                    </tr> // Mengakhiri baris tabel untuk setiap anggota
                    <?php endforeach; // Mengakhiri loop PHP ?>
                </tbody> // Mengakhiri bagian body tabel
            </table> // Mengakhiri elemen HTML table
            </div> // Mengakhiri elemen div tabel responsif
        </section> // Mengakhiri elemen HTML section
<?php include __DIR__ . '/../includes/footer.php'; // Menyertakan file footer.php dari direktori induk, berisi HTML penutup dan skrip akhir ?>
```

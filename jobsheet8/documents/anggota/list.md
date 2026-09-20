# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Membuka blok kode PHP.
$page_title = "Daftar Anggota"; // Menyimpan judul halaman daftar anggota.
include __DIR__ . '/../includes/header.php'; // Memuat bagian header halaman.
require __DIR__ . '/../includes/koneksi.php'; // Memuat koneksi database yang diperlukan halaman.

$flash = $_SESSION['flash'] ?? null; // Mengambil pesan notifikasi dari session atau menggunakan null jika tidak ada.
unset($_SESSION['flash']); // Menghapus pesan notifikasi dari session setelah diambil.

$daftarAnggota = $pdo->query("SELECT * FROM anggota ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC); // Mengambil semua data anggota dan mengurutkannya dari id terbesar.
?> // Menutup blok kode PHP sementara.
        <section> // Membuka bagian konten daftar anggota.
            <h2>Daftar Anggota</h2> // Menampilkan judul daftar anggota.

            <?php if ($flash): ?> // Memeriksa apakah terdapat pesan notifikasi.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan notifikasi sesuai tipe dan isinya.
            <?php endif; ?> // Mengakhiri kondisi pesan notifikasi.

            <div class="search-box"> // Membuka wadah kolom pencarian anggota.
                <label for="search-input">Cari Nama Anggota</label> // Menampilkan label untuk kolom pencarian.
                <input type="text" id="search-input" placeholder="Ketik nama anggota..."> // Membuat input untuk mengetik nama anggota yang ingin dicari.
            </div> // Menutup wadah kolom pencarian.

            <div class="table-responsive"> // Membuka wadah tabel yang dapat digulir secara horizontal pada layar kecil.
            <table> // Membuka tabel daftar anggota.
                <thead> // Membuka bagian kepala tabel.
                    <tr> // Membuka baris judul tabel.
                        <th>No Anggota</th> // Menampilkan judul kolom nomor anggota.
                        <th>Nama</th> // Menampilkan judul kolom nama.
                        <th>Alamat</th> // Menampilkan judul kolom alamat.
                        <th>No HP</th> // Menampilkan judul kolom nomor telepon.
                        <th>Aksi</th> // Menampilkan judul kolom tombol tindakan.
                    </tr> // Menutup baris judul tabel.
                </thead> // Menutup bagian kepala tabel.
                <tbody> // Membuka bagian isi tabel.
                    <?php foreach ($daftarAnggota as $anggota): ?> // Mengulang setiap data anggota untuk ditampilkan sebagai baris.
                    <tr> // Membuka baris data anggota.
                        <td><?php echo htmlspecialchars($anggota['no_anggota']); ?></td> // Menampilkan nomor anggota dengan perlindungan terhadap karakter HTML.
                        <td><?php echo htmlspecialchars($anggota['nama']); ?></td> // Menampilkan nama anggota dengan aman.
                        <td><?php echo htmlspecialchars($anggota['alamat']); ?></td> // Menampilkan alamat anggota dengan aman.
                        <td><?php echo htmlspecialchars($anggota['no_hp']); ?></td> // Menampilkan nomor telepon anggota dengan aman.
                        <td> // Membuka sel untuk tombol aksi.
                            <button type="button">Edit</button> // Membuat tombol untuk tindakan edit anggota.
                            <button type="button" class="btn-hapus">Hapus</button> // Membuat tombol untuk tindakan hapus anggota.
                        </td> // Menutup sel tombol aksi.
                    </tr> // Menutup baris data anggota.
                    <?php endforeach; ?> // Mengakhiri perulangan seluruh data anggota.
                </tbody> // Menutup bagian isi tabel.
            </table> // Menutup tabel daftar anggota.
            </div> // Menutup wadah tabel responsif.
        </section> // Menutup bagian konten daftar anggota.
<?php include __DIR__ . '/../includes/footer.php'; ?> // Memuat bagian footer halaman.

```

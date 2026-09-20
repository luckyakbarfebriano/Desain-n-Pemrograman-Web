# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Membuka blok kode PHP.
$page_title = "Tambah Anggota"; // Menyimpan judul halaman untuk digunakan oleh template.
include __DIR__ . '/../includes/header.php'; // Memuat bagian header dari folder includes.
 // Memberi jarak antarbaris agar kode lebih mudah dibaca.
$flash = $_SESSION['flash'] ?? null; // Mengambil pesan notifikasi dari session atau memberi nilai null jika tidak ada.
unset($_SESSION['flash']); // Menghapus pesan notifikasi dari session setelah diambil.
?> // Menutup blok kode PHP sementara.
        <section> // Membuka bagian konten untuk form tambah anggota.
            <h2>Tambah Anggota</h2> // Menampilkan judul halaman tambah anggota.
 // Memberi jarak antar elemen agar kode lebih mudah dibaca.
            <?php if ($flash): ?> // Memeriksa apakah terdapat pesan notifikasi.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan pesan notifikasi beserta jenis tampilannya.
            <?php endif; ?> // Mengakhiri kondisi pemeriksaan pesan notifikasi.
 // Memberi jarak antar elemen agar kode lebih mudah dibaca.
            <form id="form-tambah" method="post" action="proses_tambah.php"> // Membuka form dan mengirim data dengan metode POST ke proses_tambah.php.
                <p> // Membuka paragraf pembungkus input nama.
                    <label for="nama">Nama</label> // Menampilkan label untuk kolom nama.
                    <input type="text" id="nama" name="nama" required> // Membuat kolom teks nama yang wajib diisi.
                </p> // Menutup paragraf pembungkus input nama.
                <p> // Membuka paragraf pembungkus nomor anggota.
                    <label for="no_anggota">No Anggota</label> // Menampilkan label untuk kolom nomor anggota.
                    <input type="text" id="no_anggota" name="no_anggota" required> // Membuat kolom nomor anggota yang wajib diisi.
                </p> // Menutup paragraf pembungkus nomor anggota.
                <p> // Membuka paragraf pembungkus alamat.
                    <label for="alamat">Alamat</label> // Menampilkan label untuk kolom alamat.
                    <input type="text" id="alamat" name="alamat" required> // Membuat kolom alamat yang wajib diisi.
                </p> // Menutup paragraf pembungkus alamat.
                <p> // Membuka paragraf pembungkus nomor telepon.
                    <label for="no_hp">No HP</label> // Menampilkan label untuk kolom nomor telepon.
                    <input type="tel" id="no_hp" name="no_hp" required> // Membuat kolom nomor telepon yang wajib diisi.
                </p> // Menutup paragraf pembungkus nomor telepon.
                <p> // Membuka paragraf pembungkus tombol simpan.
                    <button type="submit">Simpan</button> // Membuat tombol untuk mengirim data form.
                </p> // Menutup paragraf pembungkus tombol simpan.
            </form> // Menutup form tambah anggota.
        </section> // Menutup bagian konten tambah anggota.
<?php include __DIR__ . '/../includes/footer.php'; ?> // Memuat bagian footer dari folder includes.
```

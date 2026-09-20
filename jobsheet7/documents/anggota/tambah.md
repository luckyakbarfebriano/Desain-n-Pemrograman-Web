# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```php
<?php // Tag pembuka skrip PHP
$page_title = "Tambah Anggota"; // Menentukan judul halaman untuk ditampilkan pada bagian header
include __DIR__ . '/../includes/header.php'; // Menyisipkan file template header dari direktori includes
$flash = $_SESSION['flash'] ?? null; // Mengambil notifikasi flash dari session jika ada, atau bernilai null jika tidak ada
unset($_SESSION['flash']); // Menghapus flash message dari session agar hanya tampil satu kali
?> // Tag penutup skrip PHP
        <section> // Tag pembuka elemen section sebagai pembungkus konten utama
            <h2>Tambah Anggota</h2> // Menampilkan judul heading formulir tambah anggota
            <?php if ($flash): ?> // Memeriksa apakah ada pesan flash yang tersimpan
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // Menampilkan teks pesan notifikasi dengan kelas CSS sesuai tipe pesan
            <?php endif; ?> // Mengakhiri blok pengecekan kondisi flash message
            <form id="form-tambah" method="post" action="proses_tambah.php"> // Form pengiriman data dengan metode POST ke file proses_tambah.php
                <p> // Pembungkus paragraf untuk kolom input nama
                    <label for="nama">Nama</label> // Label teks penunjuk input nama
                    <input type="text" id="nama" name="nama" required> // Bidang input teks untuk mengisi nama anggota (wajib diisi)
                </p> // Penutup pembungkus kolom input nama
                <p> // Pembungkus paragraf untuk kolom input nomor anggota
                    <label for="no_anggota">No Anggota</label> // Label teks penunjuk input nomor anggota
                    <input type="text" id="no_anggota" name="no_anggota" required> // Bidang input teks untuk mengisi nomor anggota (wajib diisi)
                </p> // Penutup pembungkus kolom input nomor anggota
                <p> // Pembungkus paragraf untuk kolom input alamat
                    <label for="alamat">Alamat</label> // Label teks penunjuk input alamat
                    <input type="text" id="alamat" name="alamat" required> // Bidang input teks untuk mengisi alamat anggota (wajib diisi)
                </p> // Penutup pembungkus kolom input alamat
                <p> // Pembungkus paragraf untuk kolom input nomor handphone
                    <label for="no_hp">No HP</label> // Label teks penunjuk input nomor HP
                    <input type="tel" id="no_hp" name="no_hp" required> // Bidang input format telepon untuk mengisi no HP (wajib diisi)
                </p> // Penutup pembungkus kolom input nomor handphone
                <p> // Pembungkus paragraf untuk tombol submit formulir
                    <button type="submit">Simpan</button> // Tombol bertipe submit untuk mengirimkan seluruh data form
                </p> // Penutup pembungkus tombol submit formulir
            </form> // Penutup elemen form penambahan anggota
        </section> // Penutup elemen konten utama section
<?php include __DIR__ . '/../includes/footer.php'; ?> // Menyisipkan file template footer di bagian akhir halaman
```

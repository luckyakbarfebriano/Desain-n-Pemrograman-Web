# LAPORAN JOBSHEET 4

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html> <!-- Mendefinisikan tipe dokumen sebagai HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dan menentukan bahasa utama halaman adalah Indonesia. -->
  <head> <!-- Berisi metadata tentang halaman yang tidak ditampilkan langsung di browser. -->
    <meta charset="UTF-8" /> <!-- Menentukan pengkodean karakter untuk dokumen sebagai UTF-8, mendukung berbagai karakter. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur tampilan halaman agar responsif di berbagai perangkat. -->
    <title>SIMPUS-kecil || Daftar Anggota</title> <!-- Mengatur judul halaman yang muncul di tab browser. -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan dokumen HTML dengan file CSS eksternal untuk styling. -->
  </head> <!-- Menutup bagian head dokumen. -->
  <body> <!-- Berisi semua konten yang terlihat oleh pengguna di browser. -->
    <header> <!-- Merepresentasikan bagian pengantar atau navigasi untuk seluruh halaman atau sebuah bagian. -->
      <h1>SIMPUS-kecil</h1> <!-- Menampilkan judul utama aplikasi sebagai heading level 1. -->
      <input type="checkbox" id="nav-toggle" class="nav-toggle"> <!-- Membuat input checkbox tersembunyi yang berfungsi sebagai tombol toggle untuk navigasi. -->
      <label for="nav-toggle" class="nav-toggle-label">&#9776</label> <!-- Label yang dikaitkan dengan checkbox, berfungsi sebagai ikon menu (hamburger). -->
      <nav> <!-- Merepresentasikan bagian navigasi pada halaman. -->
        <ul> <!-- Memulai daftar tidak berurutan untuk item-item navigasi. -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar dan tautan ke halaman utama (Home). -->
          <li><a href="../buku/list.html">Daftar Buku</a></li> <!-- Item daftar dan tautan ke halaman daftar buku. -->
          <li><a href="list.html">Daftar Anggota</a></li> <!-- Item daftar dan tautan ke halaman daftar anggota (halaman saat ini). -->
          <li><a href="../buku/tambah.html">Tambah Buku</a></li> <!-- Item daftar dan tautan ke halaman tambah buku. -->
        </ul> <!-- Menutup daftar tidak berurutan. -->
      </nav> <!-- Menutup bagian navigasi. -->
    </header> <!-- Menutup bagian header. -->

    <main> <!-- Merepresentasikan konten utama yang unik untuk dokumen ini. -->
      <section> <!-- Merepresentasikan bagian generik dari dokumen, seringkali dengan judul tersendiri. -->
        <h2>Daftar Anggota</h2> <!-- Menampilkan judul bagian sebagai heading level 2. -->
        <table> <!-- Memulai tabel untuk menampilkan data anggota. -->
          <thead> <!-- Merepresentasikan bagian header dari tabel. -->
            <tr> <!-- Memulai baris tabel untuk judul kolom. -->
              <th>No Aggota</th> <!-- Sel header tabel untuk nomor anggota. -->
              <th>Nama</th> <!-- Sel header tabel untuk nama anggota. -->
              <th>Alamat</th> <!-- Sel header tabel untuk alamat anggota. -->
              <th>No hp</th> <!-- Sel header tabel untuk nomor HP anggota. -->
              <th>Aksi</th> <!-- Sel header tabel untuk kolom aksi (Edit/Hapus). -->
            </tr> <!-- Menutup baris tabel header. -->
          </thead> <!-- Menutup bagian header tabel. -->
          <tbody> <!-- Merepresentasikan bagian body dari tabel, berisi data aktual. -->
            <tr> <!-- Memulai baris tabel untuk data anggota pertama. -->
              <td>AOO1</td> <!-- Sel data tabel berisi nomor anggota pertama. -->
              <td>Siti Aminah</td> <!-- Sel data tabel berisi nama anggota pertama. -->
              <td>Malang</td> <!-- Sel data tabel berisi alamat anggota pertama. -->
              <td>08123*****</td> <!-- Sel data tabel berisi nomor HP anggota pertama. -->
              <td> <!-- Sel data tabel berisi tombol aksi untuk anggota pertama. -->
                <button type="button">Edit</button> <!-- Tombol untuk mengedit data anggota. -->
                <button type="button">Hapus</button> <!-- Tombol untuk menghapus data anggota. -->
              </td> <!-- Menutup sel data tabel aksi. -->
            </tr> <!-- Menutup baris tabel data anggota pertama. -->
            <tr> <!-- Memulai baris tabel untuk data anggota kedua. -->
              <td>AOO2</td> <!-- Sel data tabel berisi nomor anggota kedua. -->
              <td>Budi Santoso</td> <!-- Sel data tabel berisi nama anggota kedua. -->
              <td>Batu</td> <!-- Sel data tabel berisi alamat anggota kedua. -->
              <td>08123*****</td> <!-- Sel data tabel berisi nomor HP anggota kedua. -->
              <td> <!-- Sel data tabel berisi tombol aksi untuk anggota kedua. -->
                <button type="button">Edit</button> <!-- Tombol untuk mengedit data anggota. -->
                <button type="button">Hapus</button> <!-- Tombol untuk menghapus data anggota. -->
              </td> <!-- Menutup sel data tabel aksi. -->
            </tr> <!-- Menutup baris tabel data anggota kedua. -->
          </tbody> <!-- Menutup bagian body tabel. -->
        </table> <!-- Menutup tabel. -->
      </section> <!-- Menutup bagian section. -->
    </main> <!-- Menutup bagian main. -->

    <footer> <!-- Merepresentasikan bagian footer atau catatan kaki dokumen. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 1.</p> <!-- Menampilkan informasi hak cipta di footer. -->
    </footer> <!-- Menutup bagian footer. -->
  </body> <!-- Menutup bagian body dokumen. -->
</html> <!-- Menutup dokumen HTML. -->

```

# LAPORAN JOBSHEET 5

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Mendefinisikan dokumen sebagai HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dengan atribut bahasa Indonesia. -->
  <head> <!-- Bagian kepala dokumen, berisi metadata tentang halaman. -->
    <meta charset="UTF-8" /> <!-- Menentukan set karakter UTF-8 untuk mendukung berbagai bahasa. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur tampilan halaman agar responsif di berbagai perangkat. -->
    <title>SIMPUS-kecil || HOME</title> <!-- Menetapkan judul halaman yang muncul di tab browser. -->
    <link rel="stylesheet" href="assets/css/style.css" /> <!-- Menghubungkan file CSS eksternal untuk styling halaman. -->
  </head> <!-- Menutup bagian kepala dokumen. -->
  <body> <!-- Bagian tubuh dokumen, berisi semua konten yang terlihat oleh pengguna. -->
    <header> <!-- Elemen semantik untuk bagian atas (header) halaman. -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama aplikasi. -->
      <button <!-- Tombol untuk mengaktifkan/menonaktifkan menu navigasi. -->
        type="button" <!-- Menentukan tipe tombol sebagai tombol biasa. -->
        id="nav-toggle-btn" <!-- Memberikan ID unik untuk identifikasi tombol ini. -->
        class="nav-toggle-label" <!-- Menetapkan kelas CSS untuk styling tombol. -->
        aria-label="Menu" <!-- Memberikan label aksesibilitas untuk pembaca layar. -->
      > <!-- Menutup tag pembuka tombol. -->
        &#9776; <!-- Menampilkan simbol hamburger (tiga garis) sebagai ikon menu. -->
      </button> <!-- Menutup tag tombol. -->
      <nav> <!-- Elemen semantik untuk navigasi utama halaman. -->
        <ul> <!-- Memulai daftar tidak berurut untuk item navigasi. -->
          <li><a href="index.html">Home</a></li> <!-- Item daftar: tautan ke halaman utama. -->
          <li><a href="buku/list.html">Daftar Buku</a></li> <!-- Item daftar: tautan ke halaman daftar buku. -->
          <li><a href="buku/tambah.html">Tambah Buku</a></li> <!-- Item daftar: tautan ke halaman tambah buku. -->
          <li><a href="anggota/list.html">Daftar Anggota</a></li> <!-- Item daftar: tautan ke halaman daftar anggota. -->
        </ul> <!-- Menutup daftar tidak berurut. -->
      </nav> <!-- Menutup bagian navigasi. -->
    </header> <!-- Menutup bagian header. -->
    <main> <!-- Elemen semantik untuk konten utama halaman. -->
      <section> <!-- Bagian atau seksi konten. -->
        <h2>Selamat Datang di SIMPUS-kecil</h2> <!-- Sub-judul untuk bagian selamat datang. -->
        <p> <!-- Memulai paragraf teks. -->
          SIMPUS-kecil adalah aplikasi perpustakaan sederhana yang dirancang <!-- Teks isi paragraf. -->
          untuk memudahkan pengelolaan data buku dan anggota perpustakaan. <!-- Teks isi paragraf yang melanjutkan baris sebelumnya. -->
        </p> <!-- Menutup paragraf teks. -->
      </section> <!-- Menutup bagian selamat datang. -->
      <section> <!-- Bagian atau seksi konten lainnya. -->
        <h2>Ringkasan</h2> <!-- Sub-judul untuk bagian ringkasan. -->
        <article> <!-- Elemen semantik untuk konten mandiri (misal: kartu informasi). -->
          <h3>Total Buku</h3> <!-- Judul untuk ringkasan total buku. -->
          <p>8</p> <!-- Menampilkan jumlah total buku. -->
        </article> <!-- Menutup artikel total buku. -->
        <article> <!-- Elemen semantik untuk konten mandiri lainnya. -->
          <h3>Total Anggota</h3> <!-- Judul untuk ringkasan total anggota. -->
          <p>2</p> <!-- Menampilkan jumlah total anggota. -->
        </article> <!-- Menutup artikel total anggota. -->
        <article> <!-- Elemen semantik untuk konten mandiri lainnya. -->
          <h3>Sedang dipinjam</h3> <!-- Judul untuk ringkasan buku yang sedang dipinjam. -->
          <p>3</p> <!-- Menampilkan jumlah buku yang sedang dipinjam. -->
        </article> <!-- Menutup artikel buku yang sedang dipinjam. -->
      </section> <!-- Menutup bagian ringkasan. -->
    </main> <!-- Menutup bagian konten utama. -->
    <footer> <!-- Elemen semantik untuk bagian bawah (footer) halaman. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 5.</p> <!-- Menampilkan informasi hak cipta dan nama aplikasi. -->
    </footer> <!-- Menutup bagian footer. -->
    <script src="assets/js/app.js"></script> <!-- Menghubungkan file JavaScript eksternal untuk fungsionalitas. -->
  </body> <!-- Menutup bagian tubuh dokumen. -->
</html> <!-- Menutup dokumen HTML. -->
```

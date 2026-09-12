# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Deklarasi tipe dokumen HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dan menentukan bahasa utama halaman adalah Indonesia. -->
  <head> <!-- Bagian head berisi metadata tentang dokumen yang tidak ditampilkan di halaman. -->
    <meta charset="UTF-8" /> <!-- Menentukan pengkodean karakter dokumen (UTF-8) untuk mendukung berbagai karakter. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport agar halaman responsif di berbagai perangkat. -->
    <title>SIMPUS-kecil || Tambah Anggota</title> <!-- Menetapkan judul halaman yang akan muncul di tab browser atau hasil pencarian. -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan dokumen HTML dengan file CSS eksternal untuk styling. -->
  </head> <!-- Mengakhiri bagian head. -->
  <body> <!-- Bagian body berisi semua konten yang terlihat oleh pengguna di halaman web. -->
    <header> <!-- Bagian header (kepala) halaman, biasanya berisi judul situs atau navigasi utama. -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama (heading 1) untuk situs SIMPUS-kecil. -->
      <button <!-- Tombol ini akan digunakan untuk mengaktifkan atau menonaktifkan navigasi di perangkat kecil. -->
        type="button" <!-- Menentukan tipe tombol sebagai tombol biasa. -->
        id="nav-toggle-btn" <!-- Memberikan ID unik untuk tombol ini agar bisa diakses oleh JavaScript. -->
        class="nav-toggle-label" <!-- Memberikan kelas CSS untuk styling tombol. -->
        aria-label="Menu" <!-- Memberikan label aksesibilitas untuk pembaca layar. -->
      > <!-- Mengakhiri tag pembuka tombol. -->
        &#9776; <!-- Menampilkan simbol hamburger (tiga garis horizontal) sebagai ikon menu. -->
      </button> <!-- Mengakhiri tag tombol. -->
      <nav> <!-- Bagian navigasi, berisi tautan-tautan penting untuk menjelajahi situs. -->
        <ul> <!-- Memulai daftar tidak berurutan (unordered list) untuk item navigasi. -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar: tautan ke halaman utama. -->
          <li><a href="../buku/list.html">Daftar Buku</a></li> <!-- Item daftar: tautan ke halaman daftar buku. -->
          <li><a href="list.html">Daftar Anggota</a></li> <!-- Item daftar: tautan ke halaman daftar anggota. -->
          <li><a href="tambah.html">Tambah Anggota</a></li> <!-- Item daftar: tautan ke halaman tambah anggota (halaman ini). -->
        </ul> <!-- Mengakhiri daftar tidak berurutan. -->
      </nav> <!-- Mengakhiri bagian navigasi. -->
    </header> <!-- Mengakhiri bagian header. -->

    <main> <!-- Bagian utama konten halaman. -->
      <section> <!-- Bagian konten yang berdiri sendiri dalam dokumen. -->
        <h2>Tambah Anggota</h2> <!-- Judul kedua (heading 2) untuk bagian ini, menunjukkan fungsinya. -->
        <form id="form-tambah"> <!-- Memulai formulir untuk menambahkan anggota, dengan ID "form-tambah". -->
          <p> <!-- Memulai paragraf untuk mengelompokkan label dan input nama. -->
            <label for="nama">Nama:</label> <!-- Label teks untuk input nama, terkait dengan input ber-ID "nama". -->
            <input type="text" id="nama" name="nama" required /> <!-- Input teks untuk memasukkan nama, wajib diisi. -->
          </p> <!-- Mengakhiri paragraf. -->
          <p> <!-- Memulai paragraf untuk mengelompokkan label dan input nomor anggota. -->
            <label for="no-anggota">No Anggota:</label> <!-- Label teks untuk input nomor anggota. -->
            <input type="text" id="no-anggota" name="no-anggota" required /> <!-- Input teks untuk nomor anggota, wajib diisi. -->
          </p> <!-- Mengakhiri paragraf. -->
          <p> <!-- Memulai paragraf untuk mengelompokkan label dan input alamat. -->
            <label for="alamat">Alamat:</label> <!-- Label teks untuk input alamat. -->
            <input type="text" id="alamat" name="alamat" required /> <!-- Input teks untuk alamat, wajib diisi. -->
          </p> <!-- Mengakhiri paragraf. -->
          <p> <!-- Memulai paragraf untuk mengelompokkan label dan input nomor HP. -->
            <label for="no-hp">No HP:</label> <!-- Label teks untuk input nomor HP. -->
            <input type="tel" id="no-hp" name="no-hp" required /> <!-- Input telepon untuk nomor HP, wajib diisi. -->
          </p> <!-- Mengakhiri paragraf. -->
          <p> <!-- Memulai paragraf untuk mengelompokkan tombol simpan. -->
            <button type="submit">Simpan</button> <!-- Tombol untuk mengirimkan (submit) data formulir. -->
          </p> <!-- Mengakhiri paragraf. -->
        </form> <!-- Mengakhiri formulir. -->
      </section> <!-- Mengakhiri bagian konten. -->
    </main> <!-- Mengakhiri bagian utama. -->

    <footer> <!-- Bagian footer (kaki) halaman, biasanya berisi informasi hak cipta atau kontak. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 6.</p> <!-- Paragraf berisi informasi hak cipta dan nama proyek. -->
    </footer> <!-- Mengakhiri bagian footer. -->
    <script src="../assets/js/app.js"></script> <!-- Menghubungkan dokumen HTML dengan file JavaScript eksternal. -->
  </body> <!-- Mengakhiri bagian body. -->
</html> <!-- Mengakhiri dokumen HTML. -->


```

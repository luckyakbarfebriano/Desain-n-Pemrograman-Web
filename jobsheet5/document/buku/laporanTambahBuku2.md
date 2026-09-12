# LAPORAN JOBSHEET 1 index.html

# LUCKY AKBAR FEBRIANO/12/254107020134/TI 2D

```html
<!doctype html> <!-- Mendeklarasikan tipe dokumen sebagai HTML5 -->
<html lang="id"> <!-- Elemen root dokumen HTML dengan pengaturan bahasa Indonesia -->
  <head> <!-- Bagian penampung metadata dokumen -->
    <meta charset="UTF-8" /> <!-- Menentukan pengkodean karakter dokumen ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport agar tampilan responsif di berbagai perangkat -->
    <title>SIMPUS-kecil || Tambah Buku</title> <!-- Menentukan judul halaman pada tab browser -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan dokumen dengan file CSS eksternal -->
  </head> <!-- Menutup bagian head dokumen -->
  <body> <!-- Bagian penampung seluruh konten yang ditampilkan pada web -->
    <header> <!-- Bagian kepala halaman yang memuat logo dan navigasi -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama atau nama website -->
      <button <!-- Membuka tag tombol navigasi mobile -->
        type="button" <!-- Menentukan tipe elemen sebagai tombol standar -->
        id="nav-toggle-btn" <!-- ID untuk kontrol JavaScript/interaksi toggle menu -->
        class="nav-toggle-label" <!-- Kelas CSS untuk styling tombol toggle -->
        aria-label="Menu" <!-- Label aksesibilitas pembaca layar untuk fungsi tombol -->
      > <!-- Penutup tag pembuka button -->
        &#9776; <!-- Entitas karakter HTML untuk ikon menu hamburger -->
      </button> <!-- Menutup elemen tombol navigasi -->
      <nav> <!-- Elemen semantik yang membungkus navigasi utama -->
        <ul> <!-- Membuat daftar menu navigasi tidak berurutan -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar yang berisi tautan ke halaman beranda -->
          <li><a href="list.html">Daftar Buku</a></li> <!-- Item daftar yang berisi tautan ke halaman daftar buku -->
          <li><a href="tambah.html">Tambah Buku</a></li> <!-- Item daftar yang berisi tautan ke halaman form tambah buku -->
          <li><a href="../anggota/list.html">Daftar Anggota</a></li> <!-- Item daftar yang berisi tautan ke halaman daftar anggota -->
        </ul> <!-- Menutup daftar menu navigasi -->
      </nav> <!-- Menutup elemen navigasi -->
    </header> <!-- Menutup bagian header -->

    <main> <!-- Elemen semantik untuk konten utama halaman -->
      <section> <!-- Bagian/seksi khusus untuk formulir penambahan buku -->
        <h2>Tambah Buku</h2> <!-- Judul sub-bagian halaman -->
        <form id="form-tambah"> <!-- Formulir input data dengan ID form-tambah -->
          <p> <!-- Paragraf pembungkus elemen input judul -->
            <label for="judul">Judul:</label> <!-- Label penjelas untuk input judul buku -->
            <input type="text" id="judul" name="judul" required /> <!-- Kolom teks untuk judul buku yang wajib diisi -->
          </p> <!-- Menutup paragraf pembungkus judul -->
          <p> <!-- Paragraf pembungkus elemen input pengarang -->
            <label for="pengarang">Pengarang:</label> <!-- Label penjelas untuk input nama pengarang -->
            <input type="text" id="pengarang" name="pengarang" required /> <!-- Kolom teks untuk nama pengarang yang wajib diisi -->
          </p> <!-- Menutup paragraf pembungkus pengarang -->
          <p> <!-- Paragraf pembungkus elemen input tahun terbit -->
            <label for="tahun">Tahun Terbit:</label> <!-- Label penjelas untuk input tahun terbit -->
            <input <!-- Membuka tag elemen input angka tahun -->
              type="number" <!-- Menentukan tipe input khusus angka -->
              id="tahun" <!-- ID unik untuk elemen input tahun -->
              name="tahun" <!-- Nama parameter input yang dikirim ke server -->
              min="1900" <!-- Nilai angka minimal yang dapat dimasukkan -->
              max="2026" <!-- Nilai angka maksimal yang dapat dimasukkan -->
              required <!-- Menandakan bahwa input ini wajib diisi -->
            /> <!-- Menutup tag input tahun -->
          </p> <!-- Menutup paragraf pembungkus tahun terbit -->
          <p> <!-- Paragraf pembungkus elemen input ISBN -->
            <label for="isbn">ISBN:</label> <!-- Label penjelas untuk input nomor ISBN -->
            <input type="text" id="isbn" name="isbn" required /> <!-- Kolom teks untuk nomor ISBN yang wajib diisi -->
          </p> <!-- Menutup paragraf pembungkus ISBN -->
          <p> <!-- Paragraf pembungkus elemen input stok -->
            <label for="stok">Stok:</label> <!-- Label penjelas untuk input jumlah stok -->
            <input type="number" id="stok" name="stok" min="0" required /> <!-- Kolom angka jumlah stok dengan batas minimum 0 yang wajib diisi -->
          </p> <!-- Menutup paragraf pembungkus stok -->
          <p> <!-- Paragraf pembungkus pilihan kategori -->
            <label for="Kategori">Kategori:</label><br /> <!-- Label penjelas kategori dengan pemisah baris baru -->
            <select id="Kategori" name="Kategori" required> <!-- Menu dropdown pilihan kategori yang wajib dipilih -->
              <option value="Fiksi">Fiksi</option> <!-- Opsi pilihan kategori buku Fiksi -->
              <option value="Non-Fiksi">Non-Fiksi</option> <!-- Opsi pilihan kategori buku Non-Fiksi -->
              <option value="Referensi">Referensi</option> <!-- Opsi pilihan kategori buku Referensi -->
            </select> <!-- Menutup menu dropdown pilihan kategori -->
          </p> <!-- Menutup paragraf pembungkus kategori -->
          <p> <!-- Paragraf pembungkus tombol aksi formulir -->
            <button type="submit">Simpan</button> <!-- Tombol untuk mengeksekusi pengiriman (submit) formulir -->
          </p> <!-- Menutup paragraf pembungkus tombol -->
        </form> <!-- Menutup elemen form tambah buku -->
      </section> <!-- Menutup elemen section -->
    </main> <!-- Menutup bagian konten utama -->

    <footer> <!-- Bagian kaki halaman web -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 5.</p> <!-- Menampilkan teks hak cipta dan informasi jobsheet -->
    </footer> <!-- Menutup bagian footer -->
    <script src="../assets/js/app.js"></script> <!-- Menghubungkan dan memuat file script JavaScript eksternal -->
  </body> <!-- Menutup bagian body dokumen -->
</html> <!-- Menutup elemen root HTML -->
```

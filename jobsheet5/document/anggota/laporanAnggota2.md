# LAPORAN JOBSHEET 5

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Deklarasi tipe dokumen untuk HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dan menentukan bahasa utama adalah Indonesia. -->
  <head> <!-- Bagian head berisi metadata tentang halaman, tidak terlihat di browser. -->
    <meta charset="UTF-8" /> <!-- Menentukan pengkodean karakter untuk dokumen, yaitu UTF-8. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport agar halaman responsif di perangkat mobile. -->
    <title>SIMPUS-kecil || Daftar Anggota</title> <!-- Menentukan judul halaman yang muncul di tab browser. -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan dokumen HTML dengan file CSS eksternal untuk styling. -->
  </head> <!-- Menutup bagian head dokumen. -->
  <body> <!-- Bagian body berisi semua konten yang terlihat oleh pengguna di browser. -->
    <header> <!-- Elemen semantik untuk bagian atas atau pengantar halaman. -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama (heading level 1) untuk situs web. -->
      <button <!-- Memulai elemen tombol interaktif. -->
        type="button" <!-- Menentukan jenis tombol sebagai tombol umum. -->
        id="nav-toggle-btn" <!-- Memberikan ID unik untuk tombol, bisa digunakan oleh JavaScript. -->
        class="nav-toggle-label" <!-- Memberikan kelas CSS untuk styling tombol. -->
        aria-label="Menu" <!-- Memberikan label aksesibilitas untuk pembaca layar. -->
      > <!-- Menutup tag pembuka untuk elemen button. -->
        &#9776; <!-- Menampilkan karakter ikon 'hamburger menu' (tiga garis horizontal). -->
      </button> <!-- Menutup elemen tombol. -->
      <nav> <!-- Elemen semantik untuk navigasi halaman. -->
        <ul> <!-- Memulai daftar tidak berurutan untuk item navigasi. -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar dengan tautan ke halaman utama. -->
          <li><a href="../buku/list.html">Daftar Buku</a></li> <!-- Item daftar dengan tautan ke halaman daftar buku. -->
          <li><a href="../buku/tambah.html">Tambah Buku</a></li> <!-- Item daftar dengan tautan ke halaman tambah buku. -->
          <li><a href="list.html">Daftar Anggota</a></li> <!-- Item daftar dengan tautan ke halaman daftar anggota (halaman ini). -->
        </ul> <!-- Menutup daftar tidak berurutan. -->
      </nav> <!-- Menutup bagian navigasi. -->
    </header> <!-- Menutup bagian header. -->
    <main> <!-- Elemen semantik untuk konten utama halaman. -->
      <section> <!-- Elemen semantik untuk mengelompokkan konten terkait. -->
        <h2>Daftar Anggota</h2> <!-- Judul sub-bagian (heading level 2) untuk daftar anggota. -->
        <div class="search-box"> <!-- Divisi untuk mengelompokkan elemen pencarian dengan kelas CSS. -->
          <label for="search-input">Cari Nama Anggota</label> <!-- Label teks untuk input pencarian, terhubung ke input dengan ID 'search-input'. -->
          <input <!-- Memulai elemen input form. -->
            type="text" <!-- Menentukan jenis input sebagai teks. -->
            id="search-input" <!-- Memberikan ID unik untuk input, digunakan oleh label dan JavaScript. -->
            placeholder="Ketik nama anggota..." <!-- Teks petunjuk yang muncul di dalam input saat kosong. -->
          /> <!-- Menutup elemen input. -->
        </div> <!-- Menutup divisi search-box. -->
        <div class="table-responsive"> <!-- Divisi untuk membuat tabel responsif dengan kelas CSS. -->
          <table> <!-- Memulai elemen tabel untuk menampilkan data dalam baris dan kolom. -->
            <thead> <!-- Bagian kepala tabel, berisi header kolom. -->
              <tr> <!-- Baris tabel untuk header. -->
                <th>No Anggota</th> <!-- Sel header tabel untuk kolom "No Anggota". -->
                <th>Nama</th> <!-- Sel header tabel untuk kolom "Nama". -->
                <th>Alamat</th> <!-- Sel header tabel untuk kolom "Alamat". -->
                <th>No HP</th> <!-- Sel header tabel untuk kolom "No HP". -->
                <th>Aksi</th> <!-- Sel header tabel untuk kolom "Aksi". -->
              </tr> <!-- Menutup baris tabel header. -->
            </thead> <!-- Menutup bagian kepala tabel. -->
            <tbody> <!-- Bagian body tabel, berisi data baris. -->
              <tr> <!-- Baris data pertama dalam tabel. -->
                <td>A001</td> <!-- Sel data untuk "No Anggota". -->
                <td>Siti Aminah</td> <!-- Sel data untuk "Nama". -->
                <td>Malang</td> <!-- Sel data untuk "Alamat". -->
                <td>08123*****</td> <!-- Sel data untuk "No HP". -->
                <td> <!-- Sel data untuk "Aksi", berisi tombol. -->
                  <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol "Hapus" dengan kelas CSS untuk baris ini. -->
                </td> <!-- Menutup sel data "Aksi". -->
              </tr> <!-- Menutup baris data pertama. -->
              <tr> <!-- Baris data kedua dalam tabel. -->
                <td>A002</td> <!-- Sel data untuk "No Anggota". -->
                <td>Budi Santoso</td> <!-- Sel data untuk "Nama". -->
                <td>Batu</td> <!-- Sel data untuk "Alamat". -->
                <td>08123*****</td> <!-- Sel data untuk "No HP". -->
                <td> <!-- Sel data untuk "Aksi", berisi tombol. -->
                  <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol "Hapus" dengan kelas CSS untuk baris ini. -->
                </td> <!-- Menutup sel data "Aksi". -->
              </tr> <!-- Menutup baris data kedua. -->
            </tbody> <!-- Menutup bagian body tabel. -->
          </table> <!-- Menutup elemen tabel. -->
        </div> <!-- Menutup divisi table-responsive. -->
      </section> <!-- Menutup bagian section. -->
    </main> <!-- Menutup bagian main. -->
    <footer> <!-- Elemen semantik untuk bagian kaki halaman. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 5.</p> <!-- Paragraf teks berisi informasi hak cipta dan deskripsi. -->
    </footer> <!-- Menutup bagian footer. -->
    <script src="../assets/js/app.js"></script> <!-- Menghubungkan dokumen HTML dengan file JavaScript eksternal. -->
  </body> <!-- Menutup bagian body dokumen. -->
</html> <!-- Menutup dokumen HTML. -->

```

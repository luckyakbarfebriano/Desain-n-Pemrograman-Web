# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Mendefinisikan tipe dokumen sebagai HTML5 -->
<html lang="id"> <!-- Membuka tag html dengan bahasa utama Indonesia -->
  <head> <!-- Membuka bagian kepala dokumen -->
    <meta charset="UTF-8" /> <!-- Mengatur pengkodean karakter dokumen ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur agar tampilan responsif di perangkat mobile -->
    <title>SIMPUS-kecil || Daftar Anggota</title> <!-- Menetapkan judul halaman di tab browser -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan file CSS eksternal -->
  </head> <!-- Menutup bagian kepala dokumen -->
  <body> <!-- Membuka bagian tubuh dokumen -->
    <header> <!-- Membuka elemen header halaman -->
      <h1>SIMPUS-kecil</h1> <!-- Menampilkan judul utama aplikasi -->
      <button <!-- Membuka elemen tombol -->
        type="button" <!-- Mengatur tipe tombol agar tidak mengirim form -->
        id="nav-toggle-btn" <!-- Memberikan ID unik untuk tombol toggle -->
        class="nav-toggle-label" <!-- Memberikan kelas untuk gaya tampilan -->
        aria-label="Menu" <!-- Memberikan label aksesibilitas untuk pembaca layar -->
      > <!-- Menutup tag pembuka tombol -->
        &#9776; <!-- Menampilkan simbol ikon menu hamburger -->
      </button> <!-- Menutup elemen tombol -->
      <nav> <!-- Membuka elemen navigasi -->
        <ul> <!-- Membuka daftar navigasi tidak berurutan -->
          <li><a href="../index.html">Home</a></li> <!-- Link menu ke halaman utama -->
          <li><a href="../buku/list.html">Daftar Buku</a></li> <!-- Link menu ke daftar buku -->
          <li><a href="../buku/tambah.html">Tambah Buku</a></li> <!-- Link menu ke tambah buku -->
          <li><a href="list.html">Daftar Anggota</a></li> <!-- Link menu ke daftar anggota -->
        </ul> <!-- Menutup daftar navigasi -->
      </nav> <!-- Menutup elemen navigasi -->
    </header> <!-- Menutup elemen header -->

    <main> <!-- Membuka bagian utama konten -->
      <section> <!-- Membuka elemen bagian konten -->
        <h2>Daftar Anggota</h2> <!-- Menampilkan sub-judul daftar anggota -->
        <div class="search-box"> <!-- Membuka kotak pencarian -->
          <label for="search-input">Cari Nama Anggota</label> <!-- Label untuk input pencarian -->
          <input <!-- Membuka elemen input -->
            type="text" <!-- Mengatur tipe input sebagai teks -->
            id="search-input" <!-- ID unik untuk elemen input pencarian -->
            placeholder="Ketik nama anggota..." <!-- Teks bayangan sebagai panduan pengguna -->
          /> <!-- Menutup elemen input -->
        </div> <!-- Menutup kotak pencarian -->
        <div class="table-responsive"> <!-- Membuka kontainer agar tabel bisa digeser (responsif) -->
          <table> <!-- Membuka elemen tabel -->
            <thead> <!-- Membuka bagian header tabel -->
              <tr> <!-- Membuka baris pertama tabel -->
                <th>No Anggota</th> <!-- Kolom header nomor anggota -->
                <th>Nama</th> <!-- Kolom header nama -->
                <th>Alamat</th> <!-- Kolom header alamat -->
                <th>No HP</th> <!-- Kolom header nomor handphone -->
                <th>Aksi</th> <!-- Kolom header untuk tombol aksi -->
              </tr> <!-- Menutup baris header -->
            </thead> <!-- Menutup bagian header tabel -->
            <tbody> <!-- Membuka bagian isi tabel -->
              <tr> <!-- Membuka baris data pertama -->
                <td>A001</td> <!-- Sel data nomor anggota -->
                <td>Siti Aminah</td> <!-- Sel data nama -->
                <td>Malang</td> <!-- Sel data alamat -->
                <td>08123*****</td> <!-- Sel data nomor hp -->
                <td> <!-- Sel data untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol hapus -->
                </td> <!-- Menutup sel data aksi -->
              </tr> <!-- Menutup baris data pertama -->
              <tr> <!-- Membuka baris data kedua -->
                <td>A002</td> <!-- Sel data nomor anggota -->
                <td>Budi Santoso</td> <!-- Sel data nama -->
                <td>Batu</td> <!-- Sel data alamat -->
                <td>08123*****</td> <!-- Sel data nomor hp -->
                <td> <!-- Sel data untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol hapus -->
                </td> <!-- Menutup sel data aksi -->
              </tr> <!-- Menutup baris data kedua -->
            </tbody> <!-- Menutup bagian isi tabel -->
          </table> <!-- Menutup elemen tabel -->
        </div> <!-- Menutup kontainer tabel -->
      </section> <!-- Menutup elemen bagian konten -->
    </main> <!-- Menutup elemen main -->

    <footer> <!-- Membuka elemen footer -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 6.</p> <!-- Menampilkan teks hak cipta -->
    </footer> <!-- Menutup elemen footer -->
    <script src="../assets/js/app.js"></script> <!-- Menghubungkan file JavaScript eksternal -->
  </body> <!-- Menutup bagian tubuh -->
</html> <!-- Menutup tag html -->


```

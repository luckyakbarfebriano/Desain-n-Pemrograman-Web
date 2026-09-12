# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Mendefinisikan tipe dokumen sebagai HTML5 -->
<html lang="id"> <!-- Membuka elemen html dengan bahasa Indonesia -->
  <head> <!-- Bagian awal dokumen untuk metadata -->
    <meta charset="UTF-8" /> <!-- Mengatur pengkodean karakter ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur skala tampilan untuk perangkat mobile -->
    <title>SIMPUS-kecil || Daftar Buku</title> <!-- Judul halaman di browser -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan file CSS eksternal -->
  </head> <!-- Menutup bagian head -->
  <body> <!-- Bagian isi utama dokumen dimulai -->
    <header> <!-- Bagian header halaman -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama aplikasi -->
      <button <!-- Tombol untuk menu navigasi -->
        type="button" <!-- Tipe tombol standar -->
        id="nav-toggle-btn" <!-- ID unik untuk tombol navigasi -->
        class="nav-toggle-label" <!-- Class untuk styling CSS -->
        aria-label="Menu" <!-- Label aksesibilitas untuk pembaca layar -->
      > <!-- Menutup tag pembuka tombol -->
        &#9776; <!-- Simbol ikon menu hamburger -->
      </button> <!-- Menutup tombol -->
      <nav> <!-- Bagian navigasi -->
        <ul> <!-- List tidak berurutan untuk menu -->
          <li><a href="../index.html">Home</a></li> <!-- Link ke halaman utama -->
          <li><a href="list.html">Daftar Buku</a></li> <!-- Link ke halaman daftar buku -->
          <li><a href="tambah.html">Tambah Buku</a></li> <!-- Link ke halaman tambah buku -->
          <li><a href="../anggota/list.html">Daftar Anggota</a></li> <!-- Link ke daftar anggota -->
        </ul> <!-- Menutup list navigasi -->
      </nav> <!-- Menutup navigasi -->
    </header> <!-- Menutup header -->

    <main> <!-- Bagian konten utama halaman -->
      <section> <!-- Bagian konten yang dikelompokkan -->
        <h2>Daftar Buku</h2> <!-- Judul sub-seksi -->
        <div class="search-box"> <!-- Kotak untuk pencarian -->
          <label for="search-input">Cari Judul Buku</label> <!-- Label untuk input pencarian -->
          <input <!-- Input pencarian -->
            type="text" <!-- Input berupa teks -->
            id="search-input" <!-- ID unik untuk elemen input -->
            placeholder="Ketik judul buku..." <!-- Teks panduan di dalam kotak input -->
          /> <!-- Menutup input -->
        </div> <!-- Menutup div search-box -->
        <div class="table-responsive"> <!-- Wrapper agar tabel responsif -->
          <table> <!-- Membuka tabel data -->
            <thead> <!-- Bagian header tabel -->
              <tr> <!-- Baris tabel -->
                <th>Judul</th> <!-- Judul kolom buku -->
                <th>Pengarang</th> <!-- Judul kolom pengarang -->
                <th>Tahun</th> <!-- Judul kolom tahun -->
                <th>Stok</th> <!-- Judul kolom stok -->
                <th>Aksi</th> <!-- Judul kolom aksi -->
              </tr> <!-- Menutup baris header -->
            </thead> <!-- Menutup header tabel -->
            <tbody> <!-- Bagian isi data tabel -->
              <tr> <!-- Baris data ke-1 -->
                <td>The Psycology of Money</td> <!-- Judul buku -->
                <td>Morgan Housel</td> <!-- Penulis -->
                <td>2020</td> <!-- Tahun terbit -->
                <td>5</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-2 -->
                <td>Crypto Trading Guide</td> <!-- Judul buku -->
                <td>Timothy Ronald, Kalimasada</td> <!-- Penulis -->
                <td>2023</td> <!-- Tahun terbit -->
                <td>3</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-3 -->
                <td>The Richest Man in Babylon</td> <!-- Judul buku -->
                <td>George Samuel Clason</td> <!-- Penulis -->
                <td>1926</td> <!-- Tahun terbit -->
                <td>10</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-4 -->
                <td>Laskar Pelangi</td> <!-- Judul buku -->
                <td>Andrea Hirata</td> <!-- Penulis -->
                <td>2005</td> <!-- Tahun terbit -->
                <td>4</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-5 -->
                <td>Bumi Manusia</td> <!-- Judul buku -->
                <td>Pramoedya Ananta Toer</td> <!-- Penulis -->
                <td>1980</td> <!-- Tahun terbit -->
                <td>2</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-6 -->
                <td>Negeri 5 Menara</td> <!-- Judul buku -->
                <td>Ahmad Fuadi</td> <!-- Penulis -->
                <td>2009</td> <!-- Tahun terbit -->
                <td>0</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-7 -->
                <td>Atomic Habits</td> <!-- Judul buku -->
                <td>James Clear</td> <!-- Penulis -->
                <td>2018</td> <!-- Tahun terbit -->
                <td>7</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
              <tr> <!-- Baris data ke-8 -->
                <td>Filosifi Teras</td> <!-- Judul buku -->
                <td>Henry Manampiring</td> <!-- Penulis -->
                <td>2018</td> <!-- Tahun terbit -->
                <td>5</td> <!-- Jumlah stok -->
                <td> <!-- Kolom tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol Edit -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol Hapus -->
                </td> <!-- Menutup kolom aksi -->
              </tr> <!-- Menutup baris -->
            </tbody> <!-- Menutup isi tabel -->
          </table> <!-- Menutup tabel -->
        </div> <!-- Menutup div responsive -->
      </section> <!-- Menutup section -->
    </main> <!-- Menutup main -->

    <footer> <!-- Bagian kaki halaman -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 6.</p> <!-- Hak cipta dan keterangan -->
    </footer> <!-- Menutup footer -->
    <script src="../assets/js/app.js"></script> <!-- Memanggil file JavaScript -->
  </body> <!-- Menutup body -->
</html> <!-- Menutup dokumen html -->


```

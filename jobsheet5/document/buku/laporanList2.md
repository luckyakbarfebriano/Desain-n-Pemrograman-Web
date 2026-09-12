# LAPORAN JOBSHEET 5

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```html
<!doctype html> <!-- Mendefinisikan dokumen sebagai HTML5 -->
<html lang="id"> <!-- Memulai elemen HTML, mengatur bahasa dokumen ke Bahasa Indonesia -->
  <head> <!-- Bagian kepala dokumen yang berisi metadata -->
    <meta charset="UTF-8" /> <!-- Mengatur pengkodean karakter untuk dokumen (UTF-8) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport untuk tampilan responsif di berbagai perangkat -->
    <title>SIMPUS-kecil || Daftar Buku</title> <!-- Menentukan judul halaman yang muncul di tab browser -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan file CSS eksternal untuk styling halaman -->
  </head> <!-- Menutup bagian kepala dokumen -->
  <body> <!-- Bagian tubuh dokumen yang berisi semua konten yang terlihat oleh pengguna -->
    <header> <!-- Elemen header halaman, biasanya berisi judul situs dan navigasi utama -->
      <h1>SIMPUS-kecil</h1> <!-- Judul utama atau nama aplikasi -->
      <button <!-- Tombol untuk mengaktifkan/menonaktifkan navigasi pada perangkat kecil -->
        type="button" <!-- Menentukan jenis tombol sebagai tombol biasa -->
        id="nav-toggle-btn" <!-- ID unik untuk tombol, bisa digunakan oleh JavaScript -->
        class="nav-toggle-label" <!-- Kelas CSS untuk styling tombol toggle navigasi -->
        aria-label="Menu" <!-- Label aksesibilitas untuk pembaca layar -->
      >
        &#9776; <!-- Karakter HTML untuk simbol "hamburger menu" (tiga garis horizontal) -->
      </button> <!-- Menutup elemen tombol -->
      <nav> <!-- Elemen navigasi yang berisi daftar tautan -->
        <ul> <!-- Daftar tidak berurutan untuk item navigasi -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar dengan tautan ke halaman utama -->
          <li><a href="list.html">Daftar Buku</a></li> <!-- Item daftar dengan tautan ke halaman daftar buku -->
          <li><a href="tambah.html">Tambah Buku</a></li> <!-- Item daftar dengan tautan ke halaman tambah buku -->
          <li><a href="../anggota/list.html">Daftar Anggota</a></li> <!-- Item daftar dengan tautan ke halaman daftar anggota -->
        </ul> <!-- Menutup daftar tidak berurutan -->
      </nav> <!-- Menutup elemen navigasi -->
    </header> <!-- Menutup elemen header -->

    <main> <!-- Konten utama dan unik dari dokumen -->
      <section> <!-- Bagian generik dari konten dokumen, di sini untuk menampilkan daftar buku -->
        <h2>Daftar Buku</h2> <!-- Sub-judul untuk bagian daftar buku -->
        <div class="search-box"> <!-- Wadah untuk kotak pencarian -->
          <label for="search-input">Cari Judul Buku</label> <!-- Label untuk input pencarian -->
          <input <!-- Kolom input untuk mengetik judul buku yang akan dicari -->
            type="text" <!-- Menentukan jenis input sebagai teks -->
            id="search-input" <!-- ID unik untuk input pencarian -->
            placeholder="Ketik judul buku..." <!-- Teks panduan yang muncul di dalam input sebelum diisi -->
          /> <!-- Menutup elemen input -->
        </div> <!-- Menutup wadah search-box -->
        <div class="table-responsive"> <!-- Wadah untuk membuat tabel responsif -->
          <table> <!-- Memulai elemen tabel untuk menampilkan data buku -->
            <thead> <!-- Bagian kepala tabel yang berisi judul kolom -->
              <tr> <!-- Baris tabel untuk judul kolom -->
                <th>Judul</th> <!-- Header kolom untuk judul buku -->
                <th>Pengarang</th> <!-- Header kolom untuk nama pengarang -->
                <th>Tahun</th> <!-- Header kolom untuk tahun terbit -->
                <th>Stok</th> <!-- Header kolom untuk jumlah stok buku -->
                <th>Aksi</th> <!-- Header kolom untuk tombol aksi (edit/hapus) -->
              </tr> <!-- Menutup baris kepala tabel -->
            </thead> <!-- Menutup bagian kepala tabel -->
            <tbody> <!-- Bagian tubuh tabel yang berisi data baris -->
              <tr> <!-- Baris data pertama -->
                <td>The Psycology of Money</td> <!-- Data sel untuk judul buku -->
                <td>Morgan Housel</td> <!-- Data sel untuk pengarang -->
                <td>2020</td> <!-- Data sel untuk tahun -->
                <td>5</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data pertama -->
              <tr> <!-- Baris data kedua -->
                <td>Crypto Trading Guide</td> <!-- Data sel untuk judul buku -->
                <td>Timothy Ronald, Kalimasada</td> <!-- Data sel untuk pengarang -->
                <td>2023</td> <!-- Data sel untuk tahun -->
                <td>3</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data kedua -->
              <tr> <!-- Baris data ketiga -->
                <td>The Richest Man in Babylon</td> <!-- Data sel untuk judul buku -->
                <td>George Samuel Clason</td> <!-- Data sel untuk pengarang -->
                <td>1926</td> <!-- Data sel untuk tahun -->
                <td>10</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data ketiga -->
              <tr> <!-- Baris data keempat -->
                <td>Laskar Pelangi</td> <!-- Data sel untuk judul buku -->
                <td>Andrea Hirata</td> <!-- Data sel untuk pengarang -->
                <td>2005</td> <!-- Data sel untuk tahun -->
                <td>4</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data keempat -->
              <tr> <!-- Baris data kelima -->
                <td>Bumi Manusia</td> <!-- Data sel untuk judul buku -->
                <td>Pramoedya Ananta Toer</td> <!-- Data sel untuk pengarang -->
                <td>1980</td> <!-- Data sel untuk tahun -->
                <td>2</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data kelima -->
              <tr> <!-- Baris data keenam -->
                <td>Negeri 5 Menara</td> <!-- Data sel untuk judul buku -->
                <td>Ahmad Fuadi</td> <!-- Data sel untuk pengarang -->
                <td>2009</td> <!-- Data sel untuk tahun -->
                <td>0</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data keenam -->
              <tr> <!-- Baris data ketujuh -->
                <td>Atomic Habits</td> <!-- Data sel untuk judul buku -->
                <td>James Clear</td> <!-- Data sel untuk pengarang -->
                <td>2018</td> <!-- Data sel untuk tahun -->
                <td>7</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data ketujuh -->
              <tr> <!-- Baris data kedelapan -->
                <td>Filosifi Teras</td> <!-- Data sel untuk judul buku -->
                <td>Henry Manampiring</td> <!-- Data sel untuk pengarang -->
                <td>2018</td> <!-- Data sel untuk tahun -->
                <td>5</td> <!-- Data sel untuk stok -->
                <td> <!-- Data sel untuk tombol aksi -->
                  <button type="button">Edit</button> <!-- Tombol untuk mengedit data buku -->
                  <button type="button" class="btn-hapus">Hapus</button> <!-- Tombol untuk menghapus data buku -->
                </td> <!-- Menutup data sel aksi -->
              </tr> <!-- Menutup baris data kedelapan -->
            </tbody> <!-- Menutup bagian tubuh tabel -->
          </table> <!-- Menutup elemen tabel -->
        </div> <!-- Menutup wadah table-responsive -->
      </section> <!-- Menutup bagian section -->
    </main> <!-- Menutup elemen main -->

    <footer> <!-- Elemen footer halaman, biasanya berisi informasi hak cipta atau kontak -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 5.</p> <!-- Paragraf berisi informasi hak cipta dan jobsheet -->
    </footer> <!-- Menutup elemen footer -->
    <script src="../assets/js/app.js"></script> <!-- Menghubungkan file JavaScript eksternal untuk interaktivitas -->
  </body> <!-- Menutup bagian tubuh dokumen -->
</html> <!-- Menutup elemen HTML -->

```

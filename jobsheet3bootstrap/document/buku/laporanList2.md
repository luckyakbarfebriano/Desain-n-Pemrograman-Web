# LAPORAN JOBSHEET 3

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html> <!-- Mendeklarasikan tipe dokumen sebagai HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dan mengatur bahasa utama halaman ke Bahasa Indonesia. -->
  <head> <!-- Memulai bagian kepala dokumen HTML, berisi metadata tentang halaman. -->
    <meta charset="UTF-8" /> <!-- Menentukan set karakter untuk dokumen sebagai UTF-8, mendukung berbagai karakter internasional. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport untuk responsivitas di perangkat berbeda, memastikan skala awal 1.0. -->
    <title>SIMPUS-kecil || Daftar Buku</title> <!-- Menentukan judul halaman yang muncul di tab browser atau hasil pencarian. -->
    <link <!-- Memulai tag untuk menghubungkan dokumen HTML dengan sumber daya eksternal. -->
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" <!-- Menentukan URL file CSS Bootstrap versi 5.3.0 untuk gaya dasar. -->
      rel="stylesheet" <!-- Mendefinisikan hubungan file ini sebagai stylesheet (lembar gaya). -->
    /> <!-- Menutup tag link. -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan file stylesheet kustom 'style.css' dari folder 'assets/css'. -->
  </head> <!-- Mengakhiri bagian kepala dokumen HTML. -->
  <body> <!-- Memulai bagian badan dokumen HTML, berisi semua konten yang terlihat oleh pengguna. -->
    <header <!-- Memulai bagian header semantik untuk situs web. -->
      class="navbar navbar-expand-lg navbar-dark" <!-- Menetapkan kelas Bootstrap untuk navigasi bar: 'navbar', 'navbar-expand-lg' (untuk ekspansi di layar besar), dan 'navbar-dark' (untuk teks terang di latar gelap). -->
      style="background-color: #1d5b8a" <!-- Mengatur warna latar belakang kustom untuk navbar menggunakan gaya inline CSS. -->
    > <!-- Menutup tag header. -->
      <div class="container"> <!-- Memulai div dengan kelas 'container' untuk mengatur lebar konten agar responsif. -->
        <a class="navbar-brand" href="../index.html">SIMPUS-kecil</a> <!-- Membuat tautan merek (brand) navbar yang mengarah ke halaman utama. -->
        <button <!-- Memulai elemen tombol. -->
          class="navbar-toggler" <!-- Menetapkan kelas Bootstrap untuk tombol toggler (hamburger menu) pada navbar. -->
          type="button" <!-- Menentukan tipe tombol sebagai "button". -->
          data-bs-toggle="collapse" <!-- Mengatur atribut data Bootstrap untuk mengaktifkan fungsionalitas collapse. -->
          data-bs-target="#navMenu" <!-- Menentukan target collapse adalah elemen dengan ID 'navMenu'. -->
          aria-controls="navMenu" <!-- Menyediakan informasi untuk teknologi asistif bahwa tombol ini mengontrol elemen 'navMenu'. -->
          aria-expanded="false" <!-- Menyatakan kepada teknologi asistif bahwa menu saat ini tidak diperluas. -->
          aria-label="Toggle navigation" <!-- Menyediakan label yang mudah dibaca oleh teknologi asistif untuk tombol ini. -->
        > <!-- Menutup tag button. -->
          <span class="navbar-toggler-icon"></span> <!-- Menampilkan ikon toggler (biasanya ikon tiga garis). -->
        </button> <!-- Mengakhiri elemen tombol. -->
        <nav class="collapse navbar-collapse" id="navMenu"> <!-- Memulai elemen navigasi yang akan di-collapse pada layar kecil, dengan ID 'navMenu'. -->
          <ul class="navbar-nav ms-auto"> <!-- Memulai daftar tidak berurutan untuk item navigasi, dengan kelas Bootstrap untuk gaya navbar dan 'ms-auto' untuk mendorong item ke kanan. -->
            <li class="nav-item"> <!-- Memulai item daftar untuk navigasi. -->
              <a class="nav-link" href="../index.html">Home</a> <!-- Membuat tautan navigasi untuk "Home" yang mengarah ke halaman utama. -->
            </li> <!-- Mengakhiri item daftar. -->
            <li class="nav-item"> <!-- Memulai item daftar untuk navigasi. -->
              <a class="nav-link active" href="list.html">Daftar Buku</a> <!-- Membuat tautan navigasi untuk "Daftar Buku" yang aktif dan mengarah ke 'list.html'. -->
            </li> <!-- Mengakhiri item daftar. -->
            <li class="nav-item"> <!-- Memulai item daftar untuk navigasi. -->
              <a class="nav-link" href="tambah.html">Tambah Buku</a> <!-- Membuat tautan navigasi untuk "Tambah Buku" yang mengarah ke 'tambah.html'. -->
            </li> <!-- Mengakhiri item daftar. -->
            <li class="nav-item"> <!-- Memulai item daftar untuk navigasi. -->
              <a class="nav-link" href="../anggota/list.html">Daftar Anggota</a> <!-- Membuat tautan navigasi untuk "Daftar Anggota" yang mengarah ke 'anggota/list.html'. -->
            </li> <!-- Mengakhiri item daftar. -->
          </ul> <!-- Mengakhiri daftar tidak berurutan. -->
        </nav> <!-- Mengakhiri elemen navigasi. -->
      </div> <!-- Mengakhiri div dengan kelas 'container'. -->
    </header> <!-- Mengakhiri bagian header. -->

    <main class="container my-4"> <!-- Memulai bagian konten utama halaman, dengan kelas Bootstrap 'container' dan margin vertikal 'my-4'. -->
      <div class="card shadow-sm mb-4"> <!-- Memulai div yang berfungsi sebagai kartu, dengan bayangan kecil dan margin bawah. -->
        <div class="card-body"> <!-- Memulai div untuk isi (body) kartu. -->
          <h2 class="card-title mb-3">Daftar Buku</h2> <!-- Membuat judul level 2 untuk kartu dengan kelas Bootstrap 'card-title' dan margin bawah. -->
          <div class="table-responsive"> <!-- Memulai div yang membuat tabel menjadi responsif (horizontal scroll di layar kecil). -->
            <table class="table table-striped table-hover align-middle"> <!-- Memulai tabel dengan kelas Bootstrap: 'table', 'table-striped' (baris bergantian warna), 'table-hover' (efek hover), dan 'align-middle' (align teks tengah). -->
              <thead class="table-dark"> <!-- Memulai bagian header tabel dengan latar belakang gelap. -->
                <tr> <!-- Memulai baris header tabel. -->
                  <th>Judul</th> <!-- Membuat sel header tabel untuk kolom "Judul". -->
                  <th>Pengarang</th> <!-- Membuat sel header tabel untuk kolom "Pengarang". -->
                  <th>Tahun</th> <!-- Membuat sel header tabel untuk kolom "Tahun". -->
                  <th>Stok</th> <!-- Membuat sel header tabel untuk kolom "Stok". -->
                  <th>Aksi</th> <!-- Membuat sel header tabel untuk kolom "Aksi". -->
                </tr> <!-- Mengakhiri baris header tabel. -->
              </thead> <!-- Mengakhiri bagian header tabel. -->
              <tbody> <!-- Memulai bagian body tabel, berisi data baris. -->
                <tr> <!-- Memulai baris data pertama. -->
                  <td>The Psycology of Money</td> <!-- Menampilkan data "The Psycology of Money" pada kolom Judul. -->
                  <td>Morgan Housel</td> <!-- Menampilkan data "Morgan Housel" pada kolom Pengarang. -->
                  <td>2020</td> <!-- Menampilkan data "2020" pada kolom Tahun. -->
                  <td>5</td> <!-- Menampilkan data "5" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data pertama. -->
                <tr> <!-- Memulai baris data kedua. -->
                  <td>Crypto Trading Guide</td> <!-- Menampilkan data "Crypto Trading Guide" pada kolom Judul. -->
                  <td>Timothy Ronald, Kalimasada</td> <!-- Menampilkan data "Timothy Ronald, Kalimasada" pada kolom Pengarang. -->
                  <td>2023</td> <!-- Menampilkan data "2023" pada kolom Tahun. -->
                  <td>3</td> <!-- Menampilkan data "3" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data kedua. -->
                <tr> <!-- Memulai baris data ketiga. -->
                  <td>The Richest Man in Babylon</td> <!-- Menampilkan data "The Richest Man in Babylon" pada kolom Judul. -->
                  <td>George Samuel Clason</td> <!-- Menampilkan data "George Samuel Clason" pada kolom Pengarang. -->
                  <td>1926</td> <!-- Menampilkan data "1926" pada kolom Tahun. -->
                  <td>10</td> <!-- Menampilkan data "10" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data ketiga. -->
                <tr> <!-- Memulai baris data keempat. -->
                  <td>Laskar Pelangi</td> <!-- Menampilkan data "Laskar Pelangi" pada kolom Judul. -->
                  <td>Andrea Hirata</td> <!-- Menampilkan data "Andrea Hirata" pada kolom Pengarang. -->
                  <td>2005</td> <!-- Menampilkan data "2005" pada kolom Tahun. -->
                  <td>4</td> <!-- Menampilkan data "4" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data keempat. -->
                <tr> <!-- Memulai baris data kelima. -->
                  <td>Bumi Manusia</td> <!-- Menampilkan data "Bumi Manusia" pada kolom Judul. -->
                  <td>Pramoedya Ananta Toer</td> <!-- Menampilkan data "Pramoedya Ananta Toer" pada kolom Pengarang. -->
                  <td>1980</td> <!-- Menampilkan data "1980" pada kolom Tahun. -->
                  <td>2</td> <!-- Menampilkan data "2" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data kelima. -->
                <tr> <!-- Memulai baris data keenam. -->
                  <td>Negeri 5 Menara</td> <!-- Menampilkan data "Negeri 5 Menara" pada kolom Judul. -->
                  <td>Ahmad Fuadi</td> <!-- Menampilkan data "Ahmad Fuadi" pada kolom Pengarang. -->
                  <td>2009</td> <!-- Menampilkan data "2009" pada kolom Tahun. -->
                  <td>0</td> <!-- Menampilkan data "0" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data keenam. -->
                <tr> <!-- Memulai baris data ketujuh. -->
                  <td>Atomic Habits</td> <!-- Menampilkan data "Atomic Habits" pada kolom Judul. -->
                  <td>James Clear</td> <!-- Menampilkan data "James Clear" pada kolom Pengarang. -->
                  <td>2018</td> <!-- Menampilkan data "2018" pada kolom Tahun. -->
                  <td>7</td> <!-- Menampilkan data "7" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data ketujuh. -->
                <tr> <!-- Memulai baris data kedelapan. -->
                  <td>Filosifi Teras</td> <!-- Menampilkan data "Filosifi Teras" pada kolom Judul. -->
                  <td>Henry Manampiring</td> <!-- Menampilkan data "Henry Manampiring" pada kolom Pengarang. -->
                  <td>2018</td> <!-- Menampilkan data "2018" pada kolom Tahun. -->
                  <td>5</td> <!-- Menampilkan data "5" pada kolom Stok. -->
                  <td> <!-- Memulai sel data untuk kolom Aksi. -->
                    <button type="button" class="btn btn-warning btn-sm"> <!-- Membuat tombol "Edit" dengan gaya Bootstrap (peringatan, ukuran kecil). -->
                      Edit <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Edit". -->
                    <button type="button" class="btn btn-danger btn-sm"> <!-- Membuat tombol "Hapus" dengan gaya Bootstrap (bahaya, ukuran kecil). -->
                      Hapus <!-- Teks yang ditampilkan pada tombol. -->
                    </button> <!-- Mengakhiri tombol "Hapus". -->
                  </td> <!-- Mengakhiri sel data untuk kolom Aksi. -->
                </tr> <!-- Mengakhiri baris data kedelapan. -->
              </tbody> <!-- Mengakhiri bagian body tabel. -->
            </table> <!-- Mengakhiri elemen tabel. -->
          </div> <!-- Mengakhiri div responsif tabel. -->
        </div> <!-- Mengakhiri div 'card-body'. -->
      </div> <!-- Mengakhiri div 'card'. -->
    </main> <!-- Mengakhiri bagian konten utama. -->

    <footer class="text-center text-secondary py-3 small"> <!-- Memulai bagian footer, dengan teks tengah, warna sekunder, padding vertikal, dan ukuran teks kecil. -->
      <p class="mb-0"> <!-- Memulai paragraf dengan margin bawah 0. -->
        &copy; 2026 SIMPUS-kecil &mdash; Jobsheet 3 (Bootstrap) <!-- Menampilkan teks hak cipta, nama aplikasi, dan informasi jobsheet. -->
      </p> <!-- Mengakhiri paragraf. -->
    </footer> <!-- Mengakhiri bagian footer. -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Menghubungkan file JavaScript Bootstrap versi 5.3.0 untuk fungsionalitas komponen. -->
  </body> <!-- Mengakhiri bagian badan dokumen HTML. -->
</html> <!-- Mengakhiri dokumen HTML. -->

<!-- Menutup dokumen HTML -->
```

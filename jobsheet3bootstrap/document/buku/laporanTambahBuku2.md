# LAPORAN JOBSHEET 3

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html> <!-- Deklarasi tipe dokumen HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML, dengan atribut 'lang="id"' menandakan bahasa utama konten adalah Indonesia. -->
  <head> <!-- Bagian kepala dokumen yang berisi metadata tentang halaman. -->
    <meta charset="UTF-8" /> <!-- Menentukan set karakter dokumen menjadi UTF-8, mendukung berbagai karakter internasional. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport agar halaman responsif di berbagai perangkat. -->
    <title>SIMPUS-kecil || Tambah Buku</title> <!-- Menentukan judul halaman yang akan muncul di tab browser atau hasil pencarian. -->
    <link <!-- Tag 'link' digunakan untuk menghubungkan dokumen HTML dengan sumber eksternal. -->
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" <!-- Atribut 'href' menentukan lokasi file CSS Bootstrap yang akan dihubungkan. -->
      rel="stylesheet" <!-- Atribut 'rel' menunjukkan bahwa sumber eksternal ini adalah stylesheet (lembar gaya). -->
    />
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan file CSS kustom dari folder 'assets/css' untuk gaya tambahan. -->
  </head>
  <body> <!-- Bagian isi dokumen yang akan ditampilkan di browser. -->
    <header <!-- Tag 'header' mewakili bagian pengantar atau navigasi sebuah halaman. -->
      class="navbar navbar-expand-lg navbar-dark" <!-- Kelas-kelas Bootstrap untuk membuat navigasi (navbar) yang responsif dan berwarna gelap. -->
      style="background-color: #1d5b8a" <!-- Menetapkan warna latar belakang navbar menggunakan kode heksa. -->
    >
      <div class="container"> <!-- Kontainer Bootstrap untuk menampung konten agar rata tengah dan memiliki lebar maksimal yang ditentukan. -->
        <a class="navbar-brand" href="../index.html">SIMPUS-kecil</a> <!-- Link logo atau nama merek navbar, mengarah ke halaman utama. -->
        <button <!-- Tombol ini berfungsi sebagai 'hamburger menu' untuk navigasi di layar kecil. -->
          class="navbar-toggler" <!-- Kelas Bootstrap untuk tombol pengalih navbar. -->
          type="button" <!-- Menentukan tipe tombol. -->
          data-bs-toggle="collapse" <!-- Atribut data Bootstrap untuk mengaktifkan fungsi collapse (sembunyikan/tampilkan). -->
          data-bs-target="#navMenu" <!-- Menentukan target collapse yaitu elemen dengan id 'navMenu'. -->
          aria-controls="navMenu" <!-- Atribut ARIA untuk aksesibilitas, menunjukkan elemen yang dikontrol. -->
          aria-expanded="false" <!-- Atribut ARIA, menunjukkan status awal menu (tertutup). -->
          aria-label="Toggle navigation" <!-- Atribut ARIA untuk label yang dibaca oleh screen reader. -->
        >
          <span class="navbar-toggler-icon"></span> <!-- Ikon hamburger yang ditampilkan di dalam tombol. -->
        </button>
        <nav class="collapse navbar-collapse" id="navMenu"> <!-- Bagian navigasi yang akan disembunyikan/ditampilkan (collapse) di layar kecil. -->
          <ul class="navbar-nav ms-auto"> <!-- Daftar item navigasi dengan kelas Bootstrap untuk gaya dan penempatan ke kanan (margin-start auto). -->
            <li class="nav-item"> <!-- Item daftar navigasi. -->
              <a class="nav-link" href="../index.html">Home</a> <!-- Link navigasi ke halaman Home. -->
            </li>
            <li class="nav-item"> <!-- Item daftar navigasi. -->
              <a class="nav-link" href="list.html">Daftar Buku</a> <!-- Link navigasi ke halaman Daftar Buku. -->
            </li>
            <li class="nav-item"> <!-- Item daftar navigasi. -->
              <a class="nav-link active" href="tambah.html">Tambah Buku</a> <!-- Link navigasi ke halaman Tambah Buku, dengan kelas 'active' menandakan halaman saat ini. -->
            </li>
            <li class="nav-item"> <!-- Item daftar navigasi. -->
              <a class="nav-link" href="../anggota/list.html">Daftar Anggota</a> <!-- Link navigasi ke halaman Daftar Anggota. -->
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="container my-4"> <!-- Bagian utama konten halaman, diatur dalam kontainer Bootstrap dengan margin vertikal. -->
      <div class="card shadow-sm mb-4"> <!-- Kartu Bootstrap dengan bayangan lembut dan margin bawah. -->
        <div class="card-body"> <!-- Isi dari kartu Bootstrap. -->
          <h2 class="card-title mb-3">Tambah Buku</h2> <!-- Judul kartu untuk menambahkan buku, dengan margin bawah. -->
          <form> <!-- Memulai formulir untuk mengumpulkan data input. -->
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="judul" class="form-label">Judul</label> <!-- Label untuk input judul buku. -->
              <input <!-- Elemen input untuk judul buku. -->
                type="text" <!-- Tipe input adalah teks. -->
                class="form-control" <!-- Kelas Bootstrap untuk gaya kontrol formulir. -->
                id="judul" <!-- ID unik untuk input, terhubung dengan label 'for'. -->
                name="judul" <!-- Nama input, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat input ini wajib diisi. -->
              />
            </div>
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="pengarang" class="form-label">Pengarang</label> <!-- Label untuk input nama pengarang. -->
              <input <!-- Elemen input untuk nama pengarang. -->
                type="text" <!-- Tipe input adalah teks. -->
                class="form-control" <!-- Kelas Bootstrap untuk gaya kontrol formulir. -->
                id="pengarang" <!-- ID unik untuk input, terhubung dengan label 'for'. -->
                name="pengarang" <!-- Nama input, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat input ini wajib diisi. -->
              />
            </div>
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="tahun" class="form-label">Tahun Terbit</label> <!-- Label untuk input tahun terbit. -->
              <input <!-- Elemen input untuk tahun terbit. -->
                type="number" <!-- Tipe input adalah angka. -->
                class="form-control" <!-- Kelas Bootstrap untuk gaya kontrol formulir. -->
                id="tahun" <!-- ID unik untuk input, terhubung dengan label 'for'. -->
                name="tahun" <!-- Nama input, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat input ini wajib diisi. -->
              />
            </div>
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="isbn" class="form-label">ISBN</label> <!-- Label untuk input ISBN. -->
              <input <!-- Elemen input untuk ISBN. -->
                type="text" <!-- Tipe input adalah teks. -->
                class="form-control" <!-- Kelas Bootstrap untuk gaya kontrol formulir. -->
                id="isbn" <!-- ID unik untuk input, terhubung dengan label 'for'. -->
                name="isbn" <!-- Nama input, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat input ini wajib diisi. -->
              />
            </div>
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="stok" class="form-label">Stok</label> <!-- Label untuk input jumlah stok buku. -->
              <input <!-- Elemen input untuk stok buku. -->
                type="number" <!-- Tipe input adalah angka. -->
                class="form-control" <!-- Kelas Bootstrap untuk gaya kontrol formulir. -->
                id="stok" <!-- ID unik untuk input, terhubung dengan label 'for'. -->
                name="stok" <!-- Nama input, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat input ini wajib diisi. -->
              />
            </div>
            <div class="mb-3"> <!-- Div untuk menampung elemen form dengan margin bawah. -->
              <label for="Kategori" class="form-label">Kategori</label> <!-- Label untuk input pilihan kategori. -->
              <select <!-- Elemen select (dropdown) untuk memilih kategori. -->
                class="form-select" <!-- Kelas Bootstrap untuk gaya dropdown. -->
                id="Kategori" <!-- ID unik untuk select, terhubung dengan label 'for'. -->
                name="Kategori" <!-- Nama select, digunakan saat data formulir dikirim. -->
                required <!-- Atribut 'required' membuat pilihan ini wajib. -->
              >
                <option value="Fiksi">Fiksi</option> <!-- Opsi kategori 'Fiksi'. -->
                <option value="Non-Fiksi">Non-Fiksi</option> <!-- Opsi kategori 'Non-Fiksi'. -->
                <option value="Referensi">Referensi</option> <!-- Opsi kategori 'Referensi'. -->
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button> <!-- Tombol untuk mengirimkan data formulir, dengan gaya Bootstrap 'primary'. -->
          </form> <!-- Menutup tag formulir. -->
        </div>
      </div>
    </main>

    <footer class="text-center text-secondary py-3 small"> <!-- Bagian footer halaman, teks rata tengah, warna sekunder, padding vertikal, dan ukuran teks kecil. -->
      <p class="mb-0"> <!-- Paragraf untuk teks copyright, tanpa margin bawah. -->
        &copy; 2026 SIMPUS-kecil &mdash; Jobsheet 3 (Bootstrap) <!-- Teks copyright dan informasi jobsheet. -->
      </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Menghubungkan file JavaScript Bootstrap yang diperlukan untuk fungsionalitas komponen seperti navbar toggler. -->
  </body> <!-- Menutup tag body dokumen HTML. -->
</html> <!-- Menutup tag HTML. -->

```

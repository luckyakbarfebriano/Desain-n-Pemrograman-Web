# LAPORAN JOBSHEET 1 index.html

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html>
<!-- Deklarasi tipe dokumen HTML5. -->
<html lang="id">
  <!-- Elemen root dokumen HTML dengan atribut bahasa Indonesia. -->
  <head>
    <!-- Bagian head dokumen yang berisi metadata dan link ke resource eksternal. -->
    <meta charset="UTF-8" />
    <!-- Mengatur encoding karakter dokumen menjadi UTF-8. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Mengatur viewport untuk responsivitas di berbagai perangkat. -->
    <title>SIMPUS-kecil || HOME</title>
    <!-- Judul halaman yang muncul di tab browser. -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- URL stylesheet Bootstrap. -->
    <!-- Menghubungkan ke stylesheet Bootstrap dari CDN. -->
    <!-- Menentukan hubungan sebagai stylesheet. -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Menghubungkan ke stylesheet kustom. -->
  </head>
  <!-- Penutup bagian head. -->
  <body>
    <!-- Bagian body dokumen yang berisi konten yang terlihat oleh pengguna. -->
    <header
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #1d5b8a"
    >
      <!-- Kelas Bootstrap untuk navbar responsif dan gelap. -->
      <!-- Inline style untuk warna latar belakang navbar. -->
      <!-- Elemen header yang berisi navigasi utama. -->
      <div class="container">
        <!-- Kontainer Bootstrap untuk membatasi lebar konten. -->
        <a class="navbar-brand" href="#">SIMPUS-kecil</a>
        <!-- Brand atau logo navbar yang mengarah ke '#' (tidak ada tujuan spesifik). -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
          aria-controls="navMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <!-- Kelas Bootstrap untuk tombol toggler. -->
          <!-- Tipe tombol. -->
          <!-- Atribut data Bootstrap untuk mengaktifkan fitur collapse. -->
          <!-- Target ID elemen yang akan di-toggle (menu navigasi). -->
          <!-- Atribut ARIA untuk mengaitkan tombol dengan kontrolnya. -->
          <!-- Atribut ARIA yang menunjukkan status menu (tertutup). -->
          <!-- Atribut ARIA untuk label aksesibilitas. -->
          <!-- Tombol toggler untuk menampilkan/menyembunyikan menu navigasi di layar kecil. -->
          <span class="navbar-toggler-icon"></span>
          <!-- Ikon toggler (biasanya tiga garis). -->
        </button>
        <nav class="collapse navbar-collapse" id="navMenu">
          <!-- Menu navigasi yang bisa di-collapse. -->
          <ul class="navbar-nav ms-auto">
            <!-- Daftar item navigasi dengan margin kiri otomatis. -->
            <li class="nav-item">
              <!-- Item navigasi. -->
              <a class="nav-link" href="index.html">Home</a>
              <!-- Link navigasi ke halaman utama. -->
            </li>
            <li class="nav-item">
              <!-- Item navigasi. -->
              <a class="nav-link" href="buku/list.html">Daftar Buku</a>
              <!-- Link navigasi ke halaman daftar buku. -->
            </li>
            <li class="nav-item">
              <!-- Item navigasi. -->
              <a class="nav-link" href="buku/tambah.html">Tambah Buku</a>
              <!-- Link navigasi ke halaman tambah buku. -->
            </li>
            <li class="nav-item">
              <!-- Item navigasi. -->
              <a class="nav-link" href="anggota/list.html">Daftar Anggota</a>
              <!-- Link navigasi ke halaman daftar anggota. -->
            </li>
          </ul>
        </nav>
        <!-- Penutup elemen nav. -->
      </div>
      <!-- Penutup div container. -->
    </header>
    <!-- Penutup elemen header. -->

    <main class="container my-4">
      <!-- Elemen main yang berisi konten utama halaman dengan margin vertikal. -->
      <div class="card shadow-sm mb-4">
        <!-- Kartu Bootstrap dengan bayangan kecil dan margin bawah. -->
        <div class="card-body">
          <!-- Bagian body kartu. -->
          <h2 class="card-title">Selamat Datang di SIMPUS-kecil</h2>
          <!-- Judul kartu. -->
          <p class="card-text mb-0">
            <!-- Teks kartu dengan margin bawah nol. -->
            SIMPUS-kecil adalah aplikasi perpustakaan sederhana yang dirancang
            <!-- Teks deskripsi aplikasi. -->
            untuk memudahkan pengelolaan data buku dan anggota perpustakaan.
            <!-- Lanjutan teks deskripsi. -->
          </p>
        </div>
        <!-- Penutup div card-body. -->
      </div>
      <!-- Penutup div card. -->

      <div class="card shadow-sm mb-4">
        <!-- Kartu kedua dengan bayangan kecil dan margin bawah. -->
        <div class="card-body">
          <!-- Bagian body kartu. -->
          <h2 class="card-title mb-3">Ringkasan</h2>
          <!-- Judul ringkasan dengan margin bawah. -->
          <div class="row g-3 text-center">
            <!-- Baris Bootstrap dengan celah antar kolom dan teks tengah. -->
            <div class="col-12 col-md-4">
              <!-- Kolom yang mengambil 12 lebar di mobile dan 4 di desktop. -->
              <div class="p-3 rounded-3" style="background-color: #eef4fa">
                <!-- Div dengan padding, sudut membulat, dan warna latar belakang. -->
                <h3 class="h6 text-secondary">Total Buku</h3>
                <!-- Judul kecil untuk total buku. -->
                <p class="fs-2 fw-bold mb-0" style="color: #1d5b8a">8</p>
                <!-- Angka total buku dengan ukuran font besar dan warna. -->
              </div>
            </div>
            <div class="col-12 col-md-4">
              <!-- Kolom untuk total anggota. -->
              <div class="p-3 rounded-3" style="background-color: #eef4fa">
                <!-- Div untuk total anggota. -->
                <h3 class="h6 text-secondary">Total Anggota</h3>
                <!-- Judul kecil untuk total anggota. -->
                <p class="fs-2 fw-bold mb-0" style="color: #1d5b8a">2</p>
                <!-- Angka total anggota. -->
              </div>
            </div>
            <div class="col-12 col-md-4">
              <!-- Kolom untuk buku yang sedang dipinjam. -->
              <div class="p-3 rounded-3" style="background-color: #eef4fa">
                <!-- Div untuk buku sedang dipinjam. -->
                <h3 class="h6 text-secondary">Sedang dipinjam</h3>
                <!-- Judul kecil untuk buku sedang dipinjam. -->
                <p class="fs-2 fw-bold mb-0" style="color: #1d5b8a">3</p>
                <!-- Angka buku sedang dipinjam. -->
              </div>
            </div>
          </div>
          <!-- Penutup div row. -->
        </div>
        <!-- Penutup div card-body. -->
      </div>
      <!-- Penutup div card. -->
    </main>
    <!-- Penutup elemen main. -->

    <footer class="text-center text-secondary py-3 small">
      <!-- Elemen footer dengan teks tengah, warna sekunder, padding vertikal, dan ukuran font kecil. -->
      <p class="mb-0">
        <!-- Paragraf dengan margin bawah nol. -->
        &copy; 2026 SIMPUS-kecil &mdash; Jobsheet 3 (Bootstrap)
        <!-- Teks hak cipta dan informasi jobsheet. -->
      </p>
    </footer>
    <!-- Penutup elemen footer. -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Menghubungkan ke script JavaScript Bootstrap (bundle). -->
  </body>
  <!-- Penutup elemen body. -->
</html>
<!-- Penutup elemen html. -->
<!-- Menutup elemen root HTML. -->
```

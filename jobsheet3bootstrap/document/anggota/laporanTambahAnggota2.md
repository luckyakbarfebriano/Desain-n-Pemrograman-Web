# LAPORAN JOBSHEET 3

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!-- Deklarasi tipe dokumen sebagai HTML5. -->
<!doctype html>
<!-- Elemen root dari halaman HTML, dengan bahasa diatur ke Indonesia. -->
<html lang="id">
  <!-- Bagian head berisi metadata dan link ke file eksternal. -->
  <head>
    <!-- Mengatur encoding karakter dokumen menjadi UTF-8. -->
    <meta charset="UTF-8" />
    <!-- Mengatur viewport untuk responsivitas di berbagai perangkat, lebar sesuai lebar perangkat, skala awal 1.0. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menentukan judul halaman yang muncul di tab browser. -->
    <title>SIMPUS-kecil || Tambah Anggota</title>
    <!-- Menghubungkan ke stylesheet Bootstrap versi 5.3.0 dari CDN. -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Menghubungkan ke stylesheet kustom aplikasi. -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <!-- Bagian body berisi konten yang terlihat di halaman web. -->
  <body>
    <!-- Elemen header yang berfungsi sebagai navigasi utama, menggunakan kelas navbar Bootstrap. -->
    <header
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #1d5b8a"
    >
      <!-- Kontainer Bootstrap untuk mengatur lebar konten navbar. -->
      <div class="container">
        <!-- Brand atau nama aplikasi di navbar, yang mengarah ke halaman utama. -->
        <a class="navbar-brand" href="../index.html">SIMPUS-kecil</a>
        <!-- Tombol toggler untuk navigasi di perangkat mobile (ikon hamburger). -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
          aria-controls="navMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <!-- Ikon hamburger di dalam tombol toggler. -->
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigasi utama yang bisa dibuka/tutup, id navMenu harus sesuai dengan data-bs-target di tombol toggler. -->
        <nav class="collapse navbar-collapse" id="navMenu">
          <!-- Daftar item navigasi, menggunakan kelas ul Bootstrap. -->
          <ul class="navbar-nav ms-auto">
            <!-- Item navigasi untuk link Home. -->
            <li class="nav-item">
              <!-- Link Home. -->
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <!-- Item navigasi untuk link Daftar Buku. -->
            <li class="nav-item">
              <!-- Link Daftar Buku. -->
              <a class="nav-link" href="../buku/list.html">Daftar Buku</a>
            </li>
            <!-- Item navigasi untuk link Tambah Buku. -->
            <li class="nav-item">
              <!-- Link Tambah Buku. -->
              <a class="nav-link" href="../buku/tambah.html">Tambah Buku</a>
            </li>
            <!-- Item navigasi untuk link Daftar Anggota, dengan kelas 'active' karena ini halaman Tambah Anggota. -->
            <li class="nav-item">
              <!-- Link Daftar Anggota yang sedang aktif. -->
              <a class="nav-link active" href="list.html">Daftar Anggota</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Bagian utama konten halaman, menggunakan kontainer Bootstrap dengan margin atas/bawah 4. -->
    <main class="container my-4">
      <!-- Kartu Bootstrap dengan bayangan kecil dan margin bawah 4. -->
      <div class="card shadow-sm mb-4">
        <!-- Isi dari kartu. -->
        <div class="card-body">
          <!-- Judul kartu dengan margin bawah 3. -->
          <h2 class="card-title mb-3">Tambah Anggota</h2>
          <!-- Form untuk menambahkan data anggota. -->
          <form>
            <!-- Grup form untuk input Nama, dengan margin bawah 3. -->
            <div class="mb-3">
              <!-- Label untuk input Nama. -->
              <label for="nama" class="form-label">Nama</label>
              <!-- Input field untuk nama anggota, wajib diisi. -->
              <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                required
              />
            </div>
            <!-- Grup form untuk input No Anggota, dengan margin bawah 3. -->
            <div class="mb-3">
              <!-- Label untuk input No Anggota. -->
              <label for="no-anggota" class="form-label">No Anggota</label>
              <!-- Input field untuk nomor anggota, wajib diisi. -->
              <input
                type="text"
                class="form-control"
                id="no-anggota"
                name="no-anggota"
                required
              />
            </div>
            <!-- Grup form untuk input Alamat, dengan margin bawah 3. -->
            <div class="mb-3">
              <!-- Label untuk input Alamat. -->
              <label for="alamat" class="form-label">Alamat</label>
              <!-- Input field untuk alamat anggota, wajib diisi. -->
              <input
                type="text"
                class="form-control"
                id="alamat"
                name="alamat"
                required
              />
            </div>
            <!-- Grup form untuk input No HP, dengan margin bawah 3. -->
            <div class="mb-3">
              <!-- Label untuk input No HP. -->
              <label for="no-hp" class="form-label">No HP</label>
              <!-- Input field untuk nomor HP anggota, bertipe 'tel', wajib diisi. -->
              <input
                type="tel"
                class="form-control"
                id="no-hp"
                name="no-hp"
                required
              />
            </div>
            <!-- Tombol submit form, dengan gaya Bootstrap primary. -->
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </main>

    <!-- Bagian footer halaman, dengan teks di tengah, warna sekunder, padding vertikal 3, dan ukuran font kecil. -->
    <footer class="text-center text-secondary py-3 small">
      <!-- Paragraf untuk teks copyright di footer, dengan margin bawah 0. -->
      <p class="mb-0">
        <!-- Teks copyright. -->
        &copy; 2026 SIMPUS-kecil &mdash; Jobsheet 3 (Bootstrap)
      </p>
    </footer>

    <!-- Menghubungkan ke file JavaScript Bootstrap bundle dari CDN, untuk fungsionalitas seperti navbar toggler. -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!-- Penutup tag html. -->
```

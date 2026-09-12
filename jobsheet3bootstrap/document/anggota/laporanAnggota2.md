# LAPORAN JOBSHEET 3 list anggota

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html>
<html lang="id">
  <!-- Deklarasi tipe dokumen dan elemen HTML utama dengan bahasa Indonesia -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMPUS-kecil || Daftar Anggota</title>
    <!-- Memuat CSS Bootstrap dari CDN untuk styling responsif -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Memuat stylesheet kustom untuk gaya tambahan -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body>
    <!-- Bagian header yang berisi navigasi utama aplikasi -->
    <header
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #1d5b8a"
    >
      <div class="container">
        <!-- Logo atau nama aplikasi yang berfungsi sebagai tautan ke halaman utama -->
        <a class="navbar-brand" href="../index.html">SIMPUS-kecil</a>
        <!-- Tombol toggler untuk menu navigasi di perangkat mobile/layar kecil -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navMenu"
          aria-controls="navMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Konten navigasi yang akan ditampilkan atau disembunyikan -->
        <nav class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
            <!-- Item navigasi untuk menuju ke berbagai halaman -->
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../buku/list.html">Daftar Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../buku/tambah.html">Tambah Buku</a>
            </li>
            <li class="nav-item">
              <!-- Tautan aktif menunjukkan halaman yang sedang dilihat -->
              <a class="nav-link active" href="list.html">Daftar Anggota</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Bagian utama halaman untuk menampilkan konten spesifik -->
    <main class="container my-4">
      <!-- Kartu (card) untuk membungkus konten daftar anggota -->
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h2 class="card-title mb-3">Daftar Anggota</h2>
          <!-- Area responsif untuk tabel agar tetap rapi di berbagai ukuran layar -->
          <div class="table-responsive">
            <!-- Tabel untuk menampilkan daftar anggota -->
            <table class="table table-striped table-hover align-middle">
              <!-- Header tabel dengan kolom-kolom informasi anggota -->
              <thead class="table-dark">
                <tr>
                  <th>No Anggota</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <!-- Body tabel berisi data anggota -->
              <tbody>
                <!-- Baris contoh data anggota pertama -->
                <tr>
                  <td>A001</td>
                  <td>Siti Aminah</td>
                  <td>Malang</td>
                  <td>08123*****</td>
                  <td>
                    <!-- Tombol aksi untuk setiap anggota (Edit dan Hapus) -->
                    <button type="button" class="btn btn-warning btn-sm">
                      Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                      Hapus
                    </button>
                  </td>
                </tr>
                <!-- Baris contoh data anggota kedua -->
                <tr>
                  <td>A002</td>
                  <td>Budi Santoso</td>
                  <td>Batu</td>
                  <td>08123*****</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm">
                      Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                      Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <!-- Bagian footer halaman dengan informasi hak cipta -->
    <footer class="text-center text-secondary py-3 small">
      <p class="mb-0">
        &copy; 2026 SIMPUS-kecil &mdash; Jobsheet 3 (Bootstrap)
      </p>
    </footer>

    <!-- Memuat JavaScript Bootstrap dari CDN untuk fungsionalitas komponen seperti navbar toggler -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
```

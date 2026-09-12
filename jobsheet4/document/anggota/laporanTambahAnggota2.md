# LAPORAN JOBSHEET 4

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!-- Deklarasi tipe dokumen HTML5 untuk memastikan browser merender halaman dengan standar terbaru. -->
<!doctype html>
<!-- Elemen root dari halaman HTML, dengan atribut lang="id" untuk menunjukkan bahasa dokumen adalah Indonesia. -->
<html lang="id">
  <!-- Bagian head berisi metadata tentang dokumen, seperti judul dan link ke stylesheet. -->
  <head>
    <!-- Menentukan pengodean karakter UTF-8, penting untuk menampilkan berbagai karakter dengan benar. -->
    <meta charset="UTF-8" />
    <!-- Mengatur viewport untuk responsivitas, memastikan tampilan yang baik di berbagai perangkat. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menentukan judul halaman yang akan muncul di tab browser atau hasil pencarian. -->
    <title>SIMPUS-kecil || Tambah Anggota</title>
    <!-- Menghubungkan dokumen HTML dengan file stylesheet eksternal untuk mengatur tampilan visual. -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <!-- Bagian body berisi konten aktual dari halaman web yang terlihat oleh pengguna. -->
  <body>
    <!-- Elemen header mewakili bagian pengantar atau navigasi dari sebuah dokumen atau section. -->
    <header>
      <!-- Judul utama atau nama aplikasi yang ditampilkan di header. -->
      <h1>SIMPUS-kecil</h1>
      <!-- Elemen nav digunakan untuk menampung link navigasi utama. -->
      <nav>
        <!-- Daftar tak berurutan (unordered list) untuk menampung item-item navigasi. -->
        <ul>
          <!-- Item daftar navigasi yang mengarah ke halaman beranda. -->
          <li><a href="../index.html">Home</a></li>
          <!-- Item daftar navigasi yang mengarah ke daftar buku. -->
          <li><a href="../buku/list.html">Daftar Buku</a></li>
          <!-- Item daftar navigasi yang mengarah ke daftar anggota. -->
          <li><a href="list.html">Daftar Anggota</a></li>
          <!-- Item daftar navigasi yang mengarah ke halaman tambah anggota. -->
          <li><a href="tambah.html">Tambah Anggota</a></li>
        </ul>
      </nav>
    </header>

    <!-- Elemen main mewakili konten utama dari dokumen. -->
    <main>
      <!-- Elemen section digunakan untuk mengelompokkan konten yang berhubungan. -->
      <section>
        <!-- Judul section yang menjelaskan fungsi halaman ini. -->
        <h2>Tambah Anggota</h2>
        <!-- Elemen form digunakan untuk membuat formulir interaktif. -->
        <form>
          <!-- Elemen p untuk paragraf, digunakan di sini untuk mengelompokkan label dan input. -->
          <p>
            <!-- Label untuk input nama, terhubung ke input dengan atribut for="nama". -->
            <label for="nama">Nama:</label>
            <!-- Input teks untuk memasukkan nama, dengan id unik dan wajib diisi. -->
            <input type="text" id="nama" name="nama" required />
          </p>
          <!-- Elemen p untuk paragraf, digunakan di sini untuk mengelompokkan label dan input. -->
          <p>
            <!-- Label untuk input nomor anggota, terhubung ke input dengan atribut for="no-anggota". -->
            <label for="no-anggota">No Anggota:</label>
            <!-- Input teks untuk memasukkan nomor anggota, dengan id unik dan wajib diisi. -->
            <input type="text" id="no-anggota" name="no-anggota" required />
          </p>

          <!-- Elemen p untuk paragraf, digunakan di sini untuk mengelompokkan label dan input. -->
          <p>
            <!-- Label untuk input alamat, terhubung ke input dengan atribut for="alamat". -->
            <label for="alamat">Alamat:</label>
            <!-- Input teks untuk memasukkan alamat, dengan id unik dan wajib diisi. -->
            <input type="text" id="alamat" name="alamat" required />
          </p>
          <!-- Elemen p untuk paragraf, digunakan di sini untuk mengelompokkan label dan input. -->
          <p>
            <!-- Label untuk input nomor HP, terhubung ke input dengan atribut for="no-hp". -->
            <label for="no-hp">No HP:</label>
            <!-- Input telepon untuk memasukkan nomor HP, dengan id unik dan wajib diisi. -->
            <input type="tel" id="no-hp" name="no-hp" required />
          </p>
          <!-- Elemen p untuk paragraf, digunakan di sini untuk mengelompokkan tombol. -->
          <p>
            <!-- Tombol untuk mengirimkan (submit) data formulir. -->
            <button type="submit">Simpan</button>
          </p>
        </form>
      </section>
    </main>

    <!-- Elemen footer mewakili bagian bawah halaman, biasanya berisi informasi hak cipta. -->
    <footer>
      <!-- Paragraf yang menampilkan informasi hak cipta dan nama proyek. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 1.</p>
    </footer>
  </body>
</html>
```

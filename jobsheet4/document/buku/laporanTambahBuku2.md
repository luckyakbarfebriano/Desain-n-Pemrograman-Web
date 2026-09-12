# LAPORAN JOBSHEET 4

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html>
<!-- Mendefinisikan tipe dokumen sebagai HTML5 -->
<html lang="id">
  <!-- Elemen root dari halaman HTML, dengan atribut bahasa Indonesia -->
  <head>
    <!-- Bagian kepala dokumen yang berisi metadata -->
    <meta charset="UTF-8" />
    <!-- Menentukan pengkodean karakter UTF-8 untuk mendukung berbagai karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Mengatur viewport agar responsif di berbagai perangkat -->
    <title>SIMPUS-kecil || Tambah Buku</title>
    <!-- Menentukan judul halaman yang muncul di tab browser -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- Menghubungkan ke file stylesheet eksternal untuk styling -->
  </head>
  <body>
    <!-- Bagian tubuh dokumen yang berisi konten yang terlihat -->
    <header>
      <!-- Elemen header yang berisi konten pengantar atau navigasi -->
      <h1>SIMPUS-kecil</h1>
      <!-- Judul utama atau nama aplikasi -->
      <nav>
        <!-- Elemen navigasi untuk link-link -->
        <ul>
          <!-- Daftar tak berurutan untuk item navigasi -->
          <li><a href="../index.html">Home</a></li>
          <!-- Item daftar dengan link ke halaman Home -->
          <li><a href="../buku/list.html">Daftar Buku</a></li>
          <!-- Item daftar dengan link ke halaman Daftar Buku -->
          <li><a href="../buku/tambah.html">Tambah Buku</a></li>
          <!-- Item daftar dengan link ke halaman Tambah Buku -->
          <li><a href="list.html">Daftar Anggota</a></li>
          <!-- Item daftar dengan link ke halaman Daftar Anggota -->
        </ul>
      </nav>
      <!-- Penutup elemen navigasi -->
    </header>
    <!-- Penutup elemen header -->

    <main>
      <!-- Konten utama dari dokumen -->
      <section>
        <!-- Bagian mandiri dari konten dokumen -->
        <h2>Tambah Buku</h2>
        <!-- Sub-judul untuk bagian ini -->
        <form>
          <!-- Elemen form untuk mengumpulkan input pengguna -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="judul">Judul:</label>
            <!-- Label untuk input judul buku -->
            <input type="text" id="judul" name="judul" required />
            <!-- Input teks untuk judul, dengan ID, nama, dan atribut wajib diisi -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="pengarang">Pengarang:</label>
            <!-- Label untuk input pengarang buku -->
            <input type="text" id="pengarang" name="pengarang" required />
            <!-- Input teks untuk pengarang, dengan ID, nama, dan atribut wajib diisi -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="tahun">Tahun Terbit:</label>
            <!-- Label untuk input tahun terbit -->
            <input type="number" id="tahun" name="tahun" required />
            <!-- Input angka untuk tahun terbit, dengan ID, nama, dan atribut wajib diisi -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="isbn">ISBN:</label>
            <!-- Label untuk input ISBN buku -->
            <input type="text" id="isbn" name="isbn" required />
            <!-- Input teks untuk ISBN, dengan ID, nama, dan atribut wajib diisi -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="stok">Stok:</label>
            <!-- Label untuk input stok buku -->
            <input type="number" id="stok" name="stok" required />
            <!-- Input angka untuk stok, dengan ID, nama, dan atribut wajib diisi -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input -->
            <label for="Kategori">Kategori:</label><br />
            <!-- Label untuk pilihan kategori, diikuti dengan baris baru -->
            <select id="Kategori" name="Kategori" required>
              <!-- Dropdown menu untuk memilih kategori, dengan ID, nama, dan atribut wajib diisi -->
              <option value="Fiksi">Fiksi</option>
              <!-- Opsi dropdown untuk kategori Fiksi -->
              <option value="Non-Fiksi">Non-Fiksi</option>
              <!-- Opsi dropdown untuk kategori Non-Fiksi -->
              <option value="Referensi">Referensi</option>
              <!-- Opsi dropdown untuk kategori Referensi -->
            </select>
            <!-- Penutup elemen select -->
          </p>
          <!-- Penutup paragraf -->
          <p>
            <!-- Paragraf untuk tombol submit -->
            <button type="submit">Simpan</button>
            <!-- Tombol untuk mengirimkan data form -->
          </p>
          <!-- Penutup paragraf -->
        </form>
        <!-- Penutup elemen form -->
      </section>
      <!-- Penutup elemen section -->
    </main>
    <!-- Penutup elemen main -->

    <footer>
      <!-- Elemen footer yang berisi informasi hak cipta atau kontak -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 1.</p>
      <!-- Paragraf yang menampilkan informasi hak cipta -->
    </footer>
    <!-- Penutup elemen footer -->
  </body>
  <!-- Penutup elemen body -->
</html>
<!-- Penutup elemen html -->
```

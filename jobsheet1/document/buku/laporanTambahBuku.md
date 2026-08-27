# LAPORAN JOBSHEET 1 index.html

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html>
<!-- Deklarasi tipe dokumen sebagai HTML5 -->
<html lang="id">
  <!-- Elemen root dokumen HTML, bahasa utama konten adalah Indonesia -->
  <head>
    <!-- Bagian head dokumen yang berisi metadata tentang halaman web -->
    <meta charset="UTF-8" />
    <!-- Mengatur pengkodean karakter dokumen menjadi UTF-8, mendukung berbagai karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Mengatur viewport agar responsif di berbagai perangkat -->
    <title>SIMPUS-kecil || Tambah Buku</title>
    <!-- Judul halaman web yang muncul di tab browser -->
  </head>
  <!-- Penutup bagian head dokumen -->
  <body>
    <!-- Bagian body dokumen yang berisi seluruh konten yang terlihat oleh pengguna -->
    <header>
      <!-- Elemen header yang berisi konten pengantar -->
      <h1>SIMPUS-kecil</h1>
      <!-- Judul utama halaman -->
      <nav>
        <!-- Elemen navigasi yang berisi link-link navigasi -->
        <ul>
          <!-- Daftar tak berurut untuk item navigasi -->
          <li><a href="../index.html">Home</a></li>
          <!-- Item daftar dan link ke halaman utama -->
          <li><a href="../buku/list.html">Daftar Buku</a></li>
          <!-- Item daftar dan link ke halaman daftar buku -->
          <li><a href="../buku/tambah.html">Tambah Buku</a></li>
          <!-- Item daftar dan link ke halaman tambah buku -->
          <li><a href="list.html">Daftar Anggota</a></li>
          <!-- Item daftar dan link ke halaman daftar anggota -->
        </ul>
        <!-- Penutup daftar tak berurut -->
      </nav>
      <!-- Penutup elemen navigasi -->
    </header>
    <!-- Penutup elemen header -->

    <main>
      <!-- Elemen main yang berisi konten utama halaman -->
      <section>
        <!-- Bagian konten yang terpisah atau mandiri -->
        <h2>Tambah Buku</h2>
        <!-- Sub-judul untuk bagian ini -->
        <form>
          <!-- Elemen form untuk mengumpulkan input dari pengguna -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input judul -->
            <label for="judul">Judul:</label>
            <!-- Label untuk input judul -->
            <input type="text" id="judul" name="judul" required />
            <!-- Input teks untuk judul -->
          </p>
          <!-- Penutup paragraf judul -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input pengarang -->
            <label for="pengarang">Pengarang:</label>
            <!-- Label untuk input pengarang -->
            <input type="text" id="pengarang" name="pengarang" required />
            <!-- Input teks untuk pengarang -->
          </p>
          <!-- Penutup paragraf pengarang -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input tahun terbit -->
            <label for="tahun">Tahun Terbit:</label>
            <!-- Label untuk input tahun terbit -->
            <input type="number" id="tahun" name="tahun" required />
            <!-- Input angka untuk tahun terbit -->
          </p>
          <!-- Penutup paragraf tahun terbit -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input ISBN -->
            <label for="isbn">ISBN:</label>
            <!-- Label untuk input ISBN -->
            <input type="text" id="isbn" name="isbn" required />
            <!-- Input teks untuk ISBN -->
          </p>
          <!-- Penutup paragraf ISBN -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input stok -->
            <label for="stok">Stok:</label>
            <!-- Label untuk input stok -->
            <input type="number" id="stok" name="stok" required />
            <!-- Input angka untuk stok -->
          </p>
          <!-- Penutup paragraf stok -->
          <p>
            <!-- Paragraf untuk mengelompokkan label dan input kategori -->
            <label for="Kategori">Kategori:</label><br />
            <!-- Label untuk input kategori, diikuti dengan baris baru -->
            <select id="Kategori" name="Kategori" required>
              <!-- Dropdown (select) untuk memilih kategori -->
              <option value="Fiksi">Fiksi</option>
              <!-- Pilihan kategori Fiksi -->
              <option value="Non-Fiksi">Non-Fiksi</option>
              <!-- Pilihan kategori Non-Fiksi -->
              <option value="Referensi">Referensi</option>
              <!-- Pilihan kategori Referensi -->
            </select>
            <!-- Penutup dropdown kategori -->
          </p>
          <!-- Penutup paragraf kategori -->
          <p>
            <!-- Paragraf untuk tombol submit -->
            <button type="submit">Simpan</button>
            <!-- Tombol untuk mengirimkan formulir -->
          </p>
          <!-- Penutup paragraf tombol submit -->
        </form>
        <!-- Penutup elemen form -->
      </section>
      <!-- Penutup bagian konten -->
    </main>
    <!-- Penutup elemen main -->

    <footer>
      <!-- Elemen footer yang berisi informasi hak cipta atau informasi terkait lainnya -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 1.</p>
      <!-- Paragraf dengan informasi hak cipta dan nama proyek -->
    </footer>
    <!-- Penutup elemen footer -->
  </body>
  <!-- Penutup elemen body -->
</html>
<!-- Penutup elemen HTML -->
```

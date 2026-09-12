# LAPORAN JOBSHEET 4

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```html
<!doctype html> <!-- Mendefinisikan tipe dokumen sebagai HTML5. -->
<html lang="id"> <!-- Memulai dokumen HTML dan menentukan bahasa utama halaman adalah Indonesia. -->
  <head> <!-- Membuka bagian head dokumen, yang berisi metadata tentang halaman. -->
    <meta charset="UTF-8" /> <!-- Menentukan pengkodean karakter dokumen menjadi UTF-8, untuk mendukung berbagai karakter. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Mengatur viewport untuk responsivitas di berbagai perangkat, mengatur lebar sesuai perangkat dan skala awal 1.0. -->
    <title>SIMPUS-kecil || Daftar Buku</title> <!-- Menentukan judul halaman yang akan muncul di tab browser. -->
    <link rel="stylesheet" href="../assets/css/style.css" /> <!-- Menghubungkan dokumen HTML dengan file CSS eksternal untuk styling. -->
  </head> <!-- Menutup bagian head dokumen. -->
  <body> <!-- Membuka bagian body dokumen, yang berisi semua konten yang terlihat oleh pengguna. -->
    <header> <!-- Membuka elemen header, biasanya berisi judul situs dan navigasi utama. -->
      <h1>SIMPUS-kecil</h1> <!-- Menampilkan judul utama situs dalam ukuran besar. -->
      <input type="checkbox" id="nav-toggle" class="nav-toggle"> <!-- Membuat checkbox tersembunyi yang berfungsi sebagai toggle untuk navigasi mobile. -->
      <label for="nav-toggle" class="nav-toggle-label">&#9776</label> <!-- Label untuk checkbox, menampilkan ikon hamburger menu (simbol &#9776). -->
      <nav> <!-- Membuka elemen navigasi, berisi tautan-tautan penting. -->
        <ul> <!-- Membuka daftar tak berurutan untuk item-item navigasi. -->
          <li><a href="../index.html">Home</a></li> <!-- Item daftar dengan tautan ke halaman beranda (index.html). -->
          <li><a href="list.html">Daftar Buku</a></li> <!-- Item daftar dengan tautan ke halaman daftar buku (list.html). -->
          <li><a href="tambah.html">Tambah Buku</a></li> <!-- Item daftar dengan tautan ke halaman tambah buku (tambah.html). -->
          <li><a href="../anggota/list.html">Daftar Anggota</a></li> <!-- Item daftar dengan tautan ke halaman daftar anggota (anggota/list.html). -->
        </ul> <!-- Menutup daftar tak berurutan. -->
      </nav> <!-- Menutup elemen navigasi. -->
    </header> <!-- Menutup elemen header. -->

    <main> <!-- Membuka elemen main, yang berisi konten utama dan unik dari dokumen. -->
      <section> <!-- Membuka elemen section, mengelompokkan konten terkait. -->
        <h2>Daftar Buku</h2> <!-- Menampilkan judul sub-bagian "Daftar Buku" dalam ukuran sedang. -->
        <table> <!-- Membuka tabel untuk menampilkan data buku. -->
          <thead> <!-- Membuka bagian thead (header tabel), berisi judul-judul kolom. -->
            <tr> <!-- Membuka baris tabel untuk header. -->
              <th>Judul</th> <!-- Header kolom untuk "Judul". -->
              <th>Pengarang</th> <!-- Header kolom untuk "Pengarang". -->
              <th>Tahun</th> <!-- Header kolom untuk "Tahun". -->
              <th>Stok</th> <!-- Header kolom untuk "Stok". -->
              <th>Aksi</th> <!-- Header kolom untuk "Aksi" (tombol edit/hapus). -->
            </tr> <!-- Menutup baris tabel header. -->
          </thead> <!-- Menutup bagian thead. -->
          <tbody> <!-- Membuka bagian tbody (body tabel), berisi data baris. -->
            <tr> <!-- Membuka baris pertama data buku. -->
              <td>The Psycology of Money</td> <!-- Data kolom "Judul". -->
              <td>Morgan Housel</td> <!-- Data kolom "Pengarang". -->
              <td>2020</td> <!-- Data kolom "Tahun". -->
              <td>5</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris pertama data buku. -->
            <tr> <!-- Membuka baris kedua data buku. -->
              <td>Crypto Trading Guide</td> <!-- Data kolom "Judul". -->
              <td>Timothy Ronald, Kalimasada</td> <!-- Data kolom "Pengarang". -->
              <td>2023</td> <!-- Data kolom "Tahun". -->
              <td>3</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris kedua data buku. -->
            <tr> <!-- Membuka baris ketiga data buku. -->
              <td>The Richest Man in Babylon</td> <!-- Data kolom "Judul". -->
              <td>George Samuel Clason</td> <!-- Data kolom "Pengarang". -->
              <td>1926</td> <!-- Data kolom "Tahun". -->
              <td>10</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris ketiga data buku. -->
            <tr> <!-- Membuka baris keempat data buku. -->
              <td>Laskar Pelangi</td> <!-- Data kolom "Judul". -->
              <td>Andrea Hirata</td> <!-- Data kolom "Pengarang". -->
              <td>2005</td> <!-- Data kolom "Tahun". -->
              <td>4</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris keempat data buku. -->
            <tr> <!-- Membuka baris kelima data buku. -->
              <td>Bumi Manusia</td> <!-- Data kolom "Judul". -->
              <td>Pramoedya Ananta Toer</td> <!-- Data kolom "Pengarang". -->
              <td>1980</td> <!-- Data kolom "Tahun". -->
              <td>2</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris kelima data buku. -->
            <tr> <!-- Membuka baris keenam data buku. -->
              <td>Negeri 5 Menara</td> <!-- Data kolom "Judul". -->
              <td>Ahmad Fuadi</td> <!-- Data kolom "Pengarang". -->
              <td>2009</td> <!-- Data kolom "Tahun". -->
              <td>0</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris keenam data buku. -->
            <tr> <!-- Membuka baris ketujuh data buku. -->
              <td>Atomic Habits</td> <!-- Data kolom "Judul". -->
              <td>James Clear</td> <!-- Data kolom "Pengarang". -->
              <td>2018</td> <!-- Data kolom "Tahun". -->
              <td>7</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris ketujuh data buku. -->
            <tr> <!-- Membuka baris kedelapan data buku. -->
              <td>Filosifi Teras</td> <!-- Data kolom "Judul". -->
              <td>Henry Manampiring</td> <!-- Data kolom "Pengarang". -->
              <td>2018</td> <!-- Data kolom "Tahun". -->
              <td>5</td> <!-- Data kolom "Stok". -->
              <td> <!-- Data kolom "Aksi", berisi tombol. -->
                <button type="button">Edit</button> <!-- Tombol "Edit" untuk baris ini. -->
                <button type="button">Hapus</button> <!-- Tombol "Hapus" untuk baris ini. -->
              </td> <!-- Menutup data kolom "Aksi". -->
            </tr> <!-- Menutup baris kedelapan data buku. -->
          </tbody> <!-- Menutup bagian tbody. -->
        </table> <!-- Menutup tabel. -->
      </section> <!-- Menutup elemen section. -->
    </main> <!-- Menutup elemen main. -->

    <footer> <!-- Membuka elemen footer, berisi informasi seperti hak cipta. -->
      <p>&copy; 2026 SIMPUS-kecil &mdash; Jobsheet 1.</p> <!-- Menampilkan teks hak cipta. -->
    </footer> <!-- Menutup elemen footer. -->
  </body> <!-- Menutup bagian body dokumen. -->
</html> <!-- Menutup dokumen HTML. -->

```

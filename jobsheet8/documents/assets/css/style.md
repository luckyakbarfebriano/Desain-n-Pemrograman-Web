# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 25410702134

```css
* {
  /* Memilih semua elemen HTML. */
  box-sizing: border-box; /* Memasukkan padding dan border ke dalam ukuran elemen. */
  margin: 0; /* Menghapus margin bawaan browser. */
  padding: 0; /* Menghapus padding bawaan browser. */
} /* Menutup aturan untuk semua elemen. */

body {
  /* Mengatur tampilan utama halaman. */
  font-family:
    "Poppins", sans-serif; /* Menggunakan font Poppins atau sans-serif sebagai cadangan. */
  color: #f3f0fa; /* Mengatur warna teks utama. */
  background-color: #0a0a0f; /* Mengatur warna latar belakang halaman. */
  line-height: 1.5; /* Mengatur jarak antarbaris teks. */
} /* Menutup aturan body. */

a {
  /* Mengatur semua tautan. */
  color: #a78bfa; /* Memberi warna ungu pada tautan. */
  text-decoration: none; /* Menghilangkan garis bawah bawaan tautan. */
} /* Menutup aturan tautan. */

a:hover {
  /* Mengatur tampilan tautan saat kursor berada di atasnya. */
  text-decoration: underline; /* Menampilkan garis bawah sebagai tanda interaksi. */
} /* Menutup aturan hover tautan. */

.back-to-menu {
  /* Mengatur tautan untuk kembali ke menu. */
  display: inline-block; /* Membuat elemen dapat menerima ukuran dan margin seperti blok. */
  margin: 1rem 1.5rem 0; /* Memberi jarak atas dan samping elemen. */
  font-size: 0.9rem; /* Mengatur ukuran teks tautan. */
  font-weight: 600; /* Membuat teks sedikit lebih tebal. */
} /* Menutup aturan tautan kembali. */

header {
  /* Mengatur bagian kepala halaman. */
  background-color: #17141f; /* Memberi warna latar header. */
  border-bottom: 1px solid #2a2140; /* Memberi garis pembatas di bawah header. */
  color: #fff; /* Mengatur warna teks header. */
  padding: 1rem 1.5rem; /* Memberi ruang dalam header. */
  display: flex; /* Mengaktifkan tata letak Flexbox. */
  align-items: center; /* Menyelaraskan isi secara vertikal. */
  justify-content: space-between; /* Memberi jarak maksimum antarisi header. */
  flex-wrap: wrap; /* Mengizinkan isi berpindah baris jika ruang tidak cukup. */
} /* Menutup aturan header. */

header h1 {
  /* Mengatur judul utama di dalam header. */
  font-size: 1.4rem; /* Mengatur ukuran judul. */
  color: #a855f7; /* Memberi warna ungu pada judul. */
} /* Menutup aturan judul header. */

.nav-toggle-label {
  /* Mengatur tombol label untuk membuka navigasi. */
  display: none; /* Menyembunyikan tombol pada tampilan besar. */
  font-size: 1.6rem; /* Mengatur ukuran ikon atau teks tombol. */
  color: #fff; /* Mengatur warna tombol. */
  background: none; /* Menghapus warna latar tombol. */
  border: none; /* Menghapus garis tepi tombol. */
  cursor: pointer; /* Mengubah kursor menjadi penunjuk saat diarahkan. */
} /* Menutup aturan tombol navigasi. */

header nav ul {
  /* Mengatur daftar menu navigasi. */
  list-style: none; /* Menghilangkan tanda bullet daftar. */
  display: flex; /* Menyusun item menu secara fleksibel. */
  gap: 1.25rem; /* Memberi jarak antaritem menu. */
} /* Menutup aturan daftar navigasi. */

header nav a {
  /* Mengatur tautan di dalam navigasi. */
  color: #f3f0fa; /* Memberi warna terang pada tautan menu. */
  font-weight: 500; /* Membuat teks menu sedikit tebal. */
} /* Menutup aturan tautan navigasi. */

main {
  /* Mengatur area konten utama. */
  max-width: 1000px; /* Membatasi lebar maksimum konten. */
  margin: 2rem auto; /* Memberi jarak vertikal dan memusatkan konten. */
  padding: 0 1.5rem; /* Memberi ruang di sisi kiri dan kanan konten. */
} /* Menutup aturan main. */

section {
  /* Mengatur setiap bagian konten. */
  background-color: #17141f; /* Memberi warna latar bagian. */
  border: 1px solid #2a2140; /* Memberi garis tepi bagian. */
  border-radius: 8px; /* Membulatkan sudut bagian. */
  padding: 1.5rem; /* Memberi ruang di dalam bagian. */
  margin-bottom: 1.5rem; /* Memberi jarak antarbagian. */
} /* Menutup aturan section. */

section h2 {
  /* Mengatur subjudul setiap bagian. */
  margin-bottom: 1rem; /* Memberi jarak antara subjudul dan isi. */
  color: #a855f7; /* Memberi warna ungu pada subjudul. */
} /* Menutup aturan subjudul section. */

main section:nth-of-type(2) {
  /* Mengatur bagian kedua di dalam main. */
  display: grid; /* Mengaktifkan tata letak CSS Grid. */
  grid-template-columns: repeat(
    3,
    1fr
  ); /* Membuat tiga kolom dengan lebar sama. */
  gap: 1rem; /* Memberi jarak antaritem grid. */
} /* Menutup aturan grid bagian kedua. */

main section:nth-of-type(2) article {
  /* Mengatur setiap artikel pada bagian kedua. */
  background-color: #1f1a2b; /* Memberi warna latar kartu artikel. */
  border-radius: 8px; /* Membulatkan sudut kartu artikel. */
  padding: 1.25rem; /* Memberi ruang di dalam kartu. */
  text-align: center; /* Meratakan teks ke tengah. */
} /* Menutup aturan artikel. */

main section:nth-of-type(2) h2 {
  /* Mengatur judul grid pada bagian kedua. */
  grid-column: 1 / -1; /* Membuat judul membentang dari kolom pertama sampai terakhir. */
} /* Menutup aturan judul grid. */

main section:nth-of-type(2) article h3 {
  /* Mengatur judul kecil pada kartu. */
  font-size: 0.95rem; /* Mengatur ukuran judul kartu. */
  color: #b6aecb; /* Memberi warna abu-abu keunguan pada judul. */
  margin-bottom: 0.5rem; /* Memberi jarak di bawah judul. */
} /* Menutup aturan judul kecil kartu. */

main section:nth-of-type(2) article p {
  /* Mengatur nilai atau informasi utama pada kartu. */
  font-size: 1.8rem; /* Membuat nilai tampil lebih besar. */
  font-weight: 700; /* Membuat nilai tampil tebal. */
  color: #a855f7; /* Memberi warna ungu pada nilai. */
} /* Menutup aturan paragraf kartu. */

.table-responsive {
  /* Mengatur pembungkus tabel agar responsif. */
  overflow-x: auto; /* Menambahkan scroll horizontal jika tabel terlalu lebar. */
} /* Menutup aturan pembungkus tabel. */

table {
  /* Mengatur tampilan tabel. */
  width: 100%; /* Membuat tabel memenuhi lebar wadahnya. */
  border-collapse: collapse; /* Menggabungkan garis antarborder sel. */
} /* Menutup aturan tabel. */

th, /* Memilih semua sel judul tabel. */
td {
  /* Memilih semua sel isi tabel. */
  text-align: left; /* Meratakan teks sel ke kiri. */
  padding: 0.65rem 0.75rem; /* Memberi ruang di dalam setiap sel. */
  border-bottom: 1px solid #2a2140; /* Memberi garis pemisah di bawah sel. */
} /* Menutup aturan sel tabel. */

thead {
  /* Mengatur bagian kepala tabel. */
  background-color: #2a2140; /* Memberi warna latar kepala tabel. */
  color: #f3f0fa; /* Memberi warna terang pada teks kepala tabel. */
} /* Menutup aturan kepala tabel. */

tbody tr:hover {
  /* Mengatur baris tabel saat kursor berada di atasnya. */
  background-color: #1f1a2b; /* Mengubah warna latar untuk menandai baris aktif. */
} /* Menutup aturan hover baris. */

td button {
  /* Mengatur tombol di dalam sel tabel. */
  padding: 0.35rem 0.7rem; /* Memberi ruang di dalam tombol. */
  margin-right: 0.35rem; /* Memberi jarak antar tombol. */
  border: none; /* Menghapus garis tepi tombol. */
  border-radius: 4px; /* Membulatkan sudut tombol. */
  cursor: pointer; /* Menampilkan kursor penunjuk pada tombol. */
  font-size: 0.85rem; /* Mengatur ukuran teks tombol. */
} /* Menutup aturan tombol tabel. */

td button:first-of-type {
  /* Mengatur tombol pertama pada setiap sel tabel. */
  background-color: #f0ad4e; /* Memberi warna kuning-oranye pada tombol pertama. */
  color: #fff; /* Memberi warna putih pada teks tombol. */
} /* Menutup aturan tombol pertama. */

td button.btn-hapus {
  /* Mengatur tombol hapus. */
  background-color: #d9534f; /* Memberi warna merah sebagai tanda tindakan hapus. */
  color: #fff; /* Memberi warna putih pada teks tombol hapus. */
} /* Menutup aturan tombol hapus. */

form p {
  /* Mengatur paragraf di dalam formulir. */
  margin-bottom: 1rem; /* Memberi jarak antar kelompok input. */
} /* Menutup aturan paragraf formulir. */

form label {
  /* Mengatur label pada formulir. */
  display: block; /* Membuat label menempati satu baris penuh. */
  margin-bottom: 0.35rem; /* Memberi jarak antara label dan input. */
  font-weight: 600; /* Membuat teks label lebih tebal. */
  color: #b6aecb; /* Memberi warna abu-abu keunguan pada label. */
} /* Menutup aturan label formulir. */

form input, /* Memilih input pada formulir. */
form select {
  /* Memilih menu pilihan pada formulir. */
  width: 100%; /* Membuat kontrol memenuhi lebar wadah. */
  max-width: 400px; /* Membatasi lebar maksimum kontrol. */
  padding: 0.55rem 0.7rem; /* Memberi ruang di dalam kontrol. */
  border: 1px solid #2a2140; /* Memberi garis tepi kontrol. */
  border-radius: 4px; /* Membulatkan sudut kontrol. */
  font-size: 1rem; /* Mengatur ukuran teks kontrol. */
  background-color: #1f1a2b; /* Memberi warna latar kontrol. */
  color: #f3f0fa; /* Mengatur warna teks kontrol. */
} /* Menutup aturan input dan select. */

form button[type="submit"] {
  /* Mengatur tombol kirim formulir. */
  background-color: #9333ea; /* Memberi warna ungu pada tombol kirim. */
  color: #fff; /* Memberi warna putih pada teks tombol. */
  border: none; /* Menghapus garis tepi tombol. */
  padding: 0.55rem 1rem; /* Memberi ruang di dalam tombol. */
  border-radius: 4px; /* Membulatkan sudut tombol. */
  font-size: 1rem; /* Mengatur ukuran teks tombol. */
  cursor: pointer; /* Menampilkan kursor penunjuk pada tombol. */
} /* Menutup aturan tombol kirim. */

form button[type="submit"]:hover {
  /* Mengatur tombol kirim saat kursor berada di atasnya. */
  background-color: #7e22ce; /* Menggelapkan warna tombol sebagai umpan balik visual. */
} /* Menutup aturan hover tombol kirim. */

.search-box {
  /* Mengatur wadah kolom pencarian. */
  margin-bottom: 1rem; /* Memberi jarak di bawah kolom pencarian. */
} /* Menutup aturan wadah pencarian. */

.search-box input {
  /* Mengatur input pencarian. */
  width: 100%; /* Membuat input memenuhi lebar wadah. */
  max-width: 320px; /* Membatasi lebar maksimum input pencarian. */
  padding: 0.5rem 0.75rem; /* Memberi ruang di dalam input. */
  border: 1px solid #2a2140; /* Memberi garis tepi input. */
  border-radius: 4px; /* Membulatkan sudut input. */
  background-color: #1f1a2b; /* Memberi warna latar input. */
  color: #f3f0fa; /* Mengatur warna teks input. */
} /* Menutup aturan input pencarian. */

.flash {
  /* Mengatur pesan notifikasi umum. */
  padding: 0.75rem 1rem; /* Memberi ruang di dalam notifikasi. */
  border-radius: 6px; /* Membulatkan sudut notifikasi. */
  margin-bottom: 1rem; /* Memberi jarak di bawah notifikasi. */
  font-weight: 500; /* Membuat teks notifikasi sedikit tebal. */
} /* Menutup aturan notifikasi. */

.flash-success {
  /* Mengatur notifikasi yang menunjukkan keberhasilan. */
  background-color: #14532d; /* Memberi warna latar hijau. */
  color: #bbf7d0; /* Memberi warna teks hijau muda. */
} /* Menutup aturan notifikasi berhasil. */

.flash-error {
  /* Mengatur notifikasi yang menunjukkan kesalahan. */
  background-color: #7f1d1d; /* Memberi warna latar merah. */
  color: #fecaca; /* Memberi warna teks merah muda. */
} /* Menutup aturan notifikasi kesalahan. */

.error {
  /* Mengatur pesan kesalahan validasi. */
  display: block; /* Membuat pesan tampil pada baris tersendiri. */
  color: #fca5a5; /* Memberi warna merah muda pada pesan kesalahan. */
  font-size: 0.85rem; /* Mengatur ukuran teks kesalahan. */
  margin-top: 0.25rem; /* Memberi jarak dari elemen sebelumnya. */
} /* Menutup aturan pesan kesalahan. */

footer {
  /* Mengatur bagian kaki halaman. */
  text-align: center; /* Meratakan teks footer ke tengah. */
  color: #b6aecb; /* Memberi warna abu-abu keunguan pada footer. */
  padding: 1.25rem; /* Memberi ruang di dalam footer. */
  font-size: 0.9rem; /* Mengatur ukuran teks footer. */
} /* Menutup aturan footer. */

@media (max-width: 768px) {
  /* Menerapkan aturan saat lebar layar maksimal 768px. */
  main section:nth-of-type(2) {
    /* Mengatur grid bagian kedua pada tablet. */
    grid-template-columns: repeat(
      2,
      1fr
    ); /* Mengubah grid menjadi dua kolom. */
  } /* Menutup aturan grid tablet. */
} /* Menutup media query tablet. */

@media (max-width: 480px) {
  /* Menerapkan aturan saat lebar layar maksimal 480px. */
  header {
    /* Mengatur header pada layar ponsel. */
    position: relative; /* Menjadikan header acuan posisi elemen di dalamnya. */
  } /* Menutup aturan header ponsel. */

  .nav-toggle-label {
    /* Mengatur tombol navigasi pada ponsel. */
    display: block; /* Menampilkan tombol navigasi. */
  } /* Menutup aturan tombol navigasi ponsel. */

  header nav {
    /* Mengatur navigasi pada ponsel. */
    display: none; /* Menyembunyikan menu sebelum tombol dibuka. */
    width: 100%; /* Membuat navigasi memenuhi lebar header. */
    order: 3; /* Menempatkan navigasi setelah elemen header lainnya. */
    margin-top: 1rem; /* Memberi jarak antara header dan navigasi. */
  } /* Menutup aturan navigasi ponsel. */

  header nav.nav-open {
    /* Mengatur navigasi saat statusnya terbuka. */
    display: block; /* Menampilkan menu navigasi. */
  } /* Menutup aturan navigasi terbuka. */

  header nav ul {
    /* Mengatur daftar menu pada ponsel. */
    flex-direction: column; /* Menyusun item menu secara vertikal. */
    gap: 0.75rem; /* Memberi jarak antaritem menu ponsel. */
  } /* Menutup aturan daftar menu ponsel. */

  main section:nth-of-type(2) {
    /* Mengatur grid bagian kedua pada layar kecil. */
    grid-template-columns: 1fr; /* Mengubah grid menjadi satu kolom. */
  } /* Menutup aturan grid layar kecil. */
} /* Menutup media query ponsel. */
```

# LAPORAN JOBSHEET 4

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```css
/* ===   Reset n Base  === */ /* Bagian ini mengatur ulang properti dasar dan gaya dasar untuk semua elemen. */
* {
  /* Selector universal, menargetkan semua elemen HTML. */
  box-sizing: border-box; /* Mengatur model kotak agar padding dan border termasuk dalam lebar/tinggi total elemen. */
  margin: 0; /* Menghilangkan margin bawaan dari semua elemen. */
  padding: 0; /* Menghilangkan padding bawaan dari semua elemen. */
}

body {
  /* Menargetkan elemen body HTML. */
  font-family:
    "Poppins", sans-serif; /* Mengatur jenis font utama untuk teks di halaman, menggunakan Poppins atau font sans-serif default. */
  color: #002d3f; /* Mengatur warna teks utama di halaman. */
  background-color: #f0f8ff; /* Mengatur warna latar belakang halaman. */
  line-height: 1.5; /* Mengatur tinggi baris teks menjadi 1,5 kali ukuran font. */
}

a {
  /* Menargetkan semua elemen tautan (anchor). */
  color: #1d5b8a; /* Mengatur warna teks untuk tautan. */
  text-decoration: none; /* Menghilangkan garis bawah bawaan dari tautan. */
}

a:hover {
  /* Menargetkan tautan saat kursor mouse berada di atasnya (hover). */
  text-decoration: underline; /* Menampilkan garis bawah pada tautan saat di-hover. */
}

/* ===== Header & Navbar (Flexbox) ===== */ /* Bagian ini mengatur gaya untuk header dan navigasi menggunakan Flexbox. */
header {
  /* Menargetkan elemen header. */
  background-color: #1d5b8a; /* Mengatur warna latar belakang header. */
  color: #fff; /* Mengatur warna teks di dalam header menjadi putih. */
  padding: 1rem 1.5rem; /* Menambahkan padding di dalam header (atas/bawah 1rem, kiri/kanan 1.5rem). */
  display: flex; /* Mengaktifkan Flexbox untuk tata letak elemen di dalam header. */
  align-items: center; /* Menyelaraskan item Flexbox secara vertikal ke tengah. */
  justify-content: space-between; /* Mendistribusikan item Flexbox secara horizontal dengan ruang di antara mereka. */
  flex-wrap: wrap; /* Mengizinkan item Flexbox untuk membungkus ke baris baru jika ruang tidak cukup. */
}

header h1 {
  /* Menargetkan elemen h1 di dalam header. */
  font-size: 1.4rem; /* Mengatur ukuran font untuk judul h1 di header. */
}

header nav ul {
  /* Menargetkan daftar tidak berurutan (ul) di dalam elemen nav yang berada di dalam header. */
  list-style: none; /* Menghilangkan bullet point dari daftar. */
  display: flex; /* Mengaktifkan Flexbox untuk item daftar agar berjejer horizontal. */
  gap: 1.25rem; /* Menambahkan jarak antar item daftar. */
}
header nav a {
  /* Menargetkan tautan (a) di dalam elemen nav yang berada di dalam header. */
  color: #fff; /* Mengatur warna teks tautan di navigasi menjadi putih. */
  font-weight: 500; /* Mengatur ketebalan font untuk tautan navigasi. */
}

/* ===== Main layout ===== */ /* Bagian ini mengatur tata letak utama halaman. */
main {
  /* Menargetkan elemen main. */
  max-width: 1000px; /* Mengatur lebar maksimum area konten utama. */
  margin: 2rem auto; /* Menambahkan margin atas/bawah 2rem dan secara otomatis menengahkan konten utama secara horizontal. */
  padding: 0 1.5rem; /* Menambahkan padding kiri/kanan 1.5rem di dalam konten utama. */
}

section {
  /* Menargetkan elemen section. */
  background-color: #fff; /* Mengatur warna latar belakang setiap section menjadi putih. */
  border-radius: 8px; /* Memberi sudut membulat pada setiap section. */
  padding: 1.5rem; /* Menambahkan padding di dalam setiap section. */
  margin-bottom: 1.5rem; /* Menambahkan margin di bagian bawah setiap section. */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.8); /* Menambahkan efek bayangan pada setiap section. */
}

section h2 {
  /* Menargetkan elemen h2 di dalam section. */
  margin-bottom: 1rem; /* Menambahkan margin di bagian bawah judul h2. */
  color: #1d5b8a; /* Mengatur warna teks untuk judul h2. */
}

/* ===== Kartu Statistik (CSS GRID) ===== */ /* Bagian ini mengatur gaya untuk kartu statistik menggunakan CSS Grid. */

main section:nth-of-type(2) {
  /* Menargetkan section kedua yang berada di dalam main. */
  display: grid; /* Mengaktifkan CSS Grid untuk tata letak elemen di dalam section ini. */
  grid-template-columns: repeat(
    3,
    1fr
  ); /* Membuat 3 kolom dengan lebar yang sama (1 bagian fraksi). */
  gap: 1rem; /* Menambahkan jarak antar kolom dan baris di dalam grid. */
}

main section:nth-of-type(2) article {
  /* Menargetkan elemen article di dalam section kedua yang berada di dalam main. */
  background-color: #eef4fa; /* Mengatur warna latar belakang untuk setiap artikel (kartu statistik). */
  border-radius: 8px; /* Memberi sudut membulat pada setiap artikel. */
  padding: 1.25rem; /* Menambahkan padding di dalam setiap artikel. */
  text-align: center; /* Menengahkan teks di dalam setiap artikel. */
}
main section:nth-of-type(2) h2 {
  /* Menargetkan elemen h2 di dalam section kedua yang berada di dalam main. */
  grid-column: 1 / -1; /* Membuat h2 membentang dari kolom pertama hingga kolom terakhir di dalam grid. */
}
main section:nth-of-type(2) article h3 {
  /* Menargetkan elemen h3 di dalam article, di dalam section kedua yang berada di dalam main. */
  font-size: 0.95rem; /* Mengatur ukuran font untuk judul h3 di kartu statistik. */
  color: #55667a; /* Mengatur warna teks untuk judul h3 di kartu statistik. */
  margin-bottom: 0.5rem; /* Menambahkan margin di bagian bawah judul h3. */
}

main section:nth-of-type(2) article p {
  /* Menargetkan elemen p di dalam article, di dalam section kedua yang berada di dalam main. */
  font-size: 1.8rem; /* Mengatur ukuran font untuk paragraf (nilai statistik) di kartu. */
  font-weight: 700; /* Mengatur ketebalan font untuk paragraf di kartu. */
  color: #1d5b8a; /* Mengatur warna teks untuk paragraf di kartu. */
}

/* ===== Tabel Data ===== */ /* Bagian ini mengatur gaya untuk tabel data. */
table {
  /* Menargetkan elemen table. */
  width: 100%; /* Mengatur lebar tabel agar memenuhi lebar parent-nya. */
  border-collapse: collapse; /* Menggabungkan border sel tabel menjadi satu garis. */
}

th, /* Menargetkan elemen header tabel (th). */
        td {
  /* Menargetkan elemen data sel tabel (td). */
  text-align: left; /* Menyelaraskan teks di header dan sel tabel ke kiri. */
  padding: 0.65rem 0.75rem; /* Menambahkan padding di dalam header dan sel tabel. */
  border-bottom: 1px solid #e2e6ea; /* Menambahkan border tipis di bagian bawah setiap baris. */
}

thead {
  /* Menargetkan elemen thead (header tabel). */
  background-color: #1d5b8a; /* Mengatur warna latar belakang untuk thead. */
  color: #fff; /* Mengatur warna teks di thead menjadi putih. */
}

tbody tr:hover {
  /* Menargetkan baris tabel (tr) di dalam tbody saat di-hover. */
  background-color: #eef4fa; /* Mengubah warna latar belakang baris saat di-hover. */
}

td button {
  /* Menargetkan semua elemen button yang berada di dalam sel tabel (td). */
  padding: 0.35rem 0.7rem; /* Menambahkan padding di dalam tombol. */
  margin-right: 0.35rem; /* Menambahkan margin di sebelah kanan tombol. */
  border: none; /* Menghilangkan border dari tombol. */
  border-radius: 4px; /* Memberi sudut membulat pada tombol. */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atas tombol. */
  font-size: 0.85rem; /* Mengatur ukuran font untuk teks di tombol. */
}

td button:first-of-type {
  /* Menargetkan tombol pertama di dalam sel tabel (biasanya tombol "Edit"). */
  background-color: #f0ad4e; /* Mengatur warna latar belakang tombol pertama. */
  color: #fff; /* Mengatur warna teks tombol pertama menjadi putih. */
}

td button:last-of-type {
  /* Menargetkan tombol terakhir di dalam sel tabel (biasanya tombol "Hapus"). */
  background-color: #d9534f; /* Mengatur warna latar belakang tombol terakhir. */
  color: #fff; /* Mengatur warna teks tombol terakhir menjadi putih. */
}

/* ===== Form Tambah Buku ===== */ /* Bagian ini mengatur gaya untuk formulir tambah buku. */
form p {
  /* Menargetkan elemen paragraf (p) di dalam form. */
  margin-bottom: 1rem; /* Menambahkan margin di bagian bawah setiap paragraf di form. */
}

form label {
  /* Menargetkan elemen label di dalam form. */
  display: block; /* Membuat label menjadi elemen blok sehingga menempati baris penuh. */
  margin-bottom: 0.35rem; /* Menambahkan margin di bagian bawah label. */
  font-weight: 600; /* Mengatur ketebalan font untuk label. */
  color: #444; /* Mengatur warna teks untuk label. */
}

form input, /* Menargetkan elemen input di dalam form. */
        form select {
  /* Menargetkan elemen select di dalam form. */
  width: 100%; /* Mengatur lebar input dan select agar memenuhi lebar parent-nya. */
  max-width: 400px; /* Mengatur lebar maksimum untuk input dan select. */
  padding: 0.55rem 0.7rem; /* Menambahkan padding di dalam input dan select. */
  border: 1px solid #cdd4da; /* Menambahkan border tipis di sekitar input dan select. */
  border-radius: 4px; /* Memberi sudut membulat pada input dan select. */
  font-size: 1rem; /* Mengatur ukuran font untuk teks di input dan select. */
}

form button[type="submit"] {
  /* Menargetkan tombol submit di dalam form. */
  background-color: #1d5b8a; /* Mengatur warna latar belakang tombol submit. */
  color: #fff; /* Mengatur warna teks tombol submit menjadi putih. */
  border: none; /* Menghilangkan border dari tombol submit. */
  padding: 0.55rem 1rem; /* Menambahkan padding di dalam tombol submit. */
  border-radius: 4px; /* Memberi sudut membulat pada tombol submit. */
  font-size: 1rem; /* Mengatur ukuran font untuk teks di tombol submit. */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atas tombol submit. */
}

form button[type="submit"]:hover {
  /* Menargetkan tombol submit saat kursor mouse berada di atasnya (hover). */
  background-color: #144a6e; /* Mengubah warna latar belakang tombol submit saat di-hover. */
}

/* ===== Footer ===== */ /* Bagian ini mengatur gaya untuk footer. */
footer {
  /* Menargetkan elemen footer. */
  text-align: center; /* Menengahkan teks di dalam footer. */
  color: #7a8794; /* Mengatur warna teks di footer. */
  padding: 1.25rem; /* Menambahkan padding di dalam footer. */
  font-size: 0.9rem; /* Mengatur ukuran font untuk teks di footer. */
}
```

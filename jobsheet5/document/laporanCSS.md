# LAPORAN JOBSHEET 5

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```css
/* ===   Reset n Base  === */
/* ===   Reset n Base  === */ /* Bagian ini mengatur ulang gaya default browser. */
* {
  /* Memilih semua elemen HTML. */
  box-sizing: border-box; /* Mengatur bagaimana lebar dan tinggi elemen dihitung, termasuk padding dan border. */
  margin: 0; /* Menghilangkan margin default dari semua elemen. */
  padding: 0; /* Menghilangkan padding default dari semua elemen. */
}

body {
  /* Memilih elemen body. */
  font-family:
    "Poppins", sans-serif; /* Mengatur jenis font utama menjadi Poppins, dengan fallback sans-serif. */
  color: #002d3f; /* Mengatur warna teks utama. */
  background-color: #f0f8ff; /* Mengatur warna latar belakang halaman. */
  line-height: 1.5; /* Mengatur tinggi baris teks. */
}

a {
  /* Memilih semua elemen link (anchor). */
  color: #1d5b8a; /* Mengatur warna teks link. */
  text-decoration: none; /* Menghilangkan garis bawah default pada link. */
}

a:hover {
  /* Memilih elemen link saat kursor diarahkan padanya. */
  text-decoration: underline; /* Menambahkan garis bawah saat link di-hover. */
}

/* ===== Header & Navbar (Flexbox) ===== */ /* Komentar bagian header dan navbar. */
header {
  /* Memilih elemen header. */
  background-color: #1d5b8a; /* Mengatur warna latar belakang header. */
  color: #fff; /* Mengatur warna teks di dalam header menjadi putih. */
  padding: 1rem 1.5rem; /* Menambahkan padding di dalam header (atas/bawah 1rem, kiri/kanan 1.5rem). */
  display: flex; /* Mengaktifkan Flexbox untuk layout header. */
  align-items: center; /* Menyelaraskan item secara vertikal di tengah. */
  justify-content: space-between; /* Mendistribusikan item secara horizontal dengan ruang di antara mereka. */
  flex-wrap: wrap; /* Memungkinkan item flex untuk pindah ke baris baru jika tidak cukup ruang. */
}

header h1 {
  /* Memilih elemen h1 di dalam header. */
  font-size: 1.4rem; /* Mengatur ukuran font untuk judul h1. */
}

header nav ul {
  /* Memilih elemen ul di dalam nav di dalam header. */
  list-style: none; /* Menghilangkan bullet point default dari daftar. */
  display: flex; /* Mengaktifkan Flexbox untuk item daftar navigasi. */
  gap: 1.25rem; /* Menambahkan jarak antar item daftar. */
}
header nav a {
  /* Memilih elemen link (a) di dalam nav di dalam header. */
  color: #fff; /* Mengatur warna teks link navigasi menjadi putih. */
  font-weight: 500; /* Mengatur ketebalan font untuk link navigasi. */
}

/* ===== Main layout ===== */ /* Komentar bagian layout utama. */
main {
  /* Memilih elemen main. */
  max-width: 1000px; /* Mengatur lebar maksimum konten utama. */
  margin: 2rem auto; /* Memberikan margin atas/bawah 2rem dan mengatur margin kiri/kanan secara otomatis untuk menengahkan. */
  padding: 0 1.5rem; /* Menambahkan padding kiri/kanan 1.5rem. */
}

section {
  /* Memilih semua elemen section. */
  background-color: #fff; /* Mengatur warna latar belakang section menjadi putih. */
  border-radius: 8px; /* Memberikan sudut membulat pada section. */
  padding: 1.5rem; /* Menambahkan padding di dalam section. */
  margin-bottom: 1.5rem; /* Menambahkan margin di bawah setiap section. */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08); /* Menambahkan bayangan lembut pada section. */
}

section h2 {
  /* Memilih elemen h2 di dalam section. */
  margin-bottom: 1rem; /* Menambahkan margin di bawah judul h2. */
  color: #1d5b8a; /* Mengatur warna teks judul h2. */
}

/* ===== Kartu Statistik (CSS GRID) ===== */ /* Komentar bagian kartu statistik. */
main section:nth-of-type(2) {
  /* Memilih section kedua di dalam elemen main. */
  display: grid; /* Mengaktifkan CSS Grid untuk layout kartu statistik. */
  grid-template-columns: repeat(
    3,
    1fr
  ); /* Membuat 3 kolom dengan lebar yang sama. */
  gap: 1rem; /* Menambahkan jarak antar item grid. */
}

main section:nth-of-type(2) article {
  /* Memilih elemen article di dalam section kedua di dalam main. */
  background-color: #eef4fa; /* Mengatur warna latar belakang kartu statistik. */
  border-radius: 8px; /* Memberikan sudut membulat pada kartu. */
  padding: 1.25rem; /* Menambahkan padding di dalam kartu. */
  text-align: center; /* Menengahkan teks di dalam kartu. */
}

main section:nth-of-type(2) article h3 {
  /* Memilih elemen h3 di dalam article kartu statistik. */
  font-size: 0.95rem; /* Mengatur ukuran font untuk judul h3 kartu. */
  color: #55667a; /* Mengatur warna teks judul h3 kartu. */
  margin-bottom: 0.5rem; /* Menambahkan margin di bawah judul h3 kartu. */
}

main section:nth-of-type(2) article p {
  /* Memilih elemen p di dalam article kartu statistik. */
  font-size: 1.8rem; /* Mengatur ukuran font untuk paragraf di kartu. */
  font-weight: 700; /* Mengatur ketebalan font untuk paragraf di kartu. */
  color: #1d5b8a; /* Mengatur warna teks paragraf di kartu. */
}

/* ===== Tabel Data ===== */ /* Komentar bagian tabel data. */
table {
  /* Memilih elemen table. */
  width: 100%; /* Mengatur lebar tabel menjadi 100% dari parent-nya. */
  border-collapse: collapse; /* Menggabungkan border sel menjadi satu. */
}

th, /* Memilih elemen header tabel. */
td {
  /* Memilih elemen sel data tabel. */
  text-align: left; /* Menyelaraskan teks ke kiri. */
  padding: 0.65rem 0.75rem; /* Menambahkan padding di dalam sel tabel. */
  border-bottom: 1px solid #e2e6ea; /* Menambahkan border bawah pada sel. */
}

thead {
  /* Memilih elemen thead (header tabel). */
  background-color: #1d5b8a; /* Mengatur warna latar belakang header tabel. */
  color: #fff; /* Mengatur warna teks header tabel menjadi putih. */
}

tbody tr:hover {
  /* Memilih baris (tr) di dalam tbody saat kursor diarahkan padanya. */
  background-color: #eef4fa; /* Mengubah warna latar belakang baris saat di-hover. */
}

td button {
  /* Memilih elemen button di dalam sel data tabel. */
  padding: 0.35rem 0.7rem; /* Menambahkan padding di dalam tombol. */
  margin-right: 0.35rem; /* Menambahkan margin di sebelah kanan tombol. */
  border: none; /* Menghilangkan border pada tombol. */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol. */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atas tombol. */
  font-size: 0.85rem; /* Mengatur ukuran font untuk teks tombol. */
}

td button:first-of-type {
  /* Memilih tombol pertama di dalam sel data tabel. */
  background-color: #f0ad4e; /* Mengatur warna latar belakang tombol pertama (misalnya edit). */
  color: #fff; /* Mengatur warna teks tombol pertama menjadi putih. */
}

td button:last-of-type {
  /* Memilih tombol terakhir di dalam sel data tabel. */
  background-color: #d9534f; /* Mengatur warna latar belakang tombol terakhir (misalnya delete). */
  color: #fff; /* Mengatur warna teks tombol terakhir menjadi putih. */
}

/* ===== Form ===== */ /* Komentar bagian form. */
form p {
  /* Memilih elemen p di dalam form. */
  margin-bottom: 1rem; /* Menambahkan margin di bawah setiap paragraf di dalam form. */
}

form label {
  /* Memilih elemen label di dalam form. */
  display: block; /* Mengatur label agar tampil sebagai blok (mengambil seluruh lebar). */
  margin-bottom: 0.35rem; /* Menambahkan margin di bawah label. */
  font-weight: 600; /* Mengatur ketebalan font untuk label. */
  color: #444; /* Mengatur warna teks label. */
}

form input, /* Memilih elemen input di dalam form. */
form select {
  /* Memilih elemen select di dalam form. */
  width: 100%; /* Mengatur lebar input/select menjadi 100%. */
  max-width: 400px; /* Mengatur lebar maksimum input/select. */
  padding: 0.55rem 0.7rem; /* Menambahkan padding di dalam input/select. */
  border: 1px solid #cdd4da; /* Menambahkan border pada input/select. */
  border-radius: 4px; /* Memberikan sudut membulat pada input/select. */
  font-size: 1rem; /* Mengatur ukuran font untuk teks di input/select. */
}

form button[type="submit"] {
  /* Memilih elemen button dengan type="submit" di dalam form. */
  background-color: #1d5b8a; /* Mengatur warna latar belakang tombol submit. */
  color: #fff; /* Mengatur warna teks tombol submit menjadi putih. */
  border: none; /* Menghilangkan border pada tombol submit. */
  padding: 0.55rem 1rem; /* Menambahkan padding di dalam tombol submit. */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol submit. */
  font-size: 1rem; /* Mengatur ukuran font untuk teks tombol submit. */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atas tombol submit. */
}

form button[type="submit"]:hover {
  /* Memilih tombol submit saat kursor diarahkan padanya. */
  background-color: #144a6e; /* Mengubah warna latar belakang tombol submit saat di-hover. */
}

/* ===== Footer ===== */ /* Komentar bagian footer. */
footer {
  /* Memilih elemen footer. */
  text-align: center; /* Menengahkan teks di dalam footer. */
  color: #7a8794; /* Mengatur warna teks footer. */
  padding: 1.25rem; /* Menambahkan padding di dalam footer. */
  font-size: 0.9rem; /* Mengatur ukuran font untuk teks footer. */
}

/* ===== Tabel Responsive ===== */ /* Komentar bagian tabel responsif. */
.table-responsive {
  /* Memilih elemen dengan class .table-responsive. */
  overflow-x: auto; /* Mengaktifkan scroll horizontal jika konten tabel melebihi lebar wadah. */
}

/* ===== Hamburger Menu (JS-driven) ===== */ /* Komentar bagian menu hamburger. */
.nav-toggle-label {
  /* Memilih elemen dengan class .nav-toggle-label. */
  display: none; /* Menyembunyikan elemen ini secara default. */
  font-size: 1.6rem; /* Mengatur ukuran font untuk ikon toggle. */
  color: #fff; /* Mengatur warna ikon toggle menjadi putih. */
  background: none; /* Menghilangkan latar belakang ikon toggle. */
  border: none; /* Menghilangkan border pada ikon toggle. */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atas ikon toggle. */
}

/* ===== Pesan Error Validasi ===== */ /* Komentar bagian pesan error validasi. */
.error {
  /* Memilih elemen dengan class .error. */
  display: block; /* Mengatur elemen error agar tampil sebagai blok. */
  color: #d9534f; /* Mengatur warna teks error. */
  font-size: 0.85rem; /* Mengatur ukuran font untuk teks error. */
  margin-top: 0.25rem; /* Menambahkan margin di atas pesan error. */
}

/* ===== Kolom Pencarian ===== */ /* Komentar bagian kolom pencarian. */
.search-box {
  /* Memilih elemen dengan class .search-box. */
  margin-bottom: 1rem; /* Menambahkan margin di bawah kotak pencarian. */
}

.search-box input {
  /* Memilih elemen input di dalam .search-box. */
  width: 100%; /* Mengatur lebar input pencarian menjadi 100%. */
  max-width: 320px; /* Mengatur lebar maksimum input pencarian. */
  padding: 0.5rem 0.75rem; /* Menambahkan padding di dalam input pencarian. */
  border: 1px solid #cdd4da; /* Menambahkan border pada input pencarian. */
  border-radius: 4px; /* Memberikan sudut membulat pada input pencarian. */
}

/* ===== Responsive Breakpoints ===== */ /* Komentar bagian media queries responsif. */
@media (max-width: 768px) {
  /* Menerapkan gaya ini ketika lebar layar kurang dari atau sama dengan 768px. */
  main section:nth-of-type(2) {
    /* Memilih section kedua di dalam main. */
    grid-template-columns: repeat(
      2,
      1fr
    ); /* Mengubah layout grid menjadi 2 kolom. */
  }
}

@media (max-width: 480px) {
  /* Menerapkan gaya ini ketika lebar layar kurang dari atau sama dengan 480px. */
  header {
    /* Memilih elemen header. */
    position: relative; /* Mengatur posisi header menjadi relatif (untuk penempatan absolut di dalamnya). */
  }

  .nav-toggle-label {
    /* Memilih elemen dengan class .nav-toggle-label. */
    display: block; /* Menampilkan ikon toggle menu. */
  }

  header nav {
    /* Memilih elemen nav di dalam header. */
    display: none; /* Menyembunyikan navigasi secara default. */
    width: 100%; /* Mengatur lebar navigasi menjadi 100%. */
    order: 3; /* Mengubah urutan item flex menjadi ketiga. */
    margin-top: 1rem; /* Menambahkan margin di atas navigasi. */
  }

  header nav.nav-open {
    /* Memilih elemen nav di dalam header dengan class .nav-open. */
    display: block; /* Menampilkan navigasi ketika class .nav-open ditambahkan (biasanya dengan JavaScript). */
  }

  header nav ul {
    /* Memilih elemen ul di dalam nav di dalam header. */
    flex-direction: column; /* Mengubah arah item flex menjadi vertikal. */
    gap: 0.75rem; /* Menambahkan jarak vertikal antar item daftar. */
  }

  main section:nth-of-type(2) {
    /* Memilih section kedua di dalam main. */
    grid-template-columns: 1fr; /* Mengubah layout grid menjadi 1 kolom. */
  }

  form input, /* Memilih elemen input di dalam form. */
  form select {
    /* Memilih elemen select di dalam form. */
    max-width: 100%; /* Mengatur lebar maksimum input/select menjadi 100%. */
  }
}
```

# LAPORAN JOBSHEET 1 index.html

NAMA : LUCKY AKBAR FEBRIANO
NIM : 254107020134
KELAS : TI 2D

```css
/* ===   Reset n Base  === */
* {
  /* Selector universal untuk menargetkan semua elemen */
  box-sizing: border-box; /* Mengatur model kotak untuk memasukkan padding dan border dalam lebar dan tinggi */
  margin: 0; /* Menghilangkan margin default dari semua elemen */
  padding: 0; /* Menghilangkan padding default dari semua elemen */
}

body {
  /* Selector untuk elemen body */
  font-family:
    "Poppins", sans-serif; /* Mengatur jenis font utama untuk teks di seluruh body */
  color: #002d3f; /* Mengatur warna teks default untuk body */
  background-color: #f0f8ff; /* Mengatur warna latar belakang default untuk body (light blue) */
  line-height: 1.5; /* Mengatur tinggi baris teks untuk keterbacaan yang lebih baik */
}

a {
  /* Selector untuk semua elemen anchor (link) */
  color: #1d5b8a; /* Mengatur warna teks untuk link (biru tua) */
  text-decoration: none; /* Menghilangkan garis bawah default dari link */
}

a:hover {
  /* Selector untuk elemen anchor saat kursor diarahkan ke atasnya */
  text-decoration: underline; /* Menambahkan garis bawah pada link saat di-hover */
}
/* ===== Header & Navbar (Flexbox) ===== */
header {
  /* Selector untuk elemen header */
  background-color: #1d5b8a; /* Mengatur warna latar belakang header (biru tua) */
  color: #fff; /* Mengatur warna teks di dalam header menjadi putih */
  padding: 1rem 1.5rem; /* Mengatur padding atas/bawah 1rem dan kiri/kanan 1.5rem untuk header */
  display: flex; /* Mengatur display header menjadi flex container */
  align-items: center; /* Menyelaraskan item-item di tengah secara vertikal dalam flex container */
  justify-content: space-between; /* Mendistribusikan item-item dengan ruang di antara keduanya secara horizontal */
  flex-wrap: wrap; /* Memungkinkan item-item flex untuk membungkus ke baris baru jika tidak cukup ruang */
}

header h1 {
  /* Selector untuk elemen h1 di dalam header */
  font-size: 1.4rem; /* Mengatur ukuran font untuk judul h1 di header */
}

header nav ul {
  /* Selector untuk elemen ul di dalam nav di dalam header */
  list-style: none; /* Menghilangkan bullet point default dari daftar */
  display: flex; /* Mengatur display ul menjadi flex container */
  gap: 1.25rem; /* Menambahkan jarak antar item flex (li) */
}
header nav a {
  /* Selector untuk elemen a di dalam nav di dalam header */
  color: #fff; /* Mengatur warna teks link di navbar menjadi putih */
  font-weight: 500; /* Mengatur ketebalan font untuk link di navbar */
}
/* ===== Main layout ===== */
main {
  /* Selector untuk elemen main */
  max-width: 1000px; /* Mengatur lebar maksimum untuk konten utama */
  margin: 2rem auto; /* Mengatur margin atas/bawah 2rem dan tengah secara horizontal */
  padding: 0 1.5rem; /* Mengatur padding kiri/kanan 1.5rem untuk konten utama */
}

section {
  /* Selector untuk semua elemen section */
  background-color: #fff; /* Mengatur warna latar belakang section menjadi putih */
  border-radius: 8px; /* Memberikan sudut membulat pada section */
  padding: 1.5rem; /* Mengatur padding di dalam section */
  margin-bottom: 1.5rem; /* Mengatur margin bawah untuk setiap section */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.8); /* Menambahkan bayangan pada section */
}

section h2 {
  /* Selector untuk elemen h2 di dalam section */
  margin-bottom: 1rem; /* Mengatur margin bawah untuk judul h2 */
  color: #1d5b8a; /* Mengatur warna teks untuk judul h2 (biru tua) */
}
/* ===== Kartu Statistik (CSS GRID) ===== */

main section:nth-of-type(2) {
  /* Selector untuk section kedua di dalam main */
  display: grid; /* Mengatur display section menjadi grid container */
  grid-template-columns: repeat(
    3,
    1fr
  ); /* Membuat 3 kolom dengan lebar yang sama */
  gap: 1rem; /* Menambahkan jarak antar item grid */
}

main section:nth-of-type(2) article {
  /* Selector untuk elemen article di dalam section kedua di main */
  background-color: #eef4fa; /* Mengatur warna latar belakang article (light blue) */
  border-radius: 8px; /* Memberikan sudut membulat pada article */
  padding: 1.25rem; /* Mengatur padding di dalam article */
  text-align: center; /* Menyelaraskan teks di tengah dalam article */
}
main section:nth-of-type(2) h2 {
  /* Selector untuk elemen h2 di dalam section kedua di main */
  grid-column: 1 / -1; /* Membuat h2 membentang dari kolom pertama hingga terakhir */
}
main section:nth-of-type(2) article h3 {
  /* Selector untuk elemen h3 di dalam article di section kedua di main */
  font-size: 0.95rem; /* Mengatur ukuran font untuk judul h3 kartu statistik */
  color: #55667a; /* Mengatur warna teks untuk judul h3 kartu statistik */
  margin-bottom: 0.5rem; /* Mengatur margin bawah untuk judul h3 kartu statistik */
}

main section:nth-of-type(2) article p {
  /* Selector untuk elemen p di dalam article di section kedua di main */
  font-size: 1.8rem; /* Mengatur ukuran font untuk paragraf (nilai statistik) */
  font-weight: 700; /* Mengatur ketebalan font untuk paragraf (nilai statistik) */
  color: #1d5b8a; /* Mengatur warna teks untuk paragraf (nilai statistik) */
}
/* ===== Tabel Data ===== */
table {
  /* Selector untuk elemen table */
  width: 100%; /* Mengatur lebar tabel agar memenuhi container */
  border-collapse: collapse; /* Menggabungkan border sel menjadi satu */
}

th, /* Selector untuk elemen header tabel */
td {
  /* Selector untuk elemen data sel tabel */
  text-align: left; /* Menyelaraskan teks ke kiri dalam sel tabel */
  padding: 0.65rem 0.75rem; /* Mengatur padding di dalam sel tabel */
  border-bottom: 1px solid #e2e6ea; /* Menambahkan border bawah pada sel tabel */
}

thead {
  /* Selector untuk elemen thead (header tabel) */
  background-color: #1d5b8a; /* Mengatur warna latar belakang thead (biru tua) */
  color: #fff; /* Mengatur warna teks di thead menjadi putih */
}

tbody tr:hover {
  /* Selector untuk baris tabel saat kursor diarahkan ke atasnya */
  background-color: #eef4fa; /* Mengubah warna latar belakang baris saat di-hover (light blue) */
}

td button {
  /* Selector untuk elemen button di dalam sel tabel */
  padding: 0.35rem 0.7rem; /* Mengatur padding untuk tombol di tabel */
  margin-right: 0.35rem; /* Mengatur margin kanan untuk tombol di tabel */
  border: none; /* Menghilangkan border dari tombol */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di-hover */
  font-size: 0.85rem; /* Mengatur ukuran font untuk tombol di tabel */
}

td button:first-of-type {
  /* Selector untuk tombol pertama di dalam sel tabel */
  background-color: #f0ad4e; /* Mengatur warna latar belakang untuk tombol pertama (orange) */
  color: #fff; /* Mengatur warna teks untuk tombol pertama menjadi putih */
}

td button:last-of-type {
  /* Selector untuk tombol terakhir di dalam sel tabel */
  background-color: #d9534f; /* Mengatur warna latar belakang untuk tombol terakhir (merah) */
  color: #fff; /* Mengatur warna teks untuk tombol terakhir menjadi putih */
}
/* ===== Form Tambah Buku ===== */
form p {
  /* Selector untuk elemen p di dalam form */
  margin-bottom: 1rem; /* Mengatur margin bawah untuk paragraf di form */
}

form label {
  /* Selector untuk elemen label di dalam form */
  display: block; /* Mengubah label menjadi elemen blok */
  margin-bottom: 0.35rem; /* Mengatur margin bawah untuk label */
  font-weight: 600; /* Mengatur ketebalan font untuk label */
  color: #444; /* Mengatur warna teks untuk label */
}

form input, /* Selector untuk elemen input di dalam form */
form select {
  /* Selector untuk elemen select di dalam form */
  width: 100%; /* Mengatur lebar input/select agar memenuhi container */
  max-width: 400px; /* Mengatur lebar maksimum untuk input/select */
  padding: 0.55rem 0.7rem; /* Mengatur padding untuk input/select */
  border: 1px solid #cdd4da; /* Menambahkan border pada input/select */
  border-radius: 4px; /* Memberikan sudut membulat pada input/select */
  font-size: 1rem; /* Mengatur ukuran font untuk input/select */
}

form button[type="submit"] {
  /* Selector untuk elemen button dengan atribut type="submit" di dalam form */
  background-color: #1d5b8a; /* Mengatur warna latar belakang tombol submit (biru tua) */
  color: #fff; /* Mengatur warna teks tombol submit menjadi putih */
  border: none; /* Menghilangkan border dari tombol submit */
  padding: 0.55rem 1rem; /* Mengatur padding untuk tombol submit */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol submit */
  font-size: 1rem; /* Mengatur ukuran font untuk tombol submit */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di-hover */
}

form button[type="submit"]:hover {
  /* Selector untuk tombol submit saat kursor diarahkan ke atasnya */
  background-color: #144a6e; /* Mengubah warna latar belakang tombol submit saat di-hover (biru tua sedikit lebih gelap) */
}
/* ===== Footer ===== */
footer {
  /* Selector untuk elemen footer */
  text-align: center; /* Menyelaraskan teks di tengah dalam footer */
  color: #7a8794; /* Mengatur warna teks untuk footer */
  padding: 1.25rem; /* Mengatur padding di dalam footer */
  font-size: 0.9rem; /* Mengatur ukuran font untuk footer */
}
```

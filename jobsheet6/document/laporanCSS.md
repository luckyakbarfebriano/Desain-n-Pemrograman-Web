# LAPORAN JOBSHEET 6

# LUCKY AKBAR FEBRIANO/12/254107020134/TI-2D

```css
/* ===   Reset n Base  === */
* { /* Memilih seluruh elemen pada halaman HTML */
  box-sizing: border-box; /* Memasukkan padding dan border ke dalam perhitungan total lebar/tinggi elemen */
  margin: 0; /* Menghilangkan margin bawaan pada semua elemen */
  padding: 0; /* Menghilangkan padding bawaan pada semua elemen */
} /* Penutup aturan untuk semua elemen */

body { /* Memilih elemen body (seluruh badan halaman) */
  font-family: "Poppins", sans-serif; /* Mengatur jenis font utama menggunakan Poppins, fallback sans-serif */
  color: #002d3f; /* Mengatur warna teks utama menjadi biru gelap */
  background-color: #f0f8ff; /* Mengatur warna latar belakang halaman menjadi biru muda terang */
  line-height: 1.5; /* Mengatur jarak tinggi antarbaris teks agar nyaman dibaca */
} /* Penutup aturan untuk body */

a { /* Memilih semua elemen tautan/link */
  color: #1d5b8a; /* Mengatur warna teks link menjadi biru */
  text-decoration: none; /* Menghapus garis bawah default pada link */
} /* Penutup aturan untuk tautan */

a:hover { /* Menentukan style ketika tautan disorot kursor mouse */
  text-decoration: underline; /* Menampilkan garis bawah saat link disorot kursor */
} /* Penutup aturan hover tautan */
/* ===== Header & Navbar (Flexbox) ===== */
header { /* Memilih elemen header di bagian atas halaman */
  background-color: #1d5b8a; /* Memberikan warna latar belakang biru pada header */
  color: #fff; /* Mengatur warna teks di dalam header menjadi putih */
  padding: 1rem 1.5rem; /* Memberi ruang dalam sebesar 1rem (atas-bawah) dan 1.5rem (kiri-kanan) */
  display: flex; /* Mengaktifkan tata letak Flexbox pada header */
  align-items: center; /* Meratakan elemen di dalam header secara vertikal di tengah */
  justify-content: space-between; /* Memberi jarak maksimal di antara elemen kiri dan kanan */
  flex-wrap: wrap; /* Memungkinkan item berpindah ke baris baru jika ruang tidak cukup */
} /* Penutup aturan header */

header h1 { /* Memilih judul h1 di dalam header */
  font-size: 1.4rem; /* Mengatur ukuran teks judul header */
} /* Penutup aturan header h1 */

header nav ul { /* Memilih daftar tidak berurut (ul) pada navigasi header */
  list-style: none; /* Menghapus tanda poin/bullet list */
  display: flex; /* Menyusun item navigasi secara horizontal menggunakan Flexbox */
  gap: 1.25rem; /* Memberikan jarak antar menu navigasi sebesar 1.25rem */
} /* Penutup aturan daftar navigasi */
header nav a { /* Memilih tautan di dalam menu navigasi header */
  color: #fff; /* Mengatur warna teks link navigasi menjadi putih */
  font-weight: 500; /* Mengatur ketebalan font teks navigasi menjadi medium */
} /* Penutup aturan tautan navigasi */
/* ===== Main layout ===== */
main { /* Memilih kontainer utama halaman */
  max-width: 1000px; /* Membatasi lebar maksimum konten utama hingga 1000px */
  margin: 2rem auto; /* Memberi jarak 2rem di atas-bawah dan memusatkan konten secara horizontal */
  padding: 0 1.5rem; /* Memberi bantalan dalam sebesar 1.5rem di sisi kiri dan kanan */
} /* Penutup aturan main */

section { /* Memilih setiap bagian/seksi di halaman */
  background-color: #fff; /* Mengatur warna latar belakang kartu/bagian menjadi putih */
  border-radius: 8px; /* Membuat sudut-sudut kartu menjadi melengkung sebesar 8px */
  padding: 1.5rem; /* Memberikan jarak dalam di seluruh sisi kartu sebesar 1.5rem */
  margin-bottom: 1.5rem; /* Memberikan jarak pemisah ke bawah antar bagian sebesar 1.5rem */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08); /* Memberikan efek bayangan lembut di sekeliling kotak */
} /* Penutup aturan section */

section h2 { /* Memilih judul sub-bagian (h2) */
  margin-bottom: 1rem; /* Memberi jarak ruang di bawah judul sebesar 1rem */
  color: #1d5b8a; /* Mengatur warna judul sub-bagian menjadi biru */
} /* Penutup aturan section h2 */
/* ===== Kartu Statistik (CSS GRID) ===== */
main section:nth-of-type(2) { /* Memilih section urutan kedua di dalam main */
  display: grid; /* Mengaktifkan tata letak berbasis CSS Grid */
  grid-template-columns: repeat(3, 1fr); /* Membagi tampilan grid menjadi 3 kolom berukuran sama */
  gap: 1rem; /* Memberikan jarak antarkartu grid sebesar 1rem */
} /* Penutup aturan grid section kedua */

main section:nth-of-type(2) article { /* Memilih artikel/kartu di dalam section kedua */
  background-color: #eef4fa; /* Mengatur latar belakang kartu statistik menjadi abu-abu kebiruan */
  border-radius: 8px; /* Membuat sudut kartu statistik melengkung sebesar 8px */
  padding: 1.25rem; /* Memberikan jarak bantalan dalam pada kartu statistik */
  text-align: center; /* Meratakan seluruh teks di dalam kartu ke tengah */
} /* Penutup aturan artikel statistik */

main section:nth-of-type(2) article h3 { /* Memilih judul kecil h3 di kartu statistik */
  font-size: 0.95rem; /* Mengatur ukuran font judul statistik */
  color: #55667a; /* Mengatur warna teks judul statistik menjadi abu-abu */
  margin-bottom: 0.5rem; /* Memberi jarak bawah antara judul dan angka statistik */
} /* Penutup aturan h3 statistik */

main section:nth-of-type(2) article p { /* Memilih paragraf angka di kartu statistik */
  font-size: 1.8rem; /* Mengatur ukuran font angka statistik menjadi besar */
  font-weight: 700; /* Menebalkan tampilan teks angka statistik */
  color: #1d5b8a; /* Mengatur warna angka statistik menjadi biru */
} /* Penutup aturan paragraf statistik */
/* ===== Tabel Data ===== */
table { /* Memilih elemen tabel data */
  width: 100%; /* Mengatur lebar tabel agar mengisi penuh ruang kontainer (100%) */
  border-collapse: collapse; /* Menggabungkan garis pembatas sel agar tidak berjarak ganda */
} /* Penutup aturan tabel */

th, /* Memilih elemen sel kepala tabel (table header) */
td { /* Memilih elemen sel isi tabel (table data) */
  text-align: left; /* Mengatur perataan teks sel menjadi rata kiri */
  padding: 0.65rem 0.75rem; /* Memberikan bantalan dalam: 0.65rem atas-bawah, 0.75rem kiri-kanan */
  border-bottom: 1px solid #e2e6ea; /* Memberikan garis pemisah horizontal di bagian bawah setiap sel */
} /* Penutup aturan sel tabel */

thead { /* Memilih bagian baris kepala tabel */
  background-color: #1d5b8a; /* Mengatur warna latar belakang kepala tabel menjadi biru */
  color: #fff; /* Mengatur warna teks pada kepala tabel menjadi putih */
} /* Penutup aturan thead */

tbody tr:hover { /* Memilih baris data tabel saat disorot kursor */
  background-color: #eef4fa; /* Mengubah warna latar baris menjadi abu-abu kebiruan saat disorot */
} /* Penutup aturan hover baris tabel */

td button { /* Memilih tombol yang berada di dalam sel data tabel */

```

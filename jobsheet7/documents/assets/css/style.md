# LAPORAN JOBSHEET 7

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```css
* { /* Mengatur semua elemen */
  box-sizing: border-box; /* Memastikan padding dan border termasuk dalam total lebar/tinggi elemen */
  margin: 0; /* Menghilangkan margin default dari semua elemen */
  padding: 0; /* Menghilangkan padding default dari semua elemen */
}

body { /* Mengatur gaya untuk body halaman */
  font-family: "Poppins", sans-serif; /* Mengatur font utama menjadi Poppins atau sans-serif */
  color: #f3f0fa; /* Mengatur warna teks default menjadi putih keabu-abuan */
  background-color: #0a0a0f; /* Mengatur warna latar belakang halaman menjadi hitam gelap */
  line-height: 1.5; /* Mengatur tinggi baris teks */
}

a { /* Mengatur gaya untuk tautan */
  color: #a78bfa; /* Mengatur warna tautan menjadi ungu muda */
  text-decoration: none; /* Menghilangkan garis bawah default pada tautan */
}

a:hover { /* Mengatur gaya tautan saat dihover */
  text-decoration: underline; /* Menampilkan garis bawah saat tautan dihover */
}

.back-to-menu { /* Mengatur gaya untuk tautan 'Kembali ke Menu' */
  display: inline-block; /* Menjadikan elemen sebagai blok inline */
  margin: 1rem 1.5rem 0; /* Memberikan margin atas, samping, dan bawah */
  font-size: 0.9rem; /* Mengatur ukuran font */
  font-weight: 600; /* Mengatur ketebalan font */
}

header { /* Mengatur gaya untuk header */
  background-color: #17141f; /* Mengatur warna latar belakang header menjadi abu-abu gelap */
  border-bottom: 1px solid #2a2140; /* Memberikan garis bawah solid pada header */
  color: #fff; /* Mengatur warna teks dalam header menjadi putih */
  padding: 1rem 1.5rem; /* Memberikan padding di dalam header */
  display: flex; /* Menggunakan flexbox untuk tata letak item dalam header */
  align-items: center; /* Menyelaraskan item secara vertikal di tengah */
  justify-content: space-between; /* Menyelaraskan item secara horizontal dengan ruang di antara mereka */
  flex-wrap: wrap; /* Memungkinkan item untuk melipat ke baris baru jika ruang tidak cukup */
}

header h1 { /* Mengatur gaya untuk judul h1 dalam header */
  font-size: 1.4rem; /* Mengatur ukuran font judul */
  color: #a855f7; /* Mengatur warna judul menjadi ungu */
}

.nav-toggle-label { /* Mengatur gaya untuk label tombol navigasi (toggle) */
  display: none; /* Menyembunyikan label secara default (akan ditampilkan pada breakpoint tertentu) */
  font-size: 1.6rem; /* Mengatur ukuran font */
  color: #fff; /* Mengatur warna ikon menjadi putih */
  background: none; /* Menghilangkan latar belakang */
  border: none; /* Menghilangkan border */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atasnya */
}

header nav ul { /* Mengatur gaya untuk daftar tak berurutan dalam navigasi header */
  list-style: none; /* Menghilangkan bullet point dari daftar */
  display: flex; /* Menggunakan flexbox untuk item daftar */
  gap: 1.25rem; /* Memberikan jarak antar item daftar */
}

header nav a { /* Mengatur gaya untuk tautan dalam navigasi header */
  color: #f3f0fa; /* Mengatur warna tautan menjadi putih keabu-abuan */
  font-weight: 500; /* Mengatur ketebalan font tautan */
}

main { /* Mengatur gaya untuk konten utama */
  max-width: 1000px; /* Mengatur lebar maksimum konten utama */
  margin: 2rem auto; /* Memberikan margin atas/bawah dan memusatkan secara horizontal */
  padding: 0 1.5rem; /* Memberikan padding horizontal */
}

section { /* Mengatur gaya untuk setiap bagian (section) */
  background-color: #17141f; /* Mengatur warna latar belakang bagian */
  border: 1px solid #2a2140; /* Memberikan border solid pada bagian */
  border-radius: 8px; /* Memberikan sudut membulat pada bagian */
  padding: 1.5rem; /* Memberikan padding di dalam bagian */
  margin-bottom: 1.5rem; /* Memberikan margin bawah antar bagian */
}

section h2 { /* Mengatur gaya untuk judul h2 dalam bagian */
  margin-bottom: 1rem; /* Memberikan margin bawah pada judul */
  color: #a855f7; /* Mengatur warna judul menjadi ungu */
}

main section:nth-of-type(2) { /* Mengatur gaya untuk bagian kedua dalam main */
  display: grid; /* Menggunakan grid untuk tata letak */
  grid-template-columns: repeat(3, 1fr); /* Membuat 3 kolom dengan lebar yang sama */
  gap: 1rem; /* Memberikan jarak antar item grid */
}

main section:nth-of-type(2) article { /* Mengatur gaya untuk artikel dalam bagian kedua */
  background-color: #1f1a2b; /* Mengatur warna latar belakang artikel */
  border-radius: 8px; /* Memberikan sudut membulat pada artikel */
  padding: 1.25rem; /* Memberikan padding di dalam artikel */
  text-align: center; /* Memusatkan teks dalam artikel */
}

main section:nth-of-type(2) h2 { /* Mengatur gaya untuk judul h2 dalam bagian kedua */
  grid-column: 1 / -1; /* Membuat judul membentang di semua kolom grid */
}

main section:nth-of-type(2) article h3 { /* Mengatur gaya untuk judul h3 dalam artikel bagian kedua */
  font-size: 0.95rem; /* Mengatur ukuran font judul */
  color: #b6aecb; /* Mengatur warna judul menjadi abu-abu keunguan */
  margin-bottom: 0.5rem; /* Memberikan margin bawah pada judul */
}

main section:nth-of-type(2) article p { /* Mengatur gaya untuk paragraf dalam artikel bagian kedua */
  font-size: 1.8rem; /* Mengatur ukuran font paragraf */
  font-weight: 700; /* Mengatur ketebalan font paragraf */
  color: #a855f7; /* Mengatur warna paragraf menjadi ungu */
}

.table-responsive { /* Mengatur gaya untuk kontainer tabel responsif */
  overflow-x: auto; /* Mengaktifkan scroll horizontal jika tabel terlalu lebar */
}

table { /* Mengatur gaya untuk tabel */
  width: 100%; /* Membuat tabel mengisi lebar penuh kontainernya */
  border-collapse: collapse; /* Menggabungkan border sel tabel */
}

th, /* Mengatur gaya untuk header tabel */
td { /* Mengatur gaya untuk sel data tabel */
  text-align: left; /* Menyelaraskan teks ke kiri */
  padding: 0.65rem 0.75rem; /* Memberikan padding di dalam sel */
  border-bottom: 1px solid #2a2140; /* Memberikan garis bawah pada setiap sel */
}

thead { /* Mengatur gaya untuk kepala tabel */
  background-color: #2a2140; /* Mengatur warna latar belakang kepala tabel */
  color: #f3f0fa; /* Mengatur warna teks di kepala tabel */
}

tbody tr:hover { /* Mengatur gaya baris tabel saat dihover */
  background-color: #1f1a2b; /* Mengubah warna latar belakang baris saat dihover */
}

td button { /* Mengatur gaya untuk tombol di dalam sel tabel */
  padding: 0.35rem 0.7rem; /* Memberikan padding di dalam tombol */
  margin-right: 0.35rem; /* Memberikan margin kanan pada tombol */
  border: none; /* Menghilangkan border tombol */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atasnya */
  font-size: 0.85rem; /* Mengatur ukuran font tombol */
}

td button:first-of-type { /* Mengatur gaya untuk tombol pertama dalam sel tabel */
  background-color: #f0ad4e; /* Mengatur warna latar belakang tombol (misal: Edit) */
  color: #fff; /* Mengatur warna teks tombol menjadi putih */
}

td button.btn-hapus { /* Mengatur gaya untuk tombol dengan kelas btn-hapus */
  background-color: #d9534f; /* Mengatur warna latar belakang tombol (misal: Hapus) */
  color: #fff; /* Mengatur warna teks tombol menjadi putih */
}

form p { /* Mengatur gaya untuk paragraf dalam form */
  margin-bottom: 1rem; /* Memberikan margin bawah pada paragraf */
}

form label { /* Mengatur gaya untuk label dalam form */
  display: block; /* Menjadikan label sebagai elemen blok */
  margin-bottom: 0.35rem; /* Memberikan margin bawah pada label */
  font-weight: 600; /* Mengatur ketebalan font label */
  color: #b6aecb; /* Mengatur warna label menjadi abu-abu keunguan */
}

form input, /* Mengatur gaya untuk input form */
form select { /* Mengatur gaya untuk select form */
  width: 100%; /* Membuat input/select mengisi lebar penuh */
  max-width: 400px; /* Mengatur lebar maksimum input/select */
  padding: 0.55rem 0.7rem; /* Memberikan padding di dalam input/select */
  border: 1px solid #2a2140; /* Memberikan border solid pada input/select */
  border-radius: 4px; /* Memberikan sudut membulat pada input/select */
  font-size: 1rem; /* Mengatur ukuran font */
  background-color: #1f1a2b; /* Mengatur warna latar belakang */
  color: #f3f0fa; /* Mengatur warna teks */
}

form button[type="submit"] { /* Mengatur gaya untuk tombol submit form */
  background-color: #9333ea; /* Mengatur warna latar belakang tombol submit */
  color: #fff; /* Mengatur warna teks tombol menjadi putih */
  border: none; /* Menghilangkan border tombol */
  padding: 0.55rem 1rem; /* Memberikan padding di dalam tombol */
  border-radius: 4px; /* Memberikan sudut membulat pada tombol */
  font-size: 1rem; /* Mengatur ukuran font */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat di atasnya */
}

form button[type="submit":hover { /* Mengatur gaya tombol submit saat dihover */
  background-color: #7e22ce; /* Mengubah warna latar belakang tombol saat dihover */
}

.search-box { /* Mengatur gaya untuk kotak pencarian */
  margin-bottom: 1rem; /* Memberikan margin bawah pada kotak pencarian */
}

.search-box input { /* Mengatur gaya untuk input di dalam kotak pencarian */
  width: 100%; /* Membuat input mengisi lebar penuh */
  max-width: 320px; /* Mengatur lebar maksimum input */
  padding: 0.5rem 0.75rem; /* Memberikan padding di dalam input */
  border: 1px solid #2a2140; /* Memberikan border solid pada input */
  border-radius: 4px; /* Memberikan sudut membulat pada input */
  background-color: #1f1a2b; /* Mengatur warna latar belakang input */
  color: #f3f0fa; /* Mengatur warna teks input */
}

.flash { /* Mengatur gaya umum untuk pesan flash */
  padding: 0.75rem 1rem; /* Memberikan padding di dalam pesan flash */
  border-radius: 6px; /* Memberikan sudut membulat pada pesan flash */
  margin-bottom: 1rem; /* Memberikan margin bawah pada pesan flash */
  font-weight: 500; /* Mengatur ketebalan font */
}

.flash-success { /* Mengatur gaya untuk pesan flash sukses */
  background-color: #14532d; /* Mengatur warna latar belakang hijau gelap */
  color: #bbf7d0; /* Mengatur warna teks hijau muda */
}

.flash-error { /* Mengatur gaya untuk pesan flash error */
  background-color: #7f1d1d; /* Mengatur warna latar belakang merah gelap */
  color: #fecaca; /* Mengatur warna teks merah muda */
}

.error { /* Mengatur gaya untuk pesan error validasi */
  display: block; /* Menjadikan elemen sebagai blok */
  color: #fca5a5; /* Mengatur warna teks merah muda */
  font-size: 0.85rem; /* Mengatur ukuran font */
  margin-top: 0.25rem; /* Memberikan margin atas */
}

footer { /* Mengatur gaya untuk footer */
  text-align: center; /* Memusatkan teks di footer */
  color: #b6aecb; /* Mengatur warna teks footer */
  padding: 1.25rem; /* Memberikan padding di dalam footer */
  font-size: 0.9rem; /* Mengatur ukuran font footer */
}

@media (max-width: 768px) { /* Media query untuk lebar layar maksimal 768px */
  main section:nth-of-type(2) { /* Mengatur bagian kedua dalam main */
    grid-template-columns: repeat(2, 1fr); /* Mengubah menjadi 2 kolom dengan lebar yang sama */
  }
}

@media (max-width: 480px) { /* Media query untuk lebar layar maksimal 480px */
  header { /* Mengatur header */
    position: relative; /* Mengatur posisi relatif untuk penempatan elemen anak */
  }

  .nav-toggle-label { /* Mengatur label tombol navigasi (toggle) */
    display: block; /* Menampilkan label (ikon burger) pada layar kecil */
  }

  header nav { /* Mengatur navigasi header */
    display: none; /* Menyembunyikan navigasi secara default pada layar kecil */
    width: 100%; /* Membuat navigasi mengisi lebar penuh */
    order: 3; /* Mengubah urutan navigasi (muncul di bawah judul/toggle) */
    margin-top: 1rem; /* Memberikan margin atas */
  }

  header nav.nav-open { /* Mengatur navigasi header saat kelas nav-open aktif */
    display: block; /* Menampilkan navigasi saat kelas nav-open ditambahkan */
  }

  header nav ul { /* Mengatur daftar tak berurutan dalam navigasi header */
    flex-direction: column; /* Mengubah arah flex menjadi kolom (item bertumpuk) */
    gap: 0.75rem; /* Mengatur jarak antar item daftar */
  }

  main section:nth-of-type(2) { /* Mengatur bagian kedua dalam main */
    grid-template-columns: 1fr; /* Mengubah menjadi 1 kolom penuh */
  }
}
```

# LAPORAN JOBSHEET 5

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 4

Jobsheet 5 mulai mengubah halaman dari tampilan pasif menjadi antarmuka yang memiliki interaksi dan validasi sisi klien. Rancangan wireframe dari Jobsheet 4 menjadi acuan untuk form dan tabel, tetapi data belum masuk ke database.

## File dan Fungsi

- `assets/js/app.js` menginisialisasi fitur ketika `DOMContentLoaded`.
- Konfirmasi `.btn-hapus` meminta persetujuan sebelum baris tabel dihapus dari tampilan.
- Filter tabel membaca `#search-input`, membandingkan teks baris, lalu menyembunyikan baris yang tidak sesuai kata kunci.
- Validasi form memeriksa `nama_kelas` atau `nama`, `instruktur`, `jadwal`, dan `kapasitas`.
- `tampilkanError()` membuat pesan kesalahan dekat field dan `hapusError()` mencegah pesan ganda.
- `assets/js/shell.js` tetap menangani sidebar responsif.

## Batasan

Penghapusan masih hanya menghapus elemen HTML dari browser dan input belum dikirim ke backend. Tidak ada PHP, session, file JSON, atau Supabase pada tahap ini.

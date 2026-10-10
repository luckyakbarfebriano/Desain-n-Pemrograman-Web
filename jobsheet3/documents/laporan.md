# LAPORAN JOBSHEET 3

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 2

Jobsheet 3 mempertahankan pola aset bersama dari Jobsheet 2, lalu menerapkannya secara lebih konsisten ke seluruh halaman daftar dan form. Fokusnya bukan database, melainkan standardisasi komponen agar halaman kelas, anggota, dan buku terasa sebagai satu aplikasi.

## Isi dan Fungsi

- `assets/css/style.css` digunakan untuk menyamakan ukuran judul, kartu, tabel, field form, tombol, sidebar, dan responsivitas.
- `assets/js/shell.js` dipakai lintas halaman untuk navigasi sidebar pada perangkat kecil.
- Halaman `list.html` menampilkan data dalam tabel dengan aksi navigasi, sedangkan `tambah.html` menyiapkan form input yang seragam.
- Struktur tautan antarhalaman dipersiapkan agar fitur CRUD dapat ditambahkan tanpa mengubah pola navigasi.

## Batasan

Data masih berupa contoh di dalam HTML dan form belum diproses oleh server. Belum ada `fetch`, file JSON, PHP, session, atau koneksi ke Supabase. Jobsheet ini menghasilkan template frontend yang stabil sebelum masuk ke rancangan alur dan interaksi.

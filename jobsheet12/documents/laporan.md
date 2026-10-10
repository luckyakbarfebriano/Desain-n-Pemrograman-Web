# LAPORAN JOBSHEET 12

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 11

Jobsheet 12 menambahkan modul bisnis baru di atas CRUD, login, dan CSRF: pendaftaran anggota ke kelas gym. Modul ini membutuhkan relasi antarentitas dan status transaksi.

## Database

- `sql/03_pendaftaran.sql` membuat tabel `pendaftaran`.
- `kelas_id` menjadi foreign key ke `kelas(id)`.
- `anggota_id` menjadi foreign key ke `anggota(id)`.
- `tanggal_daftar` mencatat waktu pendaftaran dan memiliki default `CURRENT_DATE`.
- `tanggal_selesai` diisi ketika pendaftaran diselesaikan.
- `status` membedakan pendaftaran `aktif` dan `selesai`.

## Halaman dan Proses

- `pendaftaran/tambah.php` menampilkan form dengan pilihan anggota dan kelas.
- `proses_tambah.php` menyimpan relasi baru ke Supabase.
- `riwayat.php` menampilkan daftar pendaftaran, sedangkan `selesai.php` menampilkan data yang sudah selesai.
- `proses_selesai.php` mengubah status dan tanggal selesai.
- `index.php` menghitung jumlah pendaftaran aktif untuk ringkasan dashboard.

## Keamanan dan Integrasi

Proses perubahan data tetap menggunakan autentikasi serta CSRF dari jobsheet sebelumnya. Query relasional memanfaatkan foreign key agar pendaftaran tidak menunjuk ke anggota atau kelas yang tidak ada.

# LAPORAN JOBSHEET 10

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 9

Jobsheet 10 menambahkan identitas pengguna dan pembatasan akses. Sebelum tahap ini CRUD dapat menjadi halaman terbuka, sedangkan sekarang operasi pengelolaan diarahkan untuk petugas yang telah login.

## Autentikasi

- `sql/02_users.sql` membuat tabel `users` dengan nama, username unik, password, dan role petugas.
- `auth/register.php` dan `auth/proses_register.php` menangani pendaftaran akun.
- `auth/login.php` dan `auth/proses_login.php` memeriksa username serta password.
- `auth/logout.php` menghentikan session saat pengguna keluar.
- `includes/auth.php` menjadi guard yang memulai session dan mengarahkan pengguna yang belum login.
- Password tidak disimpan sebagai teks biasa; proses login menggunakan password hash dan verifikasi hash.
- Header membaca session untuk menampilkan status atau identitas pengguna.

## Hubungan dengan Supabase

Tabel pengguna dibuat di database Supabase yang sama dengan tabel kelas dan anggota. PHP tetap memakai PDO dan environment variable untuk koneksi, sehingga autentikasi membaca data akun dari database, bukan dari array atau file lokal.

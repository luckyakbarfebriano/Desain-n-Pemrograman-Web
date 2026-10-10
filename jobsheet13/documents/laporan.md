# LAPORAN JOBSHEET 13

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 12

Jobsheet 13 mempertahankan seluruh fitur aplikasi, tetapi memperbaiki pemisahan konfigurasi, keamanan routing, dan kesiapan deployment serverless. Modul CRUD, autentikasi, CSRF, dan pendaftaran tetap menjadi fungsi utama aplikasi.

## Konfigurasi dan Deployment

- `includes/config.php` memisahkan konfigurasi database dari kode koneksi. Nilai host, port, nama database, user, dan password dibaca melalui environment variable.
- Fungsi `env_value()` mencoba `getenv()`, `$_ENV`, dan `$_SERVER`, karena cara pembacaan environment dapat berbeda pada serverless.
- Password tidak memiliki nilai default di source code. Konfigurasi yang belum lengkap menghasilkan pesan kegagalan yang jelas.
- `includes/koneksi.php` memakai konfigurasi tersebut untuk membuat koneksi PDO ke Supabase transaction pooler.
- `vercel.json` menentukan runtime PHP dan mengarahkan request ke front controller.
- `api/index.php` membaca path request, menetapkan `/` ke `index.php`, memeriksa pola rute yang diizinkan, lalu meneruskan request ke target PHP.

## Perlindungan Akses

Front controller menolak akses langsung ke folder `includes`, `sql`, dan dokumentasi. Hanya `index.php` serta file PHP pada folder `anggota`, `kelas`, `auth`, dan `pendaftaran` yang boleh dirutekan. Ini mengurangi risiko file konfigurasi atau SQL dibuka sebagai resource publik.

## Kesimpulan

Jobsheet 13 mengintegrasikan hasil Jobsheet 1–12 menjadi aplikasi PHP yang lebih siap dipublikasikan: UI konsisten, data persisten di Supabase, CRUD lengkap, login, CSRF, pendaftaran kelas, riwayat, konfigurasi environment, dan routing deployment.

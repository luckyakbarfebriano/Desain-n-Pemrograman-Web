# LAPORAN JOBSHEET 11

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 10

Jobsheet 10 sudah memiliki login dan guard akses. Jobsheet 11 menambahkan perlindungan terhadap pemalsuan request menggunakan CSRF token, sehingga request POST tidak cukup hanya memiliki field data biasa.

## Implementasi Keamanan

- `includes/csrf.php` menyediakan `csrf_token()`, `csrf_field()`, dan `csrf_verify()`.
- Token dibuat dengan nilai acak, disimpan pada session, lalu dikirim sebagai hidden input pada form.
- Proses login, registrasi, tambah, edit, dan hapus memanggil verifikasi token sebelum mengubah state.
- Form daftar kelas dan anggota menampilkan token melalui helper agar pola aman konsisten.
- `session_regenerate_id(true)` setelah login membantu mencegah session fixation.
- `auth.php` tetap memastikan hanya pengguna terautentikasi yang boleh mengakses modul tertentu.

## Dampak

CRUD dan autentikasi dari Jobsheet 10 tetap berjalan pada Supabase, tetapi setiap perubahan database sekarang melewati pemeriksaan session dan token. Jobsheet ini menambah lapisan keamanan aplikasi, bukan menambah tabel bisnis baru.

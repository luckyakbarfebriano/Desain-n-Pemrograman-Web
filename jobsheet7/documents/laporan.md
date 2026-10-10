# LAPORAN JOBSHEET 7

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 6

Jobsheet 7 memindahkan aplikasi dari HTML/JSON ke struktur server-side PHP. Folder ini mulai memiliki file `.php`, komponen include, proses form, dan koneksi PostgreSQL yang diarahkan ke Supabase.

## File dan Fungsi

- `index.php` menjadi beranda server-side.
- `includes/header.php` dan `includes/footer.php` dipakai berulang untuk menjaga layout, navigasi, dan footer tetap konsisten.
- `includes/koneksi.php` membuat objek PDO PostgreSQL. Host dan user mengarah ke Supabase transaction pooler, sedangkan password dibaca dari environment variable `DB_PASS`, bukan ditulis di kode.
- `kelas` dan `anggota` memiliki halaman daftar, form tambah, serta file `proses_tambah.php`.
- File proses membaca data POST, menjalankan proses backend, lalu melakukan redirect.
- `api/index.php` dan `vercel.json` mulai menyiapkan pola deployment PHP.

## Catatan

Pada tahap ini fondasi koneksi sudah tersedia, tetapi Jobsheet 8 yang menambahkan skema SQL dan query database membuat data kelas serta anggota benar-benar tersimpan dan dibaca dari Supabase.

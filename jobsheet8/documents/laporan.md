# LAPORAN JOBSHEET 8

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 7

Jobsheet 7 baru menyiapkan struktur PHP dan koneksi. Jobsheet 8 mulai menggunakan koneksi tersebut secara nyata untuk berkomunikasi dengan PostgreSQL di Supabase.

## Database dan Koneksi Supabase

- `sql/01_kelas_anggota.sql` membuat tabel `kelas` dan `anggota`.
- Tabel kelas menyimpan nama kelas, instruktur, jadwal, dan kapasitas.
- Tabel anggota menyimpan nama, nomor anggota, alamat, dan nomor telepon.
- `id` digunakan sebagai primary key, sedangkan `no_anggota` diberi constraint `UNIQUE`.
- SQL juga menyediakan data awal agar halaman dapat langsung diuji.
- `includes/koneksi.php` membuat PDO dengan host Supabase transaction pooler pada port 6543. Password dibaca dari `DB_PASS`, kemudian mode error exception diaktifkan agar kegagalan database tidak diam-diam diabaikan.

## Fungsi PHP

Halaman `list.php` mengambil data menggunakan `SELECT` dan menampilkan hasilnya ke tabel. File `proses_tambah.php` menerima input form dan memasukkannya ke database menggunakan query terparameterisasi. Dengan demikian perubahan data menjadi persisten, dapat dilihat kembali oleh request berikutnya, dan tidak lagi bergantung pada HTML atau JSON lokal.

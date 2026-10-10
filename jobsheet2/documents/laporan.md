# LAPORAN JOBSHEET 2

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 1

Jobsheet 1 masih menaruh halaman tanpa folder aset bersama. Pada Jobsheet 2 mulai ditambahkan pemisahan aset sehingga HTML tidak lagi menjadi satu-satunya tempat untuk mengatur tampilan dan perilaku.

## File dan Fungsi

- `assets/css/style.css` menjadi stylesheet bersama untuk warna, tipografi, sidebar, kartu statistik, tabel, form, tombol, jarak, dan tampilan responsif.
- `assets/js/shell.js` mengatur perilaku shell halaman. Fungsi `initSidebarToggle()` membuka atau menutup sidebar pada layar kecil dan menggunakan overlay agar menu dapat ditutup dengan klik di luar.
- Halaman `index.html`, `kelas`, `anggota`, dan `buku` memakai aset tersebut melalui tag `link` dan `script`.

## Dampak Tahap Ini

Tampilan menjadi konsisten dan lebih mudah dirawat karena perubahan CSS atau navigasi cukup dilakukan pada aset bersama. Data masih hard-coded di HTML; belum ada JavaScript untuk mengambil data, PHP, database, atau koneksi Supabase. Jobsheet ini membangun fondasi struktur frontend untuk fitur dinamis berikutnya.

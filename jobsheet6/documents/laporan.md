# LAPORAN JOBSHEET 6

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 5

Jobsheet 6 memperkenalkan pemuatan data eksternal di frontend. Data tidak lagi seluruhnya ditulis sebagai baris tabel di HTML, tetapi disimpan dalam file JSON dan diambil saat halaman dibuka.

## File dan Fungsi

- `data/kelas.json` menyimpan data contoh kelas.
- `data/anggota.json` menyimpan data contoh anggota.
- `assets/js/kelas.js` mengambil `../data/kelas.json` dengan `fetch()`, memproses respons, dan membuat baris tabel kelas.
- `assets/js/anggota.js` melakukan proses serupa untuk data anggota.
- `assets/js/app.js` memakai event delegation untuk konfirmasi hapus sehingga tombol pada baris hasil `fetch()` tetap dapat berfungsi.
- Filter tabel, validasi form, dan sidebar dari tahap sebelumnya tetap digunakan.

## Kesimpulan

Jobsheet 6 adalah latihan transisi dari HTML statis menuju data-driven UI. JSON masih berupa file lokal dan belum menyediakan operasi simpan, edit, atau hapus permanen. Supabase dan PHP baru menjadi kebutuhan tahap backend berikutnya.

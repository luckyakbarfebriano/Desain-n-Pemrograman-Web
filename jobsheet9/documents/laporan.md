# LAPORAN JOBSHEET 9

**LUCKY AKBAR FEBRIANO /254107020134 / 12 /  / TI 2D**

## Perubahan dari Jobsheet 8

Jobsheet 8 telah membuat data dapat dibaca dan ditambah. Jobsheet 9 melengkapi siklus CRUD sehingga data kelas dan anggota dapat dibuat, dibaca, diperbarui, dan dihapus melalui aplikasi.

## Modul dan Alur

- `list.php` mengambil data dari database dan menyediakan aksi per baris.
- `tambah.php` menampilkan form input baru.
- `proses_tambah.php` menyimpan data baru.
- `edit.php` mengambil data berdasarkan ID dan mengisi form dengan nilai lama.
- `proses_edit.php` memperbarui kolom yang dikirim dari form.
- `hapus.php` menghapus record berdasarkan ID setelah aksi dipilih pengguna.
- Pola yang sama diterapkan pada folder `kelas` dan `anggota`.

## Fungsi Teknis

PDO dipakai untuk query database, dan prepared statement membantu memisahkan nilai input dari SQL. `header.php`, `footer.php`, CSS, dan JavaScript bersama menjaga tampilan CRUD tetap konsisten. Database yang dipakai tetap tabel Supabase dari Jobsheet 8; Jobsheet 9 berfokus pada operasi lengkap atas tabel tersebut.

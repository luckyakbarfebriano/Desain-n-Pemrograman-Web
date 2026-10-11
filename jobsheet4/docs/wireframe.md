# Wireframe & User Flow — WE GO GYM

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Halaman yang sudah ada pada Jobsheet 1–3 adalah Beranda, Daftar/Tambah Kelas, dan Daftar/Tambah Member. Dokumen ini merancang kebutuhan login, dashboard, pendaftaran kelas, penyelesaian kelas, dan riwayat member yang akan dikembangkan pada jobsheet berikutnya.

## Aktor

- **Pengunjung**: dapat melihat informasi beranda, kelas, dan member tanpa login.
- **Pengguna terdaftar**: login untuk mendaftarkan member ke kelas dan mengelola pendaftaran miliknya.

## User Flow — Pendaftaran Kelas

```text
[Login] -> [Dashboard] -> [Pilih "Daftar ke Kelas"]
        -> [Pilih Member] -> [Pilih Kelas (kapasitas tersedia)]
        -> [Simpan Pendaftaran] -> [Peserta kelas bertambah]
        -> [Kembali ke Dashboard]
```

## User Flow — Penyelesaian Kelas

```text
[Dashboard] -> [Menu "Selesaikan Kelas"]
        -> [Cari pendaftaran aktif] -> [Tandai "Selesai"]
        -> [Kembali ke Dashboard]
```

## Wireframe: Halaman Login

```text
+--------------------------------------+
|              WE GO GYM               |
|--------------------------------------|
|                                      |
|          [ Login Pengguna ]          |
|                                      |
|   Username : [______________]        |
|   Password : [______________]        |
|                                      |
|             [   Masuk   ]            |
|                                      |
|   Belum punya akun? Daftar di sini   |
+--------------------------------------+
```

## Wireframe: Dashboard

```text
+------------------------------------------------------+
| WE GO GYM  Beranda | Kelas | Member | Pendaftaran | Logout |
|------------------------------------------------------|
| [Total Kelas] [Total Member] [Pendaftaran Aktif]     |
|                                                      |
| Aksi Cepat:                                          |
| [ + Daftar ke Kelas ]   [ + Selesaikan Kelas ]       |
|                                                      |
| Pendaftaran Terbaru                                 |
| --------------------------------------------------   |
| Member | Kelas | Tanggal Daftar | Status             |
+------------------------------------------------------+
```

## Wireframe: Form Pendaftaran Kelas

```text
+--------------------------------------+
|  Form Pendaftaran Kelas              |
|--------------------------------------|
|  Member : [ dropdown pilih member ]  |
|  Kelas  : [ dropdown, kapasitas ada ]|
|  Tanggal Daftar : [ otomatis ]       |
|                                      |
|        [ Simpan Pendaftaran ]        |
+--------------------------------------+
```

## Wireframe: Form Penyelesaian Kelas

```text
+--------------------------------------+
|  Selesaikan Kelas                    |
|--------------------------------------|
|  Cari pendaftaran aktif:             |
|  [ nama member / nama kelas ______ ] |
|                                      |
| Member | Kelas | Tgl Daftar | [Selesai] |
+--------------------------------------+
```

## Wireframe: Riwayat Kelas per Member

```text
+-------------------------------------------------------------+
|  Riwayat Kelas — Siti Aminah                               |
|-------------------------------------------------------------|
|  Kelas             | Daftar  | Selesai | Status              |
|  Yoga Pagi         | 01/07   | 10/07   | Selesai             |
|  Zumba Party       | 15/07   | -       | Aktif               |
|  HIIT Blast        | 20/07   | 25/07   | Selesai             |
+-------------------------------------------------------------+
```

## Konsistensi dengan Desain yang Sudah Berjalan

- Warna aksen, tipografi navbar, dan gaya tabel/kartu mengikuti `assets/css/style.css` yang sudah dibangun sejak Jobsheet 2–3.
- Navbar akan memuat menu Kelas, Member, Pendaftaran, serta indikator status login mulai tahap implementasi backend.
- Kelas yang sudah penuh tidak boleh dipilih pada form pendaftaran.
- Pendaftaran aktif tidak boleh diselesaikan lebih dari satu kali.

# Wireframe & User Flow — WE GO GYM

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Jobsheet 6 mempertahankan rancangan WE GO GYM dari Jobsheet 4–5 dan mempersiapkan tampilan untuk data kelas serta member yang dimuat dari JSON.

## Aktor

- **Pengunjung**: melihat beranda, daftar kelas, dan daftar member.
- **Pengguna terdaftar**: login untuk mengelola pendaftaran kelas.

## Dashboard

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
| Member | Kelas | Tanggal Daftar | Status             |
+------------------------------------------------------+
```

## User Flow — Pendaftaran Kelas

```text
[Login] -> [Dashboard] -> [Daftar ke Kelas]
        -> [Pilih Member] -> [Pilih Kelas yang kapasitasnya tersedia]
        -> [Simpan Pendaftaran] -> [Dashboard]
```

## User Flow — Penyelesaian Kelas

```text
[Dashboard] -> [Selesaikan Kelas] -> [Cari pendaftaran aktif]
        -> [Tandai selesai] -> [Riwayat diperbarui]
```

## Tampilan Data

- Tabel kelas mengambil data dari `data/kelas.json`.
- Tabel member mengambil data dari `data/anggota.json`.
- Saat data sedang dimuat, halaman menampilkan status pemuatan.
- Jika JSON gagal dibaca, halaman menampilkan pesan kesalahan yang jelas.
- Tombol aksi tetap menggunakan event delegation agar berfungsi pada baris yang dibuat oleh `fetch()`.

## Aturan Interaksi

- Kelas dengan kapasitas penuh tidak boleh dipilih untuk pendaftaran.
- Data pendaftaran harus memiliki member, kelas, dan tanggal yang valid.
- Pendaftaran aktif tidak boleh diselesaikan lebih dari satu kali.
- Konfirmasi hapus tetap ditampilkan sebelum baris dihapus dari tampilan.

# Wireframe & User Flow — WE GO GYM

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Dokumen ini menyempurnakan rancangan Jobsheet 4 agar sesuai dengan aplikasi WE GO GYM. Fitur yang dirancang adalah login, dashboard, pengelolaan kelas dan member, pendaftaran kelas, penyelesaian kelas, serta riwayat pendaftaran.

## Aktor

- **Pengunjung**: melihat beranda, daftar kelas, dan daftar member.
- **Pengguna terdaftar**: login untuk mengelola pendaftaran kelas.

## User Flow — Pendaftaran Kelas

```text
[Login] -> [Dashboard] -> [Daftar ke Kelas]
        -> [Pilih Member] -> [Pilih Kelas dengan kapasitas tersedia]
        -> [Simpan] -> [Pendaftaran aktif] -> [Dashboard]
```

## User Flow — Penyelesaian Kelas

```text
[Dashboard] -> [Selesaikan Kelas] -> [Cari pendaftaran aktif]
        -> [Tandai selesai] -> [Riwayat diperbarui]
```

## Rancangan Halaman

```text
Login:
[Username] [Password] [Masuk] [Daftar akun]

Dashboard:
[Total Kelas] [Total Member] [Pendaftaran Aktif]
[+ Daftar ke Kelas] [+ Selesaikan Kelas]

Pendaftaran:
Member [dropdown] | Kelas [dropdown kapasitas tersedia]
[Simpan Pendaftaran]

Penyelesaian:
[Cari member atau kelas] -> [Selesaikan]
```

## Aturan Interaksi

- Kelas dengan kapasitas penuh tidak ditampilkan sebagai pilihan pendaftaran.
- Data form divalidasi sebelum diproses.
- Tombol hapus meminta konfirmasi sebelum menghapus baris dari tampilan.
- Pendaftaran aktif dapat ditandai selesai satu kali.

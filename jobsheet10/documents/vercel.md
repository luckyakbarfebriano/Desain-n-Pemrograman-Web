# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```json
{
  "regions": ["sin1"],
  "functions": {
    "api/index.php": { "runtime": "vercel-php@0.7.4" }
  },
  "routes": [
    { "src": "/assets/(.*)", "dest": "/assets/$1" },
    { "src": "/(.*)", "dest": "/api/index.php" }
  ]
}
```

Penjelasan konfigurasi:

- `regions` menentukan wilayah server Vercel yang digunakan.
- `functions` mendaftarkan fungsi serverless yang dijalankan oleh Vercel.
- `api/index.php` menunjuk ke file PHP sebagai fungsi serverless.
- `runtime` menentukan runtime PHP yang digunakan.
- `routes` mengatur pemetaan URL ke file tujuan.
- Rute `/assets/(.*)` meneruskan permintaan aset statis ke folder `assets`.
- Rute `/(.*)` meneruskan permintaan lainnya ke `api/index.php`.

# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 
```sql
-- Jobsheet 10: tabel users (Petugas) untuk autentikasi
-- Jalankan setelah sql/01_kelas_anggota.sql, misal lewat Supabase SQL editor
-- atau: psql -f sql/02_users.sql

CREATE TABLE IF NOT EXISTS users ( -- membuat struktur database jika belum tersedia.
    id SERIAL PRIMARY KEY, -- mendefinisikan kolom dan aturan data tabel.
    nama VARCHAR(255) NOT NULL, -- mendefinisikan kolom dan aturan data tabel.
    username VARCHAR(50) NOT NULL UNIQUE, -- mendefinisikan kolom dan aturan data tabel.
    password VARCHAR(255) NOT NULL, -- mendefinisikan kolom dan aturan data tabel.
    role VARCHAR(20) NOT NULL DEFAULT 'petugas' -- mendefinisikan kolom dan aturan data tabel.
); -- menjalankan instruksi pada alur program.
``` 
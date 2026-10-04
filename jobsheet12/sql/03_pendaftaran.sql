-- Jobsheet 12: tabel pendaftaran, menghubungkan kelas dan anggota

CREATE TABLE IF NOT EXISTS pendaftaran (
    id SERIAL PRIMARY KEY,
    kelas_id INTEGER NOT NULL REFERENCES kelas(id),
    anggota_id INTEGER NOT NULL REFERENCES anggota(id),
    tanggal_daftar DATE NOT NULL DEFAULT CURRENT_DATE,
    tanggal_selesai DATE,
    status VARCHAR(20) NOT NULL DEFAULT 'aktif'
);

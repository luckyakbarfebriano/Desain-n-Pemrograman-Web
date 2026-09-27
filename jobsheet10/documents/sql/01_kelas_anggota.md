#LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO 

```sql 
-- Jobsheet 9: skema database WE GO GYM (PostgreSQL / Supabase)
-- Skema sama dengan Jobsheet 8 â€” Jobsheet 9 fokus melengkapi CRUD
-- (Update + Delete) serta pagination & pencarian server-side,
-- tanpa mengubah struktur tabel.

create table if not exists kelas ( -- membuat struktur database jika belum tersedia.
    id serial primary key, -- mendefinisikan kolom dan aturan data tabel.
    nama_kelas varchar(255) not null, -- mendefinisikan kolom dan aturan data tabel.
    instruktur varchar(255) not null, -- mendefinisikan kolom dan aturan data tabel.
    jadwal varchar(255) not null, -- mendefinisikan kolom dan aturan data tabel.
    kapasitas integer not null default 0 -- mendefinisikan kolom dan aturan data tabel.
); -- menjalankan instruksi pada alur program.

create table if not exists anggota ( -- membuat struktur database jika belum tersedia.
    id serial primary key, -- mendefinisikan kolom dan aturan data tabel.
    nama varchar(255) not null, -- mendefinisikan kolom dan aturan data tabel.
    no_anggota varchar(50) not null unique, -- mendefinisikan kolom dan aturan data tabel.
    alamat varchar(255), -- mendefinisikan kolom dan aturan data tabel.
    no_hp varchar(30) -- mendefinisikan kolom dan aturan data tabel.
); -- menjalankan instruksi pada alur program.

insert into kelas (nama_kelas, instruktur, jadwal, kapasitas) values -- menambahkan data baru ke database.
('Yoga Pagi', 'Rina Wijaya', 'Senin & Rabu, 06:00', 15), -- menjalankan instruksi pada alur program.
('Zumba Party', 'Dimas Prakoso', 'Selasa & Kamis, 17:00', 20), -- menjalankan instruksi pada alur program.
('HIIT Blast', 'Bagus Setiawan', 'Senin, Rabu, Jumat, 18:00', 12), -- menjalankan instruksi pada alur program.
('Muay Thai Basic', 'Chalermchai Boon', 'Selasa & Kamis, 19:00', 10), -- menjalankan instruksi pada alur program.
('CrossFit WOD', 'Farhan Maulana', 'Senin-Jumat, 06:30', 8), -- menjalankan instruksi pada alur program.
('Pilates Reformer', 'Sarah Amelia', 'Rabu & Jumat, 09:00', 10), -- menjalankan instruksi pada alur program.
('Boxing Fundamentals', 'Rocky Pratama', 'Selasa & Kamis, 20:00', 12), -- menjalankan instruksi pada alur program.
('Spin Cycle', 'Nadia Kusuma', 'Senin & Rabu, 07:00', 18), -- menjalankan instruksi pada alur program.
('Body Combat', 'Yoga Saputra', 'Sabtu, 08:00', 20), -- menjalankan instruksi pada alur program.
('Aerobik Ceria', 'Wulan Sari', 'Senin, Rabu, Jumat, 08:00', 25), -- menjalankan instruksi pada alur program.
('Calisthenics Skill', 'Reza Firmansyah', 'Selasa & Kamis, 16:00', 10), -- menjalankan instruksi pada alur program.
('Powerlifting Club', 'Anton Wijaksono', 'Senin & Kamis, 19:30', 6), -- menjalankan instruksi pada alur program.
('Aqua Fitness', 'Melati Putri', 'Sabtu & Minggu, 09:00', 15); -- menjalankan instruksi pada alur program.

insert into anggota (nama, no_anggota, alamat, no_hp) values -- menambahkan data baru ke database.
('Siti Aminah', 'A001', 'Malang', '08123*****'), -- menjalankan instruksi pada alur program.
('Budi Santoso', 'A002', 'Batu', '08124*****'), -- menjalankan instruksi pada alur program.
('Dewi Lestari', 'A003', 'Malang', '08125*****'), -- menjalankan instruksi pada alur program.
('Ahmad Fauzan', 'A004', 'Lawang', '08126*****'), -- menjalankan instruksi pada alur program.
('Putri Ramadhani', 'A005', 'Singosari', '08127*****'), -- menjalankan instruksi pada alur program.
('Rizky Firmansyah', 'A006', 'Batu', '08128*****'), -- menjalankan instruksi pada alur program.
('Nurul Hidayah', 'A007', 'Malang', '08129*****'), -- menjalankan instruksi pada alur program.
('Fajar Nugroho', 'A008', 'Dau', '08131*****'), -- menjalankan instruksi pada alur program.
('Intan Permatasari', 'A009', 'Karangploso', '08132*****'), -- menjalankan instruksi pada alur program.
('Yusuf Maulana', 'A010', 'Malang', '08133*****'); -- menjalankan instruksi pada alur program.
``` 
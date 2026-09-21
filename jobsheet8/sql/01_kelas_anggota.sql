create table if not exists kelas (
    id serial primary key,
    nama_kelas varchar(255) not null,
    instruktur varchar(255) not null,
    jadwal varchar(255) not null,
    kapasitas integer not null default 0
);

create table if not exists anggota (
    id serial primary key,
    nama varchar(255) not null,
    no_anggota varchar(50) not null unique,
    alamat varchar(255),
    no_hp varchar(30)
);

insert into kelas (nama_kelas, instruktur, jadwal, kapasitas) values
('Yoga Pagi', 'Rina Wijaya', 'Senin & Rabu, 06:00', 15),
('Zumba Party', 'Dimas Prakoso', 'Selasa & Kamis, 17:00', 20),
('HIIT Blast', 'Bagus Setiawan', 'Senin, Rabu, Jumat, 18:00', 12),
('Muay Thai Basic', 'Chalermchai Boon', 'Selasa & Kamis, 19:00', 10),
('CrossFit WOD', 'Farhan Maulana', 'Senin-Jumat, 06:30', 8),
('Pilates Reformer', 'Sarah Amelia', 'Rabu & Jumat, 09:00', 10),
('Boxing Fundamentals', 'Rocky Pratama', 'Selasa & Kamis, 20:00', 12),
('Spin Cycle', 'Nadia Kusuma', 'Senin & Rabu, 07:00', 18),
('Body Combat', 'Yoga Saputra', 'Sabtu, 08:00', 20),
('Aerobik Ceria', 'Wulan Sari', 'Senin, Rabu, Jumat, 08:00', 25),
('Calisthenics Skill', 'Reza Firmansyah', 'Selasa & Kamis, 16:00', 10),
('Powerlifting Club', 'Anton Wijaksono', 'Senin & Kamis, 19:30', 6),
('Aqua Fitness', 'Melati Putri', 'Sabtu & Minggu, 09:00', 15);

insert into anggota (nama, no_anggota, alamat, no_hp) values
('Siti Aminah', 'A001', 'Malang', '08123*****'),
('Budi Santoso', 'A002', 'Batu', '08124*****'),
('Dewi Lestari', 'A003', 'Malang', '08125*****'),
('Ahmad Fauzan', 'A004', 'Lawang', '08126*****'),
('Putri Ramadhani', 'A005', 'Singosari', '08127*****'),
('Rizky Firmansyah', 'A006', 'Batu', '08128*****'),
('Nurul Hidayah', 'A007', 'Malang', '08129*****'),
('Fajar Nugroho', 'A008', 'Dau', '08131*****'),
('Intan Permatasari', 'A009', 'Karangploso', '08132*****'),
('Yusuf Maulana', 'A010', 'Malang', '08133*****');
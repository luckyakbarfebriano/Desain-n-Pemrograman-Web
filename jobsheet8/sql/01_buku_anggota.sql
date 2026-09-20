create table if not exists buku (
    id serial primary key,
    judul varchar(255) not null,
    pengarang varchar(255) not null,
    tahun integer not null,
    isbn varchar(50),
    stok integer not null default 0,
    kategori varchar(50)
);

create table if not exists anggota (
    id serial primary key,
    nama varchar(255) not null,
    no_anggota varchar(50) not null unique,
    alamat varchar(255),
    no_hp varchar(30)
);

insert into buku (judul, pengarang, tahun, stok) values
('The Psycology of Money', 'Morgan Housel', 2020, 5),
('Crypto Trading Guide', 'Timothy Ronald, Kalimasada', 2023, 3),
('The Richest Man in Babylon', 'George Samuel Clason', 1926, 10),
('Laskar Pelangi', 'Andrea Hirata', 2005, 4),
('Bumi Manusia', 'Pramoedya Ananta Toer', 1980, 2),
('Negeri 5 Menara', 'Ahmad Fuadi', 2009, 0),
('Atomic Habits', 'James Clear', 2018, 7),
('Filosofi Teras', 'Henry Manampiring', 2018, 5),
('Harry Potter and the Philosopher''s Stone', 'J.K. Rowling', 1997, 6),
('1984', 'George Orwell', 1949, 8),
('To Kill a Mockingbird', 'Harper Lee', 1960, 4),
('Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 2011, 6),
('The Alchemist', 'Paulo Coelho', 1988, 9);

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
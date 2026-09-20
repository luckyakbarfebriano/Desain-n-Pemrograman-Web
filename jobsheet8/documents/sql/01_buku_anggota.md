# LAPORAN JOBSHEET 8

# LUCKY AKBAR FEBRIANO / 12 / 254107020134

```sql
create table if not exists buku ( // Membuat tabel 'buku' jika belum ada
    id serial primary key, // Kolom 'id' sebagai primary key dan auto-increment
    judul varchar(255) not null, // Kolom 'judul' untuk nama buku, tidak boleh kosong
    pengarang varchar(255) not null, // Kolom 'pengarang' untuk nama pengarang, tidak boleh kosong
    tahun integer not null, // Kolom 'tahun' untuk tahun terbit buku, tidak boleh kosong
    isbn varchar(50), // Kolom 'isbn' untuk nomor ISBN, bisa kosong
    stok integer not null default 0, // Kolom 'stok' untuk jumlah stok buku, tidak boleh kosong, default 0
    kategori varchar(50) // Kolom 'kategori' untuk kategori buku, bisa kosong
); // Mengakhiri definisi tabel 'buku'

create table if not exists anggota ( // Membuat tabel 'anggota' jika belum ada
    id serial primary key, // Kolom 'id' sebagai primary key dan auto-increment
    nama varchar(255) not null, // Kolom 'nama' untuk nama anggota, tidak boleh kosong
    no_anggota varchar(50) not null unique, // Kolom 'no_anggota' untuk nomor anggota, tidak boleh kosong dan harus unik
    alamat varchar(255), // Kolom 'alamat' untuk alamat anggota, bisa kosong
    no_hp varchar(30) // Kolom 'no_hp' untuk nomor telepon anggota, bisa kosong
); // Mengakhiri definisi tabel 'anggota'

insert into buku (judul, pengarang, tahun, stok) values // Memasukkan data awal ke tabel 'buku'
('The Psycology of Money', 'Morgan Housel', 2020, 5), // Data untuk buku "The Psychology of Money"
('Crypto Trading Guide', 'Timothy Ronald, Kalimasada', 2023, 3), // Data untuk buku "Crypto Trading Guide"
('The Richest Man in Babylon', 'George Samuel Clason', 1926, 10), // Data untuk buku "The Richest Man in Babylon"
('Laskar Pelangi', 'Andrea Hirata', 2005, 4), // Data untuk buku "Laskar Pelangi"
('Bumi Manusia', 'Pramoedya Ananta Toer', 1980, 2), // Data untuk buku "Bumi Manusia"
('Negeri 5 Menara', 'Ahmad Fuadi', 2009, 0), // Data untuk buku "Negeri 5 Menara"
('Atomic Habits', 'James Clear', 2018, 7), // Data untuk buku "Atomic Habits"
('Filosofi Teras', 'Henry Manampiring', 2018, 5), // Data untuk buku "Filosofi Teras"
('Harry Potter and the Philosopher''s Stone', 'J.K. Rowling', 1997, 6), // Data untuk buku "Harry Potter and the Philosopher's Stone"
('1984', 'George Orwell', 1949, 8), // Data untuk buku "1984"
('To Kill a Mockingbird', 'Harper Lee', 1960, 4), // Data untuk buku "To Kill a Mockingbird"
('Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 2011, 6), // Data untuk buku "Sapiens: A Brief History of Humankind"
('The Alchemist', 'Paulo Coelho', 1988, 9); // Data untuk buku "The Alchemist"

insert into anggota (nama, no_anggota, alamat, no_hp) values // Memasukkan data awal ke tabel 'anggota'
('Siti Aminah', 'A001', 'Malang', '08123*****'), // Data untuk anggota bernama Siti Aminah
('Budi Santoso', 'A002', 'Batu', '08124*****'), // Data untuk anggota bernama Budi Santoso
('Dewi Lestari', 'A003', 'Malang', '08125*****'), // Data untuk anggota bernama Dewi Lestari
('Ahmad Fauzan', 'A004', 'Lawang', '08126*****'), // Data untuk anggota bernama Ahmad Fauzan
('Putri Ramadhani', 'A005', 'Singosari', '08127*****'), // Data untuk anggota bernama Putri Ramadhani
('Rizky Firmansyah', 'A006', 'Batu', '08128*****'), // Data untuk anggota bernama Rizky Firmansyah
('Nurul Hidayah', 'A007', 'Malang', '08129*****'), // Data untuk anggota bernama Nurul Hidayah
('Fajar Nugroho', 'A008', 'Dau', '08131*****'), // Data untuk anggota bernama Fajar Nugroho
('Intan Permatasari', 'A009', 'Karangploso', '08132*****'), // Data untuk anggota bernama Intan Permatasari
('Yusuf Maulana', 'A010', 'Malang', '08133*****'); // Data untuk anggota bernama Yusuf Maulana
```

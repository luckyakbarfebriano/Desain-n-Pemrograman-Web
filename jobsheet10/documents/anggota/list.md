# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
$page_title = "Daftar Anggota"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.

$perPage = 5; // menetapkan nilai ke variabel.
$page = max(1, (int) ($_GET['page'] ?? 1)); // menetapkan nilai ke variabel.
$offset = ($page - 1) * $perPage; // menetapkan nilai ke variabel.
$keyword = trim($_GET['q'] ?? ''); // menetapkan nilai ke variabel.

if ($keyword !== '') { // memeriksa kondisi sebelum menjalankan blok kode.
    $hitung = $pdo->prepare("SELECT COUNT(*) FROM anggota WHERE nama ILIKE :kw"); // menetapkan nilai ke variabel.
    $hitung->execute(['kw' => '%' . $keyword . '%']); // menjalankan operasi database dan mengolah hasilnya.
    $totalRows = $hitung->fetchColumn(); // menetapkan nilai ke variabel.

    $stmt = $pdo->prepare("SELECT * FROM anggota WHERE nama ILIKE :kw ORDER BY id DESC LIMIT :limit OFFSET :offset"); // menetapkan nilai ke variabel.
    $stmt->bindValue('kw', '%' . $keyword . '%'); // menjalankan operasi database dan mengolah hasilnya.
} else { // menyediakan jalur alternatif ketika kondisi tidak terpenuhi.
    $totalRows = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn(); // menetapkan nilai ke variabel.
    $stmt = $pdo->prepare("SELECT * FROM anggota ORDER BY id DESC LIMIT :limit OFFSET :offset"); // menetapkan nilai ke variabel.
} // menutup blok kode sebelumnya.
$stmt->bindValue('limit', $perPage, PDO::PARAM_INT); // menjalankan operasi database dan mengolah hasilnya.
$stmt->bindValue('offset', $offset, PDO::PARAM_INT); // menjalankan operasi database dan mengolah hasilnya.
$stmt->execute(); // menjalankan operasi database dan mengolah hasilnya.

$daftarAnggota = $stmt->fetchAll(PDO::FETCH_ASSOC); // menetapkan nilai ke variabel.
$totalPages = max(1, (int) ceil($totalRows / $perPage)); // menetapkan nilai ke variabel.
?> // menjalankan instruksi pada alur program.
        <section> // mendefinisikan elemen antarmuka halaman.
            <h2>Daftar Anggota</h2> // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): ?> // membuka atau menjalankan instruksi PHP.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.

            <div class="search-box"> // mendefinisikan elemen antarmuka halaman.
                <form method="get" action="list.php"> // membuka formulir input pengguna.
                    <span> // mendefinisikan elemen antarmuka halaman.
                        <label for="search-input">Cari Nama Anggota</label><br> // mendefinisikan elemen antarmuka halaman.
                        <input type="text" id="search-input" name="q" value="<?php echo $keyword; ?>" placeholder="Ketik nama anggota..."> // menampilkan nilai atau konten ke halaman.
                    </span> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Cari</button> // mendefinisikan elemen antarmuka halaman.
                </form> // menutup formulir input pengguna.
            </div> // mendefinisikan elemen antarmuka halaman.

            <div class="table-responsive"> // mendefinisikan elemen antarmuka halaman.
            <table> // mendefinisikan elemen antarmuka halaman.
                <thead> // mendefinisikan elemen antarmuka halaman.
                    <tr> // mendefinisikan elemen antarmuka halaman.
                        <th>No. Anggota</th> // mendefinisikan elemen antarmuka halaman.
                        <th>Nama</th> // mendefinisikan elemen antarmuka halaman.
                        <th>Alamat</th> // mendefinisikan elemen antarmuka halaman.
                        <th>No. HP</th> // mendefinisikan elemen antarmuka halaman.
                        <th>Aksi</th> // mendefinisikan elemen antarmuka halaman.
                    </tr> // mendefinisikan elemen antarmuka halaman.
                </thead> // mendefinisikan elemen antarmuka halaman.
                <tbody> // mendefinisikan elemen antarmuka halaman.
                    <?php if (empty($daftarAnggota)): ?> // membuka atau menjalankan instruksi PHP.
                    <tr> // mendefinisikan elemen antarmuka halaman.
                        <td colspan="5">Tidak ada data anggota yang cocok.</td> // mendefinisikan elemen antarmuka halaman.
                    </tr> // mendefinisikan elemen antarmuka halaman.
                    <?php else: ?> // membuka atau menjalankan instruksi PHP.
                        <?php foreach ($daftarAnggota as $anggota): ?> // membuka atau menjalankan instruksi PHP.
                        <tr> // mendefinisikan elemen antarmuka halaman.
                            <td><?php echo $anggota['no_anggota']; ?></td> // menampilkan nilai atau konten ke halaman.
                            <td><?php echo $anggota['nama']; ?></td> // menampilkan nilai atau konten ke halaman.
                            <td><?php echo $anggota['alamat']; ?></td> // menampilkan nilai atau konten ke halaman.
                            <td><?php echo $anggota['no_hp']; ?></td> // menampilkan nilai atau konten ke halaman.
                            <td> // mendefinisikan elemen antarmuka halaman.
                                <a href="edit.php?id=<?php echo $anggota['id']; ?>" class="btn-edit">Edit</a> // menampilkan nilai atau konten ke halaman.
                                <form class="form-hapus" method="post" action="hapus.php"> // membuka formulir input pengguna.
                                    <input type="hidden" name="id" value="<?php echo $anggota['id']; ?>"> // menampilkan nilai atau konten ke halaman.
                                    <button type="submit" class="btn-hapus">Hapus</button> // mendefinisikan elemen antarmuka halaman.
                                </form> // menutup formulir input pengguna.
                            </td> // mendefinisikan elemen antarmuka halaman.
                        </tr> // mendefinisikan elemen antarmuka halaman.
                        <?php endforeach; ?> // membuka atau menjalankan instruksi PHP.
                    <?php endif; ?> // membuka atau menjalankan instruksi PHP.
                </tbody> // mendefinisikan elemen antarmuka halaman.
            </table> // mendefinisikan elemen antarmuka halaman.
            </div> // mendefinisikan elemen antarmuka halaman.

            <nav class="pagination"> // mendefinisikan elemen antarmuka halaman.
                <?php for ($i = 1; $i <= $totalPages; $i++): ?> // membuka atau menjalankan instruksi PHP.
                <a href="list.php?page=<?php echo $i; ?><?php echo $keyword !== '' ? '&q=' . urlencode($keyword) : ''; ?>" // menampilkan nilai atau konten ke halaman.
                   class="<?php echo $i === $page ? 'active' : ''; ?>"><?php echo $i; ?></a> // menampilkan nilai atau konten ke halaman.
                <?php endfor; ?> // membuka atau menjalankan instruksi PHP.
            </nav> // mendefinisikan elemen antarmuka halaman.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
```

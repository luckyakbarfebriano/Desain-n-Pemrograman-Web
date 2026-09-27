# LAPORAN JOBSHEET 10

# LUCKY AKBAR FEBRIANO / 254107020134

```php
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
$page_title = "Edit Anggota"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.

$id = $_GET['id'] ?? null; // menetapkan nilai ke variabel.
if (!$id) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$stmt = $pdo->prepare("SELECT * FROM anggota WHERE id = :id"); // menetapkan nilai ke variabel.
$stmt->execute(['id' => $id]); // menjalankan operasi database dan mengolah hasilnya.
$anggota = $stmt->fetch(PDO::FETCH_ASSOC); // menetapkan nilai ke variabel.

if (!$anggota) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.
?> // menjalankan instruksi pada alur program.
        <section> // mendefinisikan elemen antarmuka halaman.
            <h2>Edit Anggota</h2> // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): ?> // membuka atau menjalankan instruksi PHP.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.

            <form id="form-tambah" method="post" action="proses_edit.php"> // membuka formulir input pengguna.
                <input type="hidden" name="id" value="<?php echo $anggota['id']; ?>"> // menampilkan nilai atau konten ke halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="nama">Nama</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="nama" name="nama" value="<?php echo $anggota['nama']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="no_anggota">No. Anggota</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="no_anggota" name="no_anggota" value="<?php echo $anggota['no_anggota']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="alamat">Alamat</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="alamat" name="alamat" value="<?php echo $anggota['alamat']; ?>"> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="no_hp">No. HP</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="no_hp" name="no_hp" value="<?php echo $anggota['no_hp']; ?>"> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Update</button> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
            </form> // menutup formulir input pengguna.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
```

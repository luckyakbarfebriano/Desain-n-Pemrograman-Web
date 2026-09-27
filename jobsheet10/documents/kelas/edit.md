# LAPORAN JOBSHEET 10 
# LUCKY AKBAR FEBRIANO / 254107020134 


```php 
<?php // membuka atau menjalankan instruksi PHP.
require __DIR__ . '/../includes/auth.php'; // memuat file pendukung yang diperlukan.
$page_title = "Edit Kelas"; // menetapkan nilai ke variabel.
include __DIR__ . '/../includes/header.php'; // memuat file pendukung yang diperlukan.
require __DIR__ . '/../includes/koneksi.php'; // memuat file pendukung yang diperlukan.

$flash = $_SESSION['flash'] ?? null; // menetapkan nilai ke variabel.
unset($_SESSION['flash']); // menjalankan instruksi pada alur program.

$id = $_GET['id'] ?? null; // menetapkan nilai ke variabel.
if (!$id) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.

$stmt = $pdo->prepare("SELECT * FROM kelas WHERE id = :id"); // menetapkan nilai ke variabel.
$stmt->execute(['id' => $id]); // menjalankan operasi database dan mengolah hasilnya.
$kelas = $stmt->fetch(PDO::FETCH_ASSOC); // menetapkan nilai ke variabel.

if (!$kelas) { // memeriksa kondisi sebelum menjalankan blok kode.
    header('Location: list.php'); // mengarahkan pengguna ke halaman tujuan.
    exit; // menghentikan eksekusi program.
} // menutup blok kode sebelumnya.
?> // menjalankan instruksi pada alur program.
        <section> // mendefinisikan elemen antarmuka halaman.
            <h2>Edit Kelas</h2> // mendefinisikan elemen antarmuka halaman.

            <?php if ($flash): ?> // membuka atau menjalankan instruksi PHP.
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p> // menampilkan nilai atau konten ke halaman.
            <?php endif; ?> // membuka atau menjalankan instruksi PHP.

            <form id="form-tambah" method="post" action="proses_edit.php"> // membuka formulir input pengguna.
                <input type="hidden" name="id" value="<?php echo $kelas['id']; ?>"> // menampilkan nilai atau konten ke halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="nama_kelas">Nama Kelas</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="instruktur">Instruktur</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="instruktur" name="instruktur" value="<?php echo $kelas['instruktur']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="jadwal">Jadwal</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="jadwal" name="jadwal" value="<?php echo $kelas['jadwal']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="kapasitas">Kapasitas</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="number" id="kapasitas" name="kapasitas" min="0" value="<?php echo $kelas['kapasitas']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Update</button> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
            </form> // menutup formulir input pengguna.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
            <form id="form-tambah" method="post" action="proses_edit.php"> // membuka formulir input pengguna.
                <input type="hidden" name="id" value="<?php echo $kelas['id']; ?>"> // menampilkan nilai atau konten ke halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="nama_kelas">Nama Kelas</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="instruktur">Instruktur</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="instruktur" name="instruktur" value="<?php echo $kelas['instruktur']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="jadwal">Jadwal</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="text" id="jadwal" name="jadwal" value="<?php echo $kelas['jadwal']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <label for="kapasitas">Kapasitas</label><br> // mendefinisikan elemen antarmuka halaman.
                    <input type="number" id="kapasitas" name="kapasitas" min="0" value="<?php echo $kelas['kapasitas']; ?>" required> // menampilkan nilai atau konten ke halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
                <p> // mendefinisikan elemen antarmuka halaman.
                    <button type="submit">Update</button> // mendefinisikan elemen antarmuka halaman.
                </p> // mendefinisikan elemen antarmuka halaman.
            </form> // menutup formulir input pengguna.
        </section> // mendefinisikan elemen antarmuka halaman.
<?php include __DIR__ . '/../includes/footer.php'; ?> // membuka atau menjalankan instruksi PHP.
``` 
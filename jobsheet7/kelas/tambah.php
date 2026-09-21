<?php
$page_title = "Tambah Kelas";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
        <section>
            <h2>Tambah Kelas</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_tambah.php">
                <p>
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" id="nama_kelas" name="nama_kelas" required>
                </p>
                <p>
                    <label for="instruktur">Instruktur</label>
                    <input type="text" id="instruktur" name="instruktur" required>
                </p>
                <p>
                    <label for="jadwal">Jadwal</label>
                    <input type="text" id="jadwal" name="jadwal" placeholder="cth: Senin & Rabu, 07:00" required>
                </p>
                <p>
                    <label for="kapasitas">Kapasitas</label>
                    <input type="number" id="kapasitas" name="kapasitas" min="0" required>
                </p>
                <p>
                    <button type="submit">Simpan</button>
                </p>
            </form>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
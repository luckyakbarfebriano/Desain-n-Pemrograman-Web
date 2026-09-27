<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Edit Kelas";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: list.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM kelas WHERE id = :id");
$stmt->execute(['id' => $id]);
$kelas = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kelas) {
    header('Location: list.php');
    exit;
}
?>
        <section>
            <h2>Edit Kelas</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_edit.php">
                <input type="hidden" name="id" value="<?php echo $kelas['id']; ?>">
                <p>
                    <label for="nama_kelas">Nama Kelas</label><br>
                    <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required>
                </p>
                <p>
                    <label for="instruktur">Instruktur</label><br>
                    <input type="text" id="instruktur" name="instruktur" value="<?php echo $kelas['instruktur']; ?>" required>
                </p>
                <p>
                    <label for="jadwal">Jadwal</label><br>
                    <input type="text" id="jadwal" name="jadwal" value="<?php echo $kelas['jadwal']; ?>" required>
                </p>
                <p>
                    <label for="kapasitas">Kapasitas</label><br>
                    <input type="number" id="kapasitas" name="kapasitas" min="0" value="<?php echo $kelas['kapasitas']; ?>" required>
                </p>
                <p>
                    <button type="submit">Update</button>
                </p>
            </form>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>

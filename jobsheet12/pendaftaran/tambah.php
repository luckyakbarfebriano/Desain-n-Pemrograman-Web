<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Pendaftaran Kelas";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$daftarAnggota = $pdo->query("SELECT * FROM anggota ORDER BY nama")->fetchAll(PDO::FETCH_ASSOC);
$daftarKelasTersedia = $pdo->query("SELECT * FROM kelas WHERE kapasitas > 0 ORDER BY nama_kelas")->fetchAll(PDO::FETCH_ASSOC);
?>
        <section>
            <h2>Pendaftaran Kelas Baru</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo e($flash['pesan']); ?></p>
            <?php endif; ?>

            <?php if (empty($daftarAnggota)): ?>
                <p class="flash flash-error">Belum ada data anggota. Tambahkan anggota terlebih dahulu.</p>
            <?php elseif (empty($daftarKelasTersedia)): ?>
                <p class="flash flash-error">Tidak ada kelas dengan kapasitas tersedia saat ini.</p>
            <?php else: ?>
            <form method="post" action="proses_tambah.php">
                <?php echo csrf_field(); ?>
                <p>
                    <label for="anggota_id">Anggota</label><br>
                    <select id="anggota_id" name="anggota_id" required>
                        <option value="">-- Pilih Anggota --</option>
                        <?php foreach ($daftarAnggota as $anggota): ?>
                        <option value="<?php echo $anggota['id']; ?>">
                            <?php echo e($anggota['nama']); ?> (<?php echo e($anggota['no_anggota']); ?>)
                        </option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <label for="kelas_id">Kelas (hanya yang kapasitasnya tersedia)</label><br>
                    <select id="kelas_id" name="kelas_id" required>
                        <option value="">-- Pilih Kelas --</option>
                        <?php foreach ($daftarKelasTersedia as $kelas): ?>
                        <option value="<?php echo $kelas['id']; ?>">
                            <?php echo e($kelas['nama_kelas']); ?> (kapasitas: <?php echo $kelas['kapasitas']; ?>)
                        </option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <button type="submit">Simpan Pendaftaran</button>
                </p>
            </form>
            <?php endif; ?>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>

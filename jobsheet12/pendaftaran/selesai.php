<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Selesaikan Kelas";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$keyword = trim($_GET['q'] ?? '');

$sqlDasar = "SELECT p.id, k.nama_kelas, a.nama, p.tanggal_daftar
             FROM pendaftaran p
             JOIN kelas k ON k.id = p.kelas_id
             JOIN anggota a ON a.id = p.anggota_id
             WHERE p.status = 'aktif'";

if ($keyword !== '') {
    $stmt = $pdo->prepare($sqlDasar . " AND (k.nama_kelas ILIKE :kw OR a.nama ILIKE :kw) ORDER BY p.tanggal_daftar");
    $stmt->execute(['kw' => '%' . $keyword . '%']);
} else {
    $stmt = $pdo->query($sqlDasar . " ORDER BY p.tanggal_daftar");
}
$daftarAktif = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
        <section>
            <h2>Selesaikan Kelas</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo e($flash['pesan']); ?></p>
            <?php endif; ?>

            <div class="search-box">
                <form method="get" action="selesai.php">
                    <span>
                        <label for="search-input">Cari anggota/kelas</label><br>
                        <input type="text" id="search-input" name="q" value="<?php echo e($keyword); ?>" placeholder="Nama anggota atau nama kelas...">
                    </span>
                    <button type="submit">Cari</button>
                </form>
            </div>

            <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Anggota</th>
                        <th>Kelas</th>
                        <th>Tgl Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($daftarAktif)): ?>
                    <tr>
                        <td colspan="4">Tidak ada pendaftaran aktif.</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach ($daftarAktif as $trx): ?>
                        <tr>
                            <td><?php echo e($trx['nama']); ?></td>
                            <td><?php echo e($trx['nama_kelas']); ?></td>
                            <td><?php echo $trx['tanggal_daftar']; ?></td>
                            <td>
                                <form method="post" action="proses_selesai.php">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo $trx['id']; ?>">
                                    <button type="submit">Selesaikan</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>

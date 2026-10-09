<?php
$page_title = "Beranda";
$page_heading = "Ringkasan Aktivitas Member & Kelas";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalKelas = $pdo->query("SELECT COUNT(*) FROM kelas")->fetchColumn();
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
$kelasTerbaru = $pdo->query("SELECT nama_kelas, instruktur, jadwal, kapasitas FROM kelas ORDER BY id DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
?>
<?php if ($flash): ?>
    <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo htmlspecialchars((string) $flash['pesan'], ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>

<div class="stats-row">
            <div class="stat-card">
                <div class="stat-icon-box"><i class="fa-solid fa-dumbbell"></i></div>
                <div class="stat-details">
                    <span class="stat-label">Total Kelas</span>
                    <span class="stat-number"><?php echo $totalKelas; ?></span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-box"><i class="fa-solid fa-users"></i></div>
                <div class="stat-details">
                    <span class="stat-label">Total Anggota</span>
                    <span class="stat-number"><?php echo $totalAnggota; ?></span>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-box"><i class="fa-solid fa-fire"></i></div>
                <div class="stat-details">
                    <span class="stat-label">Kelas Hari Ini</span>
                    <span class="stat-number">4</span>
                </div>
            </div>
</div>

<div class="info-banner"><i class="fa-solid fa-circle-info"></i> WE GO GYM adalah aplikasi manajemen gym sederhana yang dirancang untuk memudahkan pengelolaan kelas latihan dan data anggota member.</div>

<div class="grid-container">
    <section class="table-card">
        <div class="card-head">
            <h3 class="card-title">Kelas Terbaru</h3>
            <a class="link-more" href="<?php echo $base; ?>kelas/list.php">Lihat semua &rarr;</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead><tr><th>Nama Kelas</th><th>Instruktur</th><th>Jadwal</th><th>Kapasitas</th></tr></thead>
                <tbody>
                    <?php if (empty($kelasTerbaru)): ?>
                    <tr><td colspan="4">Belum ada data kelas.</td></tr>
                    <?php else: foreach ($kelasTerbaru as $k): ?>
                    <tr>
                        <td><?php echo htmlspecialchars((string) $k['nama_kelas'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars((string) $k['instruktur'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars((string) $k['jadwal'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo (int) $k['kapasitas']; ?></td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </section>

    <aside class="action-card">
        <h3 class="card-title">Aksi Cepat</h3>
        <?php if ($bolehKelola): ?>
            <a class="btn-blue" href="<?php echo $base; ?>kelas/tambah.php"><i class="fa-solid fa-plus"></i> Tambah Kelas</a>
            <a class="btn-blue" href="<?php echo $base; ?>anggota/tambah.php"><i class="fa-solid fa-plus"></i> Tambah Member</a>
        <?php else: ?>
            <p class="action-note">Login dulu untuk menambah atau mengubah data.</p>
            <a class="btn-blue" href="<?php echo $base; ?>auth/login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        <?php endif; ?>
    </aside>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>

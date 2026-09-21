<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalKelas = $pdo->query("SELECT COUNT(*) FROM kelas")->fetchColumn();
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();
?>
        <section>
            <h2>Selamat Datang di WE GO GYM</h2>
            <p>WE GO GYM adalah aplikasi manajemen gym sederhana yang dirancang untuk memudahkan pengelolaan kelas latihan dan data anggota member.</p>
        </section>

        <section>
            <h2>Ringkasan</h2>
            <article>
                <h3>Total Kelas</h3>
                <p><?php echo $totalKelas; ?></p>
            </article>
            <article>
                <h3>Total Anggota</h3>
                <p><?php echo $totalAnggota; ?></p>
            </article>
            <article>
                <h3>Kelas Hari Ini</h3>
                <p>4</p>
            </article>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>
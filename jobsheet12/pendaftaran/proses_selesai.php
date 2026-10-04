<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/csrf.php';
require __DIR__ . '/../includes/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: selesai.php');
    exit;
}

csrf_verify();

$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: selesai.php');
    exit;
}

try {
    $pdo->beginTransaction();

    $stmt = $pdo->prepare("SELECT kelas_id, status FROM pendaftaran WHERE id = :id FOR UPDATE");
    $stmt->execute(['id' => $id]);
    $trx = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$trx || $trx['status'] !== 'aktif') {
        throw new Exception('Pendaftaran tidak ditemukan atau sudah diselesaikan.');
    }

    $updatePendaftaran = $pdo->prepare(
        "UPDATE pendaftaran SET status = 'selesai', tanggal_selesai = CURRENT_DATE WHERE id = :id"
    );
    $updatePendaftaran->execute(['id' => $id]);

    $updateKelas = $pdo->prepare("UPDATE kelas SET kapasitas = kapasitas + 1 WHERE id = :kelas_id");
    $updateKelas->execute(['kelas_id' => $trx['kelas_id']]);

    $pdo->commit();
    $_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Pendaftaran berhasil diselesaikan.'];
} catch (Exception $e) {
    $pdo->rollBack();
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Gagal memproses: ' . $e->getMessage()];
}

header('Location: selesai.php');
exit;

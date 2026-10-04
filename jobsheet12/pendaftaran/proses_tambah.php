<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/csrf.php';
require __DIR__ . '/../includes/koneksi.php';

csrf_verify();

$anggotaId = $_POST['anggota_id'] ?? '';
$kelasId = $_POST['kelas_id'] ?? '';

if ($anggotaId === '' || $kelasId === '') {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Anggota dan kelas wajib dipilih.'];
    header('Location: tambah.php');
    exit;
}

try {
    $pdo->beginTransaction();

    // Kunci baris kelas (FOR UPDATE) agar kapasitas tidak berubah oleh transaksi lain
    // di tengah proses ini — mencegah kapasitas menjadi negatif akibat race condition.
    $cek = $pdo->prepare("SELECT kapasitas FROM kelas WHERE id = :id FOR UPDATE");
    $cek->execute(['id' => $kelasId]);
    $kelas = $cek->fetch(PDO::FETCH_ASSOC);

    if (!$kelas || $kelas['kapasitas'] < 1) {
        throw new Exception('Kapasitas kelas tidak tersedia.');
    }

    $insert = $pdo->prepare(
        "INSERT INTO pendaftaran (kelas_id, anggota_id, tanggal_daftar, status)
         VALUES (:kelas_id, :anggota_id, CURRENT_DATE, 'aktif')"
    );
    $insert->execute(['kelas_id' => $kelasId, 'anggota_id' => $anggotaId]);

    $update = $pdo->prepare("UPDATE kelas SET kapasitas = kapasitas - 1 WHERE id = :id");
    $update->execute(['id' => $kelasId]);

    $pdo->commit();

    $_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Pendaftaran berhasil dicatat.'];
    header('Location: ../index.php');
    exit;
} catch (Exception $e) {
    $pdo->rollBack();
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => 'Gagal mencatat pendaftaran: ' . $e->getMessage()];
    header('Location: tambah.php');
    exit;
}

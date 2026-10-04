<?php
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/csrf.php';
require __DIR__ . '/../includes/koneksi.php';

csrf_verify();

$id = $_POST['id'] ?? null;
$nama_kelas = trim($_POST['nama_kelas'] ?? '');
$instruktur = trim($_POST['instruktur'] ?? '');
$jadwal = trim($_POST['jadwal'] ?? '');
$kapasitas = $_POST['kapasitas'] ?? '';

if (!$id) {
    header('Location: list.php');
    exit;
}

$errors = [];
if ($nama_kelas === '') {
    $errors[] = "Nama kelas wajib diisi.";
}
if ($instruktur === '') {
    $errors[] = "Instruktur wajib diisi.";
}
if ($jadwal === '') {
    $errors[] = "Jadwal wajib diisi.";
}
if (!is_numeric($kapasitas) || $kapasitas < 0) {
    $errors[] = "Kapasitas tidak boleh negatif.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: edit.php?id=' . urlencode($id));
    exit;
}

$stmt = $pdo->prepare(
    "UPDATE kelas SET nama_kelas = :nama_kelas, instruktur = :instruktur,
     jadwal = :jadwal, kapasitas = :kapasitas WHERE id = :id"
);
$stmt->execute([
    'nama_kelas' => $nama_kelas,
    'instruktur' => $instruktur,
    'jadwal' => $jadwal,
    'kapasitas' => (int) $kapasitas,
    'id' => $id,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kelas berhasil diperbarui.'];
header('Location: list.php');
exit;

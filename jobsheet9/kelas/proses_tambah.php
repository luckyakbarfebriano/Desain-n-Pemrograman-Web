<?php
session_start();
require __DIR__ . '/../includes/koneksi.php';

$nama_kelas = trim($_POST['nama_kelas'] ?? '');
$instruktur = trim($_POST['instruktur'] ?? '');
$jadwal = trim($_POST['jadwal'] ?? '');
$kapasitas = $_POST['kapasitas'] ?? '';

// Validasi server-side — wajib ada meski sudah divalidasi JS,
// karena validasi client bisa dilewati (nonaktifkan JS / kirim request manual).
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
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO kelas (nama_kelas, instruktur, jadwal, kapasitas)
     VALUES (:nama_kelas, :instruktur, :jadwal, :kapasitas)
     RETURNING id"
);
$stmt->execute([
    'nama_kelas' => $nama_kelas,
    'instruktur' => $instruktur,
    'jadwal' => $jadwal,
    'kapasitas' => (int) $kapasitas,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kelas berhasil ditambahkan.'];
header('Location: list.php');
exit;

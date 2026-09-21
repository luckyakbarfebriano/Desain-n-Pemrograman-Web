<?php
session_start();

$nama_kelas = trim($_POST['nama_kelas'] ?? '');
$instruktur = trim($_POST['instruktur'] ?? '');
$jadwal = trim($_POST['jadwal'] ?? '');
$kapasitas = $_POST['kapasitas'] ?? '';

$errors = [];
if ($nama_kelas === '') $errors[] = "Nama kelas wajib diisi.";
if ($instruktur === '') $errors[] = "Instruktur wajib diisi.";
if ($jadwal === '') $errors[] = "Jadwal wajib diisi.";
if (!is_numeric($kapasitas) || $kapasitas < 0) $errors[] = "Kapasitas tidak boleh negatif.";

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

if (!isset($_SESSION['kelas'])) {
    $_SESSION['kelas'] = [];
}

$_SESSION['kelas'][] = [
    'nama_kelas' => $nama_kelas,
    'instruktur' => $instruktur,
    'jadwal' => $jadwal,
    'kapasitas' => (int) $kapasitas,
];

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Kelas berhasil ditambahkan.'];
header('Location: list.php');
exit;
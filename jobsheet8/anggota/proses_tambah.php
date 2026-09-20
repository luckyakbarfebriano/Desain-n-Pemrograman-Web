<?php
session_start();
require __DIR__ . '/../includes/koneksi.php';

$nama = trim($_POST['nama'] ?? '');
$no_anggota = trim($_POST['no_anggota'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($nama === '') $errors[] = "Nama wajib diisi.";
if ($no_anggota === '') $errors[] = "No Anggota wajib diisi.";
if ($alamat === '') $errors[] = "Alamat wajib diisi.";
if ($no_hp === '') $errors[] = "No HP wajib diisi.";

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

$stmt = $pdo->prepare(
    "insert into anggota (nama, no_anggota, alamat, no_hp)
     values (:nama, :no_anggota, :alamat, :no_hp)
     returning id"
);
$stmt->execute([
    'nama' => $nama,
    'no_anggota' => $no_anggota,
    'alamat' => $alamat,
    'no_hp' => $no_hp,
]);

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
header('Location: list.php');
exit;
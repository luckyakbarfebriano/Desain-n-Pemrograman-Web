<?php
$page_title = "Daftar Kelas";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
$daftarKelas = $_SESSION['kelas'] ?? [];
?>
        <section>
            <h2>Daftar Kelas</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
            <?php endif; ?>

            <div class="search-box">
                <label for="search-input">Cari Nama Kelas</label>
                <input type="text" id="search-input" placeholder="Ketik nama kelas...">
            </div>

            <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Instruktur</th>
                        <th>Jadwal</th>
                        <th>Kapasitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($daftarKelas as $kelas): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($kelas['nama_kelas']); ?></td>
                        <td><?php echo htmlspecialchars($kelas['instruktur']); ?></td>
                        <td><?php echo htmlspecialchars($kelas['jadwal']); ?></td>
                        <td><?php echo $kelas['kapasitas']; ?></td>
                        <td>
                            <button type="button">Edit</button>
                            <button type="button" class="btn-hapus">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <a href="index.php" class="brand">🎓 SIA</a>
    <a href="viewdosen.php">Dosen</a>
    <a href="viewmahasiswa.php" class="active">Mahasiswa</a>
    <a href="viewmatakuliah.php">Mata Kuliah</a>
</nav>

<div class="wrapper">
    <div class="page-header">
        <h1>👨‍🎓 Tabel Mahasiswa</h1>
        <a href="input_mahasiswa.php" class="btn btn-success">➕ Tambah Mahasiswa</a>
    </div>
    <div class="card">

        <!-- Form Pencarian -->
        <form method="get" action="viewmahasiswa.php">
            <div class="search-bar">
                <input type="text" name="keyword" placeholder="🔍 Cari berdasarkan nama mahasiswa..."
                       value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if (isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>
                    <a href="viewmahasiswa.php" class="btn btn-secondary">✖ Reset</a>
                <?php endif; ?>
            </div>
        </form>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Prodi</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

                if ($keyword !== '') {
                    $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY npm ASC";
                } else {
                    $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
                }

                $result = mysqli_query($link, $query);

                if (!$result) {
                    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
                }

                $jumlah = 0;
                while ($data = mysqli_fetch_assoc($result)) {
                    $jumlah++;
                    echo "<tr>";
                    echo "<td><span class='badge'>" . $data['npm'] . "</span></td>";
                    echo "<td>" . htmlspecialchars($data['namaMhs']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['prodi']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['alamat']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
                    echo '<td><div class="actions">
                        <a href="editmahasiswa.php?npm=' . $data['npm'] . '" class="btn btn-warning btn-sm">✏ Edit</a>
                        <a href="hapusmahasiswa.php?npm=' . $data['npm'] . '"
                           onclick="return confirm(\'Anda yakin akan menghapus data ini?\')"
                           class="btn btn-danger btn-sm">🗑 Hapus</a>
                    </div></td>';
                    echo "</tr>";
                }

                if ($jumlah === 0) {
                    echo '<tr><td colspan="6" class="empty-state">Tidak ada data' .
                         ($keyword ? ' untuk pencarian "<strong>' . htmlspecialchars($keyword) . '</strong>"' : '') .
                         '.</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>

        <?php if ($keyword !== ''): ?>
            <p style="margin-top:12px; font-size:0.85rem; color:#555;">
                Ditemukan <strong><?= $jumlah ?></strong> data untuk kata kunci
                "<strong><?= htmlspecialchars($keyword) ?></strong>"
            </p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>

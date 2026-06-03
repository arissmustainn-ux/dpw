<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <a href="index.php" class="brand">🎓 SIA</a>
    <a href="viewdosen.php">Dosen</a>
    <a href="viewmahasiswa.php">Mahasiswa</a>
    <a href="viewmatakuliah.php" class="active">Mata Kuliah</a>
</nav>

<div class="wrapper">
    <div class="page-header">
        <h1>📚 Tabel Mata Kuliah</h1>
        <a href="input_matakuliah.php" class="btn btn-success">➕ Tambah Mata Kuliah</a>
    </div>
    <div class="card">

        <!-- Form Pencarian -->
        <form method="get" action="viewmatakuliah.php">
            <div class="search-bar">
                <input type="text" name="keyword" placeholder="🔍 Cari berdasarkan nama mata kuliah..."
                       value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if (isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>
                    <a href="viewmatakuliah.php" class="btn btn-secondary">✖ Reset</a>
                <?php endif; ?>
            </div>
        </form>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Jam</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

                if ($keyword !== '') {
                    $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
                } else {
                    $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
                }

                $result = mysqli_query($link, $query);

                if (!$result) {
                    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
                }

                $jumlah = 0;
                while ($data = mysqli_fetch_assoc($result)) {
                    $jumlah++;
                    echo "<tr>";
                    echo "<td><span class='badge'>" . $data['kodeMK'] . "</span></td>";
                    echo "<td>" . htmlspecialchars($data['namaMK']) . "</td>";
                    echo "<td>" . $data['sks'] . " SKS</td>";
                    echo "<td>" . $data['jam'] . " Jam</td>";
                    echo '<td><div class="actions">
                        <a href="editmatakuliah.php?kodeMK=' . $data['kodeMK'] . '" class="btn btn-warning btn-sm">✏ Edit</a>
                        <a href="hapusmatakuliah.php?kodeMK=' . $data['kodeMK'] . '"
                           onclick="return confirm(\'Anda yakin akan menghapus data ini?\')"
                           class="btn btn-danger btn-sm">🗑 Hapus</a>
                    </div></td>';
                    echo "</tr>";
                }

                if ($jumlah === 0) {
                    echo '<tr><td colspan="5" class="empty-state">Tidak ada data' .
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

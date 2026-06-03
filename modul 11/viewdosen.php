<?php
include 'koneksi.php'; // Memanggil file koneksi.php untuk melakukan koneksi database
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <a href="index.php" class="brand">🎓 SIA</a>
    <a href="viewdosen.php" class="active">Dosen</a>
    <a href="viewmahasiswa.php">Mahasiswa</a>
    <a href="viewmatakuliah.php">Mata Kuliah</a>
</nav>

<div class="wrapper">
    <div class="page-header">
        <h1>👨‍🏫 Tabel Dosen</h1>
        <a href="input_dosen.php" class="btn btn-success">➕ Tambah Dosen</a>
    </div>
    <div class="card">

        <!-- Form Pencarian -->
        <form method="get" action="viewdosen.php">
            <div class="search-bar">
                <input type="text" name="keyword" placeholder="🔍 Cari berdasarkan nama dosen..."
                       value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if (isset($_GET['keyword']) && $_GET['keyword'] !== ''): ?>
                    <a href="viewdosen.php" class="btn btn-secondary">✖ Reset</a>
                <?php endif; ?>
            </div>
        </form>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dosen</th>
                        <th>No HP</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Ambil keyword pencarian jika ada
                $keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

                // Jalankan query untuk menampilkan semua data, diurutkan ascending berdasarkan idDosen
                if ($keyword !== '') {
                    $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
                } else {
                    $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
                }

                $result = mysqli_query($link, $query);

                // Mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($link) .
                        " - " . mysqli_error($link));
                }

                // Hasil query akan disimpan dalam variabel $data dalam bentuk array
                // Kemudian dicetak dengan perulangan while
                $jumlah = 0;
                while ($data = mysqli_fetch_assoc($result)) {
                    $jumlah++;
                    echo "<tr>";
                    echo "<td>" . $data['idDosen'] . "</td>";      // Menampilkan data idDosen
                    echo "<td>" . htmlspecialchars($data['namaDosen']) . "</td>"; // Menampilkan data namaDosen
                    echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";      // Menampilkan data noHP
                    // Membuat link untuk mengedit dan menghapus data
                    echo '<td><div class="actions">
                        <a href="editdosen.php?idDosen=' . $data['idDosen'] . '" class="btn btn-warning btn-sm">✏ Edit</a>
                        <a href="hapusdosen.php?idDosen=' . $data['idDosen'] . '"
                           onclick="return confirm(\'Anda yakin akan menghapus data ini?\')"
                           class="btn btn-danger btn-sm">🗑 Hapus</a>
                    </div></td>';
                    echo "</tr>";
                }

                if ($jumlah === 0) {
                    echo '<tr><td colspan="4" class="empty-state">Tidak ada data' .
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

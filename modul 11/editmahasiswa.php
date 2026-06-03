<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm    = (int) $_GET['npm'];
    $query  = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data    = mysqli_fetch_assoc($result);
    $npm     = $data['npm'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];
} else {
    header("location:viewmahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
    <div class="card-standalone">
        <h1>✏ Edit Data Mahasiswa</h1>

        <form id="form_editmahasiswa" action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>

                <div class="form-group">
                    <label>NPM :</label>
                    <input type="hidden" name="npm" value="<?php echo $npm; ?>">
                    <input type="text" value="<?php echo $npm; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs"
                           value="<?php echo htmlspecialchars($namaMhs); ?>" required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi"
                           value="<?php echo htmlspecialchars($prodi); ?>" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat"
                           value="<?php echo htmlspecialchars($alamat); ?>" required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           value="<?php echo htmlspecialchars($noHP); ?>" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-warning">💾 Update Data</button>
                <a href="viewmahasiswa.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

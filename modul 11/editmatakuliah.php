<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kodeMK = (int) $_GET['kodeMK'];
    $query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data   = mysqli_fetch_assoc($result);
    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];
} else {
    header("location:viewmatakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Kuliah</title>
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
    <div class="card-standalone">
        <h1>✏ Edit Data Mata Kuliah</h1>

        <form id="form_editmk" action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend>Edit Data Mata Kuliah</legend>

                <div class="form-group">
                    <label>Kode MK :</label>
                    <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                    <input type="text" value="<?php echo $kodeMK; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah :</label>
                    <input type="text" name="namaMK" id="namaMK"
                           value="<?php echo htmlspecialchars($namaMK); ?>" required>
                </div>

                <div class="form-group">
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" min="1" max="6"
                           value="<?php echo $sks; ?>" required>
                </div>

                <div class="form-group">
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" min="1"
                           value="<?php echo $jam; ?>" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-warning">💾 Update Data</button>
                <a href="viewmatakuliah.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

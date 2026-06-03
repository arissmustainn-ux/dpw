<?php
// Memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// Mengecek apakah di URL ada nilai GET idDosen
if (isset($_GET['idDosen'])) {
    // Ambil nilai idDosen dari URL dan disimpan dalam variabel $id
    $id = (int) $_GET['idDosen'];

    // Menampilkan data t_dosen dari database yang mempunyai idDosen=$id
    $query  = "SELECT * FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    // Mengecek apakah query gagal
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // Mengambil data dari database dan membuat variabel-variabel utk menampung data
    // Variabel ini nantinya akan ditampilkan pada form
    $data      = mysqli_fetch_assoc($result);
    $idDosen   = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP      = $data['noHP'];
} else {
    // Apabila tidak ada data GET id pada akan di redirect ke viewdosen.php
    header("location:viewdosen.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
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
    <div class="card-standalone">
        <h1>✏ Edit Data Dosen</h1>

        <form id="form_mahasiswa" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>

                <div class="form-group">
                    <label for="idDosenDisabled">ID :</label>
                    <!-- Hidden input untuk mengirim nilai idDosen -->
                    <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
                    <!-- Input disabled hanya untuk tampilan -->
                    <input type="text" id="idDosenDisabled" value="<?php echo $idDosen; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="namaDosen">Nama Dosen :</label>
                    <input type="text" name="namaDosen" id="namaDosen"
                           value="<?php echo htmlspecialchars($namaDosen); ?>" required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           value="<?php echo htmlspecialchars($noHP); ?>" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-warning">💾 Update Data</button>
                <a href="viewdosen.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

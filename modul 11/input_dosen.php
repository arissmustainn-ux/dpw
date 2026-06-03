<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <a href="index.php" class="brand">🎓 SIA</a>
    <a href="viewdosen.php">Dosen</a>
    <a href="viewmahasiswa.php">Mahasiswa</a>
    <a href="viewmatakuliah.php">Mata Kuliah</a>
</nav>

<div class="wrapper">
    <div class="card-standalone">
        <h1>➕ Input Data Dosen</h1>

        <form action="proses_inputdosen.php" method="post" id="form_dosen">
            <fieldset>
                <legend>Input Data Dosen</legend>

                <div class="form-group">
                    <label for="namaDosen">Nama Dosen :</label>
                    <input type="text" name="namaDosen" id="namaDosen"
                           placeholder="Contoh: Dr. Budi Santoso, M.Sc" required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           placeholder="Contoh: 081222333444" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="input" class="btn btn-success">💾 Simpan</button>
                <a href="viewdosen.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mata Kuliah</title>
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
        <h1>➕ Input Data Mata Kuliah</h1>

        <form action="proses_inputmatakuliah.php" method="post" id="form_matakuliah">
            <fieldset>
                <legend>Input Data Mata Kuliah</legend>

                <div class="form-group">
                    <label for="kodeMK">Kode MK :</label>
                    <input type="number" name="kodeMK" id="kodeMK"
                           placeholder="Contoh: 101" required>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah :</label>
                    <input type="text" name="namaMK" id="namaMK"
                           placeholder="Contoh: Pemrograman Web" required>
                </div>

                <div class="form-group">
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" min="1" max="6"
                           placeholder="Contoh: 3" required>
                </div>

                <div class="form-group">
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" min="1"
                           placeholder="Contoh: 3" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="input" class="btn btn-success">💾 Simpan</button>
                <a href="viewmatakuliah.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

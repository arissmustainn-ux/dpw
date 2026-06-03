<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
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
        <h1>➕ Input Data Mahasiswa</h1>

        <form action="proses_inputmahasiswa.php" method="post" id="form_mahasiswa">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>

                <div class="form-group">
                    <label for="npm">NPM :</label>
                    <input type="number" name="npm" id="npm"
                           placeholder="Contoh: 2101001" required>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs"
                           placeholder="Contoh: Budi Santoso" required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi"
                           placeholder="Contoh: Teknik Informatika" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat"
                           placeholder="Contoh: Jl. Merdeka No.10 Madiun" required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           placeholder="Contoh: 085611223344" required>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="input" class="btn btn-success">💾 Simpan</button>
                <a href="viewmahasiswa.php" class="btn btn-secondary">↩ Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

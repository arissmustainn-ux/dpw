<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hero {
            background: linear-gradient(135deg, #1e3a5f, #2d6a9f);
            color: white;
            text-align: center;
            padding: 60px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .hero h1 { font-size: 2rem; margin-bottom: 10px; }
        .hero p  { opacity: 0.85; font-size: 1rem; }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            padding: 30px 25px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .menu-card:hover { transform: translateY(-4px); box-shadow: 0 8px 25px rgba(0,0,0,0.13); }
        .menu-card .icon { font-size: 2.5rem; margin-bottom: 15px; }
        .menu-card h2 { font-size: 1.15rem; color: #1e3a5f; margin-bottom: 8px; }
        .menu-card p  { font-size: 0.85rem; color: #666; margin-bottom: 18px; }
        .menu-card .menu-links { display: flex; gap: 8px; justify-content: center; flex-wrap: wrap; }
    </style>
</head>
<body>
<nav>
    <a href="index.php" class="brand">🎓 SIA</a>
    <a href="viewdosen.php">Dosen</a>
    <a href="viewmahasiswa.php">Mahasiswa</a>
    <a href="viewmatakuliah.php">Mata Kuliah</a>
</nav>

<div class="wrapper">
    <div class="hero">
        <h1>🎓 Sistem Informasi Akademik</h1>
        <p>Praktikum PHP Database — CRUD dengan MySQL</p>
    </div>

    <div class="menu-grid">
        <!-- Dosen -->
        <div class="menu-card">
            <div class="icon">👨‍🏫</div>
            <h2>Data Dosen</h2>
            <p>Kelola data dosen: tambah, lihat, ubah, dan hapus data.</p>
            <div class="menu-links">
                <a href="viewdosen.php" class="btn btn-primary btn-sm">Lihat Data</a>
                <a href="input_dosen.php" class="btn btn-success btn-sm">Tambah</a>
            </div>
        </div>
        <!-- Mahasiswa -->
        <div class="menu-card">
            <div class="icon">👨‍🎓</div>
            <h2>Data Mahasiswa</h2>
            <p>Kelola data mahasiswa: tambah, lihat, ubah, dan hapus data.</p>
            <div class="menu-links">
                <a href="viewmahasiswa.php" class="btn btn-primary btn-sm">Lihat Data</a>
                <a href="input_mahasiswa.php" class="btn btn-success btn-sm">Tambah</a>
            </div>
        </div>
        <!-- Mata Kuliah -->
        <div class="menu-card">
            <div class="icon">📚</div>
            <h2>Data Mata Kuliah</h2>
            <p>Kelola data mata kuliah: tambah, lihat, ubah, dan hapus data.</p>
            <div class="menu-links">
                <a href="viewmatakuliah.php" class="btn btn-primary btn-sm">Lihat Data</a>
                <a href="input_matakuliah.php" class="btn btn-success btn-sm">Tambah</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

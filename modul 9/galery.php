<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }
        .galeri-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            overflow: hidden;
            width: 200px;
            text-align: center;
        }
        .galeri-item img {
            width: 200px;
            height: 160px;
            object-fit: cover;
            display: block;
        }
        .galeri-item p {
            font-size: 12px;
            padding: 6px;
            margin: 0;
            color: #555;
            word-break: break-all;
        }
        .kosong {
            text-align: center;
            color: #999;
            font-style: italic;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<h2>🖼️ Galeri Gambar</h2>

<?php
$fileList = glob(pattern: 'gambar/*');
$ekstensiValid = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
$gambarDitemukan = false;

echo '<div class="galeri">';

foreach ($fileList as $filename) {
    if (is_file($filename)) {
        $ekstensi = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if (in_array($ekstensi, $ekstensiValid)) {
            $gambarDitemukan = true;
            $namaFile = basename($filename);
            echo '<div class="galeri-item">';
            echo '  <img src="' . htmlspecialchars($filename) . '" alt="' . htmlspecialchars($namaFile) . '">';
            echo '  <p>' . htmlspecialchars($namaFile) . '</p>';
            echo '</div>';
        }
    }
}

echo '</div>';

if (!$gambarDitemukan) {
    echo '<p class="kosong">Belum ada gambar di folder. Silakan upload gambar terlebih dahulu.</p>';
}
?>

<div style="text-align:center; margin-top:30px;">
    <a href="upload_gambar.php">⬆️ Upload Gambar Baru</a>
</div>

</body>
</html>

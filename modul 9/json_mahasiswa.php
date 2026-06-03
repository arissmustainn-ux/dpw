<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array ke JSON</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        h2   { color: #333; }
        table { border-collapse: collapse; width: 100%; max-width: 500px;
                background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        th, td { border: 1px solid #ddd; padding: 10px 16px; text-align: left; }
        th { background: #3b82f6; color: #fff; }
        tr:nth-child(even) { background: #f0f4ff; }
        pre { background: #1e1e1e; color: #d4d4d4; padding: 20px;
              border-radius: 8px; overflow-x: auto; font-size: 13px;
              max-width: 600px; }
        .label { background: #e8f5e9; display: inline-block; padding: 4px 10px;
                 border-radius: 4px; font-size: 13px; color: #2e7d32; margin: 4px 0; }
    </style>
</head>
<body>

<h2>📋 Array Nama & Umur → JSON</h2>

<?php
// Array data mahasiswa (min 15 data)
$mahasiswa = [
    ["nama" => "Andi Setiawan",    "umur" => 20],
    ["nama" => "Budi Santoso",     "umur" => 21],
    ["nama" => "Citra Dewi",       "umur" => 19],
    ["nama" => "Dian Pratama",     "umur" => 22],
    ["nama" => "Eka Rahayu",       "umur" => 20],
    ["nama" => "Fajar Nugroho",    "umur" => 23],
    ["nama" => "Gita Lestari",     "umur" => 19],
    ["nama" => "Hendra Kusuma",    "umur" => 21],
    ["nama" => "Indah Permata",    "umur" => 20],
    ["nama" => "Joko Widodo",      "umur" => 22],
    ["nama" => "Kartika Sari",     "umur" => 18],
    ["nama" => "Lukman Hakim",     "umur" => 24],
    ["nama" => "Maya Anggraini",   "umur" => 21],
    ["nama" => "Nanda Putra",      "umur" => 20],
    ["nama" => "Olivia Purnama",   "umur" => 19],
];

// 1. Tampilkan sebagai tabel HTML
echo "<h3>1. Data Array (Tabel HTML)</h3>";
echo "<table>";
echo "<tr><th>No</th><th>Nama</th><th>Umur</th></tr>";
foreach ($mahasiswa as $i => $mhs) {
    echo "<tr><td>" . ($i + 1) . "</td><td>" . $mhs["nama"] . "</td><td>" . $mhs["umur"] . " tahun</td></tr>";
}
echo "</table>";

// 2. Konversi array ke JSON
$json = json_encode($mahasiswa, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo "<br><h3>2. Hasil Konversi ke JSON</h3>";
echo "<pre>" . htmlspecialchars($json) . "</pre>";

// 3. Decode JSON kembali ke array dan tampilkan
echo "<h3>3. Decode JSON → Array (json_decode)</h3>";
$arrayKembali = json_decode($json, true);
echo "<span class='label'>Total data: " . count($arrayKembali) . " mahasiswa</span><br><br>";

foreach ($arrayKembali as $data) {
    echo "• " . $data["nama"] . " - " . $data["umur"] . " tahun<br>";
}

// 4. Info JSON string
echo "<br><h3>4. Info JSON String</h3>";
echo "Panjang karakter JSON : <b>" . strlen($json) . "</b> karakter<br>";
echo "Jumlah data           : <b>" . count($mahasiswa) . "</b> mahasiswa<br>";
?>

</body>
</html>

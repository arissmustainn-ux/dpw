<?php
// Soal 18: Array nilai akhir kelas kecil

$siswa = [
    ["no" => 1, "poin" => 75,  "nama" => "Adi"],
    ["no" => 2, "poin" => 80,  "nama" => "Joni"],
    ["no" => 3, "poin" => 65,  "nama" => "Jihan"],
    ["no" => 4, "poin" => 70,  "nama" => "Aya"],
    ["no" => 5, "poin" => 85,  "nama" => "Ita"],
    ["no" => 6, "poin" => 90,  "nama" => "Budi"],
    ["no" => 7, "poin" => 95,  "nama" => "Tini"],
    ["no" => 8, "poin" => 65,  "nama" => "Sari"],
];

echo "<h2>Data Nilai Siswa</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>No Urut</th><th>Poin</th><th>Siswa</th></tr>";
foreach ($siswa as $s) {
    echo "<tr><td>{$s['no']}</td><td>{$s['poin']}</td><td>{$s['nama']}</td></tr>";
}
echo "</table><br>";

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<h3>a) Poin siswa nomor urut 5</h3>";
foreach ($siswa as $s) {
    if ($s['no'] == 5) {
        echo "Siswa ke-5: {$s['nama']} memiliki poin {$s['poin']}<br>";
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<h3>b) Siswa dengan poin 90</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "Nama: {$s['nama']}<br>";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada siswa dengan poin 90<br>";
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<h3>c) Siswa dengan poin 100</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "Nama: {$s['nama']}<br>";
        $ada = true;
    }
}
if (!$ada) {
    echo "Tidak ada siswa dengan poin 100<br>";
}
?>

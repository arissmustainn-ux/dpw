<?php
/* Huruf  Nilai
   C      = 0  -> 59
   BC     = 60 -> 69
   B      = 70 -> 79
   AB     = 80 -> 89
   A      = 90 -> 100
*/

// Contoh nilai yang akan dikonversi
$nilai = 85; // Ganti nilai ini untuk pengujian

echo "<h2>Konversi Nilai Angka ke Huruf</h2>";
echo "<p>Nilai Angka: $nilai</p>";

if ($nilai >= 0 && $nilai <= 59) {
    $huruf = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $huruf = "BC";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $huruf = "B";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $huruf = "AB";
} elseif ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} else {
    $huruf = "Nilai tidak valid";
}

echo "<p><strong>Nilai Huruf: $huruf</strong></p>";

// Tabel referensi
echo "<br><h3>Tabel Konversi:</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Huruf</th><th>Rentang Nilai</th></tr>";
echo "<tr><td>C</td><td>0 - 59</td></tr>";
echo "<tr><td>BC</td><td>60 - 69</td></tr>";
echo "<tr><td>B</td><td>70 - 79</td></tr>";
echo "<tr><td>AB</td><td>80 - 89</td></tr>";
echo "<tr><td>A</td><td>90 - 100</td></tr>";
echo "</table>";
?>

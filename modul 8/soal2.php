<?php
// Soal Cerita 2: Menentukan pecahan uang yang diterima Ani

$total = 1387500;
$sisa  = $total;

$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "<h2>Rincian Pecahan Uang Ani</h2>";
echo "<p>Total uang yang diambil: Rp. " . number_format($total, 0, ',', '.') . ",-</p>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Pecahan</th><th>Jumlah Lembar/Keping</th><th>Nilai</th></tr>";

foreach ($pecahan as $p) {
    $jumlah = (int)($sisa / $p);
    $nilai  = $jumlah * $p;
    $sisa   = $sisa % $p;

    echo "<tr>";
    echo "<td>Rp. " . number_format($p, 0, ',', '.') . ",-</td>";
    echo "<td>$jumlah</td>";
    echo "<td>Rp. " . number_format($nilai, 0, ',', '.') . ",-</td>";
    echo "</tr>";
}

echo "</table>";
echo "<p>Sisa: Rp. " . number_format($sisa, 0, ',', '.') . ",-</p>";
?>

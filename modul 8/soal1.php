<?php
// Soal Cerita 1: Menghitung Gaji Bersih Obi

$gaji_pokok     = 3250000;
$tunjangan       = 1200000;
$persen_pajak    = 10 / 100; // 10%

$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak      = $persen_pajak * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "<h2>Perhitungan Gaji Bersih Obi</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Gaji Pokok</td><td>Rp. " . number_format($gaji_pokok, 0, ',', '.') . ",-</td></tr>";
echo "<tr><td>Tunjangan Jabatan</td><td>Rp. " . number_format($tunjangan, 0, ',', '.') . ",-</td></tr>";
echo "<tr><td>Gaji Kotor</td><td>Rp. " . number_format($gaji_kotor, 0, ',', '.') . ",-</td></tr>";
echo "<tr><td>Pajak Penghasilan (10%)</td><td>Rp. " . number_format($pajak, 0, ',', '.') . ",-</td></tr>";
echo "<tr><td><strong>Gaji Bersih</strong></td><td><strong>Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-</strong></td></tr>";
echo "</table>";
?>

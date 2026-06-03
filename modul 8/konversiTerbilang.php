<?php
// Konversi angka 1-9 menjadi huruf terbilang menggunakan switch

$angka = 7; // Ganti nilai ini untuk pengujian

echo "<h2>Konversi Angka ke Terbilang</h2>";
echo "<p>Angka: $angka</p>";

switch ($angka) {
    case 1:
        $terbilang = "satu";
        break;
    case 2:
        $terbilang = "dua";
        break;
    case 3:
        $terbilang = "tiga";
        break;
    case 4:
        $terbilang = "empat";
        break;
    case 5:
        $terbilang = "lima";
        break;
    case 6:
        $terbilang = "enam";
        break;
    case 7:
        $terbilang = "tujuh";
        break;
    case 8:
        $terbilang = "delapan";
        break;
    case 9:
        $terbilang = "sembilan";
        break;
    default:
        $terbilang = "Angka tidak dikenali (hanya 1-9)";
}

echo "<p><strong>Terbilang: $terbilang</strong></p>";
?>

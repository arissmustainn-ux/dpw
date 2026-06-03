<?php
$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan " . $x + $y . "<br>";
echo "Pengurangan " . $x - $y . "<br>";
echo "Perkalian " . $x * $y . "<br>";
echo "Pembagian " . $x / $y . "<br>";
echo "Modulus " . $x % $y . "<br>";
echo "Exponensial " . $x ** $y . "<br>";
echo("<br>");

//Assignment operators
$x += 2; //  $x = $x + 2
$y *= 2; //  $y = $y * 2
echo "Penambahan x " . $x . "<br>";
echo "Perkalian y " . $y . "<br>";
echo("<br>");

// Reset nilai untuk increment/decrement
$x = 5;
$y = 10;

//Increment/Decrement operators
echo "Isi ++x = " . ++$x . "<br>";
echo "Isi x++ = " . $x++ . "<br>";
echo "Isi x = " . $x . "<br>";
echo("<br>");

echo "Isi --y = " . --$y . "<br>";
echo "Isi y-- = " . $y-- . "<br>";
echo "Isi y = " . $y . "<br>";
echo("<br>");

/*
 * Penjelasan perbedaan $x++ dan ++$x:
 * - ++$x (Pre-increment): nilai $x ditambah 1 DULU, baru digunakan/ditampilkan
 * - $x++ (Post-increment): nilai $x digunakan/ditampilkan DULU, baru ditambah 1
 * Contoh:
 *   $x = 5;
 *   echo ++$x; // output: 6 (x menjadi 6 sebelum ditampilkan)
 *   echo $x++; // output: 6 (ditampilkan dulu 6, lalu x menjadi 7)
 *   echo $x;   // output: 7
 */

//Conditional assignment operators
$user = "Andi darmawan";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";
// variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

?>

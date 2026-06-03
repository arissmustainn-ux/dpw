<?php
// Menampilkan pola bintang bertingkat
// *
// **
// ***
// ****
// *****
// ******
// *******
// ********
// *********
// **********

echo "<pre>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";
?>

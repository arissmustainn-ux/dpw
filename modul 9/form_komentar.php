<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>

<?php
// Fungsi untuk membersihkan input dari XSS
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = bersihkan_input($_POST["name"]);
    $email   = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo "Nama :" . $name . "<br>";
    echo "Email :" . $email . "<br>";
    echo "Komentar :" . $comment . "<br>";
    echo("<hr>");
}
/*
 * KESIMPULAN:
 * Ketika input diisi dengan kode HTML/JavaScript berbahaya seperti:
 *   <img src="http://url.to.file./tidak.ada" onerror=alert('hacked');>
 * Tanpa fungsi filter → kode tersebut akan dieksekusi browser (XSS Attack).
 * Dengan fungsi bersihkan_input() → karakter berbahaya dikonversi menjadi
 * entitas HTML (&lt; &gt; dst) sehingga aman dan tidak dieksekusi.
 * Fungsi htmlspecialchars() adalah kunci perlindungan dari serangan XSS.
 */
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="name"> <br>
    E-mail: <input type="email" name="email"><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="submit" value="sinpan">
    <input type="reset" value="bersihkan">
</form>

</body>
</html>

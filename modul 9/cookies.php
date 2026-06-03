<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Identitas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .info { background: #e8f5e9; padding: 15px; border-radius: 8px; margin: 10px 0; }
        .error { color: red; font-size: 12px; }
        input { padding: 5px; margin: 3px; }
        button { padding: 6px 14px; margin: 4px; cursor: pointer; }
    </style>
</head>
<body>

<h2>🍪 Cookies - Simpan Identitas</h2>

<?php
$durasi = 60 * 60 * 24 * 7; // 7 hari

// Hapus cookie jika tombol hapus ditekan
if (isset($_POST["hapus"])) {
    setcookie("nama",  "", time() - 3600, "/");
    setcookie("nim",   "", time() - 3600, "/");
    setcookie("email", "", time() - 3600, "/");
    echo "<p style='color:orange;'>Cookie berhasil dihapus. Refresh halaman.</p>";
}

// Simpan cookie jika form disubmit
if (isset($_POST["simpan"])) {
    $nama  = htmlspecialchars(trim($_POST["nama"]));
    $nim   = htmlspecialchars(trim($_POST["nim"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    setcookie("nama",  $nama,  time() + $durasi, "/");
    setcookie("nim",   $nim,   time() + $durasi, "/");
    setcookie("email", $email, time() + $durasi, "/");

    echo "<p style='color:green;'>Data berhasil disimpan ke Cookie selama 7 hari!</p>";
}

// Tampilkan isi cookie jika ada
if (isset($_COOKIE["nama"])) {
    echo '<div class="info">';
    echo "<h3>📋 Data dari Cookie:</h3>";
    echo "Nama  : <b>" . $_COOKIE["nama"]  . "</b><br>";
    echo "NIM   : <b>" . $_COOKIE["nim"]   . "</b><br>";
    echo "Email : <b>" . $_COOKIE["email"] . "</b><br>";
    echo '</div>';
    echo '<form method="post"><button name="hapus">🗑️ Hapus Cookie</button></form>';
} else {
    echo "<p style='color:#999;'>Belum ada data cookie tersimpan.</p>";
}
?>

<hr>
<h3>Simpan Identitas ke Cookie</h3>
<form method="post">
    <table>
        <tr><td>Nama  :</td><td><input type="text"  name="nama"  placeholder="Nama lengkap"></td></tr>
        <tr><td>NIM   :</td><td><input type="text"  name="nim"   placeholder="NIM"></td></tr>
        <tr><td>Email :</td><td><input type="email" name="email" placeholder="Email"></td></tr>
        <tr><td></td><td><button name="simpan">💾 Simpan Cookie</button></td></tr>
    </table>
</form>

</body>
</html>

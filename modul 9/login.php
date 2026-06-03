<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: 11px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        input[type="text"], input[type="password"] {
            padding: 4px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <h2>Halaman Login</h2>

<?php
// Fungsi untuk membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name      = "";
$email     = "";
$nameErr   = "";
$emailErr  = "";

// Akun yang valid (simulasi database)
$valid_user = "admin";
$valid_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }

    // Validasi password
    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
    }

    // Jika semua valid, cek kredensial
    if ($name != "" && $email != "") {
        if ($name == $valid_user && $email == $valid_pass) {
            echo "<p style='color:green;'><b>Login berhasil! Selamat datang, $name.</b></p>";
        } else {
            echo "<p class='error'><b>Username atau password salah!</b></p>";
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="p">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" value="Login">
</form>

<p><small>Gunakan: username = <b>admin</b>, password = <b>12345</b></small></p>

</body>
</html>

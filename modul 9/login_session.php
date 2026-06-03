<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Session</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .error   { color: red; font-size: 12px; }
        .success { color: green; font-weight: bold; }
        .box     { background: #f0f4ff; padding: 20px; border-radius: 10px;
                   max-width: 350px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input    { padding: 6px; width: 220px; margin: 4px 0; }
        button   { padding: 7px 20px; background: #3b82f6; color: #fff;
                   border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #2563eb; }
        .logout  { background: #ef4444; }
        .logout:hover { background: #dc2626; }
        .session-info { background: #e8f5e9; padding: 15px; border-radius: 8px; margin-bottom: 15px; }
    </style>
</head>
<body>

<h2>🔐 Login dengan Session + Exception Handling</h2>

<?php
// Data akun valid (simulasi database)
$akun_valid = [
    "admin"   => "12345",
    "mahasiswa" => "poltek",
];

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Proses LOGOUT
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

// Proses LOGIN dengan Exception Handling
$errorMsg = "";
if (isset($_POST["login"])) {
    try {
        $username = bersihkan_input($_POST["u"] ?? "");
        $password = bersihkan_input($_POST["p"] ?? "");

        // Exception: username kosong
        if (empty($username)) {
            throw new Exception("Username tidak boleh kosong!");
        }

        // Exception: password kosong
        if (empty($password)) {
            throw new Exception("Password tidak boleh kosong!");
        }

        // Exception: username tidak ditemukan
        if (!array_key_exists($username, $akun_valid)) {
            throw new Exception("Username '$username' tidak ditemukan!");
        }

        // Exception: password salah
        if ($akun_valid[$username] !== $password) {
            throw new Exception("Password salah! Silakan coba lagi.");
        }

        // Jika semua valid → buat session
        $_SESSION["username"]    = $username;
        $_SESSION["login_time"]  = date("Y-m-d H:i:s");
        $_SESSION["status"]      = "aktif";

        echo "<p class='success'>✅ Login berhasil! Selamat datang, <b>$username</b>.</p>";

    } catch (Exception $e) {
        $errorMsg = $e->getMessage();
    }
}

// Tampilkan info session jika sudah login
if (isset($_SESSION["username"])) {
    echo '<div class="session-info">';
    echo "<h3>📋 Informasi Session Aktif:</h3>";
    echo "Username   : <b>" . $_SESSION["username"]   . "</b><br>";
    echo "Login pukul: <b>" . $_SESSION["login_time"] . "</b><br>";
    echo "Status     : <b>" . $_SESSION["status"]     . "</b><br>";
    echo "Session ID : <small>" . session_id() . "</small><br>";
    echo '</div>';
    echo '<form method="post"><button class="logout" name="logout">🚪 Logout</button></form>';
} else {
    // Tampilkan form login
    ?>
    <div class="box">
        <h3>Masuk ke Sistem</h3>
        <?php if ($errorMsg): ?>
            <p class="error">⚠️ <?php echo $errorMsg; ?></p>
        <?php endif; ?>
        <form method="post">
            <label>Username:</label><br>
            <input type="text" name="u" placeholder="Masukkan username"><br>
            <label>Password:</label><br>
            <input type="password" name="p" placeholder="Masukkan password"><br><br>
            <button name="login">🔑 Login</button>
        </form>
        <br>
        <small>Akun tersedia:<br>
            admin / 12345<br>
            mahasiswa / poltek
        </small>
    </div>
    <?php
}
?>

</body>
</html>

<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

// Proses login
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & password sederhana
    if ($username === "admin" && $password === "123") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="2409106021_Rusdiana.css">
</head>
<body>
    <header>
        <h1>Login Website Pemain Bola BARCA</h1>
    </header>

    <main class="card">
        <h2>Silakan Login</h2>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>

            <label>Password:</label>
            <input type="password" name="password" required><br><br>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p style="color:red;"><?php echo $error; ?></p>
    </main>
</body>
</html>

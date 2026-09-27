<?php
session_start();
include "config/db.php";

if (isset($_SESSION["admin_id"])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $conn->prepare("SELECT id, name, email, password_hash FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();
    $stmt->close();

    if ($admin && password_verify($password, $admin["password_hash"])) {
        $_SESSION["admin_id"] = $admin["id"];
        $_SESSION["admin_name"] = $admin["name"];
        header("Location: dashboard.php");
        exit;
    }

    $error = "Invalid email or password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Malathi Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-body">
<div class="auth-card">
    <a class="brand auth-brand" href="index.php"><span class="brand-mark">M</span><span>Malathi<span class="brand-dot">.</span></span></a>
    <div class="auth-icon">🔐</div>
    <h1>Admin Login</h1>
    <p>Login to view contact form submissions.</p>

    <?php if ($error): ?>
        <div class="alert error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required placeholder="admin@example.com">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required placeholder="Your password">
        </div>
        <button class="btn btn-primary full-width" type="submit">Login</button>
    </form>
    <a class="back-link" href="index.php">← Back to portfolio</a>
</div>
</body>
</html>

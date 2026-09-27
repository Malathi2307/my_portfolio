<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit;
}

include "config/db.php";

$messages = [];
$result = $conn->query("SELECT id, name, email, subject, message, created_at FROM messages ORDER BY created_at DESC");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Malathi Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <nav class="navbar container">
        <a href="index.php" class="brand"><span class="brand-mark">M</span><span>Malathi<span class="brand-dot">.</span></span></a>
        <div class="nav-links dashboard-nav">
            <a href="index.php">View Site</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
</header>

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">ADMIN AREA</span>
        <h1>Welcome, <span><?= htmlspecialchars($_SESSION["admin_name"]) ?></span></h1>
        <p>Messages submitted through the portfolio contact form.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="dashboard-summary">
            <div><strong><?= count($messages) ?></strong><span>Total Messages</span></div>
            <div><strong>PHP</strong><span>Server Processing</span></div>
            <div><strong>MySQL</strong><span>Database Storage</span></div>
        </div>

        <?php if (empty($messages)): ?>
            <div class="empty-state">
                <div>📭</div>
                <h2>No messages yet</h2>
                <p>Messages submitted through the contact form will appear here.</p>
            </div>
        <?php else: ?>
            <div class="message-table-wrap">
                <table class="message-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($messages as $message): ?>
                        <tr>
                            <td><?= htmlspecialchars($message["name"]) ?></td>
                            <td><a href="mailto:<?= htmlspecialchars($message["email"]) ?>"><?= htmlspecialchars($message["email"]) ?></a></td>
                            <td><?= htmlspecialchars($message["subject"] ?: "—") ?></td>
                            <td><?= nl2br(htmlspecialchars($message["message"])) ?></td>
                            <td><?= htmlspecialchars($message["created_at"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>

<footer class="footer"><div class="container copyright">Admin Dashboard • Malathi Portfolio</div></footer>
</body>
</html>

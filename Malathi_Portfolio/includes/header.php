<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$pageTitle = $pageTitle ?? "Malathi S | Computer Science Portfolio";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Malathi S - B.E. Computer Science and Engineering student portfolio">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <nav class="navbar container">
        <a href="index.php" class="brand">
            <span class="brand-mark">M</span>
            <span>Malathi<span class="brand-dot">.</span></span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">☰</button>

        <div class="nav-links" id="navLinks">
            <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
            <a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
            <a class="<?= $currentPage === 'academics.php' ? 'active' : '' ?>" href="academics.php">Academics</a>
            <a class="<?= $currentPage === 'projects.php' ? 'active' : '' ?>" href="projects.php">Projects</a>
            <a class="<?= $currentPage === 'skills.php' ? 'active' : '' ?>" href="skills.php">Skills</a>
            <a class="<?= $currentPage === 'internships.php' ? 'active' : '' ?>" href="internships.php">Internship</a>
            <a class="<?= $currentPage === 'achievements.php' ? 'active' : '' ?>" href="achievements.php">Achievements</a>
            <a class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </div>

        <button class="theme-toggle" id="themeToggle" title="Toggle dark mode" aria-label="Toggle dark mode">☾</button>
    </nav>
</header>
<main>

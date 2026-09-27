<?php
$pageTitle = "Malathi S | Portfolio";
include "includes/header.php";
?>
<section class="hero">
    <div class="hero-bg"></div>
    <div class="container hero-grid">
        <div class="hero-content reveal">
            <span class="eyebrow">B.E. COMPUTER SCIENCE & ENGINEERING</span>
            <h1>Hi, I'm <span>Malathi S</span>.</h1>
            <h2>I am a <span id="typingText">Computer Science Student</span><span class="cursor">|</span></h2>
            <p>
                Motivated and enthusiastic Computer Science and Engineering student with a strong
                foundation in programming and web development. Eager to apply technical skills,
                learn new technologies and contribute to the growth of an organization.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="projects.php">Explore My Work</a>
                <a class="btn btn-outline" href="assets/images/resume.png" target="_blank">View Resume</a>
            </div>
            <div class="quick-info">
                <span>📍 Tamil Nadu, India</span>
                <span>🎓 CGPA: 8.5/10</span>
                <span>📅 Graduation: 2028</span>
            </div>
        </div>

        <div class="hero-card reveal">
            <div class="profile-orbit"></div>
            <div class="profile-avatar">MS</div>
            <h3>Malathi S</h3>
            <p>Computer Science & Engineering</p>
            <div class="hero-stats">
                <div><strong>8.5</strong><span>CGPA</span></div>
                <div><strong>2028</strong><span>Graduation</span></div>
                <div><strong>2+</strong><span>Certificates</span></div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="highlights">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">PORTFOLIO HIGHLIGHTS</span>
            <h2>Building skills through <span>learning & practice</span></h2>
            <p>Explore my academics, projects, internship experience, technical skills and achievements.</p>
        </div>

        <div class="feature-grid">
            <a href="academics.php" class="feature-card reveal">
                <div class="icon">🎓</div>
                <h3>Academic Journey</h3>
                <p>B.E. Computer Science and Engineering with an 8.5/10 CGPA.</p>
                <span>Explore →</span>
            </a>
            <a href="projects.php" class="feature-card reveal">
                <div class="icon">💻</div>
                <h3>Academic Project</h3>
                <p>Hotel Management Website focused on organized and user-friendly web pages.</p>
                <span>Explore →</span>
            </a>
            <a href="internships.php" class="feature-card reveal">
                <div class="icon">🚀</div>
                <h3>Internship</h3>
                <p>HTML internship experience with practical exposure to webpage design.</p>
                <span>Explore →</span>
            </a>
            <a href="skills.php" class="feature-card reveal">
                <div class="icon">⚡</div>
                <h3>Technical Skills</h3>
                <p>Java, C, Python, HTML, problem solving and basic web development.</p>
                <span>Explore →</span>
            </a>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container stats-grid">
        <div class="stat-card reveal"><strong data-count="8.5">0</strong><span>CGPA / 10</span></div>
        <div class="stat-card reveal"><strong data-count="6">0</strong><span>Core Skills</span></div>
        <div class="stat-card reveal"><strong data-count="2">0</strong><span>Certifications</span></div>
        <div class="stat-card reveal"><strong data-count="1">0</strong><span>Academic Project</span></div>
    </div>
</section>
<?php include "includes/footer.php"; ?>

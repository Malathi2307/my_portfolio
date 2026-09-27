<?php
$pageTitle = "Contact | Malathi S";
include "config/db.php";
include "includes/header.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $message === "") {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = "Thank you! Your message has been submitted successfully.";
        } else {
            $error = "Something went wrong. Please try again.";
        }
        $stmt->close();
    }
}
?>
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">LET'S CONNECT</span>
        <h1>Contact <span>Me</span></h1>
        <p>Have a question, opportunity or feedback? Send me a message.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-info reveal">
            <span class="eyebrow">CONTACT DETAILS</span>
            <h2>Let's start a conversation.</h2>
            <p>I am open to learning opportunities, internships, projects and professional connections.</p>

            <a href="mailto:smalathi7227@gmail.com" class="contact-item">
                <span class="contact-icon">✉</span>
                <span><small>Email</small>smalathi7227@gmail.com</span>
            </a>
            <a href="tel:6383281921" class="contact-item">
                <span class="contact-icon">☎</span>
                <span><small>Phone</small>6383281921</span>
            </a>
            <div class="contact-item">
                <span class="contact-icon">📍</span>
                <span><small>Location</small>Tamil Nadu, India</span>
            </div>
        </div>

        <div class="form-card reveal">
            <?php if ($success): ?>
                <div class="alert success"><?= htmlspecialchars($success) ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" id="contactForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input id="name" name="name" type="text" required placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" name="email" type="email" required placeholder="you@example.com">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" placeholder="Internship / Project / General">
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required placeholder="Write your message..."></textarea>
                </div>

                <button class="btn btn-primary full-width" type="submit">Send Message ✨</button>
            </form>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>

document.addEventListener("DOMContentLoaded", () => {
    // Mobile navigation
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", () => {
            navLinks.classList.toggle("show");
        });

        navLinks.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => navLinks.classList.remove("show"));
        });
    }

    // Dark mode
    const themeToggle = document.getElementById("themeToggle");
    const savedTheme = localStorage.getItem("portfolio-theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        if (themeToggle) themeToggle.textContent = "☀";
    }

    if (themeToggle) {
        themeToggle.addEventListener("click", () => {
            document.body.classList.toggle("dark");
            const dark = document.body.classList.contains("dark");
            localStorage.setItem("portfolio-theme", dark ? "dark" : "light");
            themeToggle.textContent = dark ? "☀" : "☾";
        });
    }

    // Typing effect
    const typingText = document.getElementById("typingText");
    if (typingText) {
        const words = [
            "Computer Science Student",
            "Web Developer",
            "Java Learner",
            "Problem Solver"
        ];
        let wordIndex = 0;
        let charIndex = 0;
        let deleting = false;

        function type() {
            const word = words[wordIndex];

            if (!deleting) {
                typingText.textContent = word.substring(0, charIndex + 1);
                charIndex++;

                if (charIndex === word.length) {
                    deleting = true;
                    setTimeout(type, 1300);
                    return;
                }
            } else {
                typingText.textContent = word.substring(0, charIndex - 1);
                charIndex--;

                if (charIndex === 0) {
                    deleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                }
            }
            setTimeout(type, deleting ? 45 : 80);
        }
        type();
    }

    // Scroll reveal
    const revealElements = document.querySelectorAll(".reveal");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealElements.forEach(el => observer.observe(el));

    // Animated counters
    const counters = document.querySelectorAll("[data-count]");
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const el = entry.target;
            const target = parseFloat(el.dataset.count);
            const isDecimal = target % 1 !== 0;
            let current = 0;
            const step = target / 45;

            const update = () => {
                current += step;
                if (current >= target) {
                    el.textContent = isDecimal ? target.toFixed(1) : target;
                    return;
                }
                el.textContent = isDecimal ? current.toFixed(1) : Math.floor(current);
                requestAnimationFrame(update);
            };
            update();
            counterObserver.unobserve(el);
        });
    }, { threshold: 0.7 });

    counters.forEach(counter => counterObserver.observe(counter));

    // Contact form client-side validation
    const form = document.getElementById("contactForm");
    if (form) {
        form.addEventListener("submit", (event) => {
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const message = document.getElementById("message").value.trim();

            if (!name || !email || !message) {
                event.preventDefault();
                alert("Please complete all required fields.");
            }
        });
    }
});

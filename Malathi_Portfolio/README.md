# Malathi S - Dynamic Portfolio Website

## Technologies
- HTML5
- CSS3
- JavaScript
- PHP 8+
- MySQL

## Features
1. Responsive multi-page portfolio
2. Home, About, Academics, Projects, Skills, Internship, Achievements and Contact pages
3. Typing animation
4. Scroll-reveal animations
5. Animated counters
6. Dark/light mode saved in browser localStorage
7. Mobile navigation
8. Dynamic PHP contact form
9. MySQL database storage for contact messages
10. Admin login and dashboard to view submitted messages
11. Resume preview from the supplied resume image
12. Prepared SQL statements and password hashing

## XAMPP setup
1. Install XAMPP.
2. Start Apache and MySQL from XAMPP Control Panel.
3. Copy the complete `Malathi_Portfolio` folder into:
   `C:\xampp\htdocs\`
4. Open phpMyAdmin:
   `http://localhost/phpmyadmin`
5. Import `database/portfolio.sql`.
6. Open:
   `http://localhost/Malathi_Portfolio/`

## Admin login
- Email: admin@example.com
- Password: Admin@123

Change the demo admin password before using the site publicly.

## Important
If your MySQL root user has a password, update `config/db.php`.

## Assignment explanation
The dynamic feature is the Contact + Admin Dashboard:
- Contact form sends data to PHP using POST.
- PHP validates the input and inserts it into the MySQL `messages` table.
- Admin logs in through `login.php`.
- `dashboard.php` reads messages from MySQL and displays them.
- `password_hash()` / `password_verify()` are used for admin authentication.

## Suggested demo flow
1. Open Home.
2. Demonstrate dark mode.
3. Show Projects and Skills.
4. Open Contact and submit a sample message.
5. Open Admin Login.
6. Login with the demo credentials.
7. Show that the submitted message appears in the dashboard.

## Viva points
- HTML: structure and semantic sections.
- CSS: responsive design, cards, grid, animations and dark mode.
- JavaScript: menu, typing animation, scroll reveal, counters, localStorage and validation.
- PHP: sessions, form handling, validation and database operations.
- MySQL: stores contact messages and admin details.

CREATE DATABASE IF NOT EXISTS malathi_portfolio
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE malathi_portfolio;

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Demo admin account:
-- Email: admin@example.com
-- Password: Admin@123
INSERT INTO admins (name, email, password_hash)
VALUES (
    'Malathi Admin',
    'admin@example.com',
    '$2y$12$MolZybiD38OfZ5yD9hg96uteat.228r65ZVsJM5.rMK36ZaMJthvW'
)
ON DUPLICATE KEY UPDATE email = email;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    address VARCHAR(255),
    phone VARCHAR(20),
    password VARCHAR(255)
);
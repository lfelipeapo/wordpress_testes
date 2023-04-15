CREATE DATABASE desafio;
USE desafio;

CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    method VARCHAR(10),
    path VARCHAR(255),
    status_code INT,
    response TEXT
);

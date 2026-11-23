CREATE DATABASE IF NOT EXISTS my_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE my_blog;

DROP TABLE IF EXISTS articles;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(128) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (id, nickname, email) VALUES (1, 'admin', 'admin@example.com');
INSERT INTO articles (id, author_id, name, text) VALUES
(1, 1, 'Статья 1', 'Всем привет, это текст первой статьи'),
(2, 1, 'Статья 2', 'Всем привет, это текст второй статьи');

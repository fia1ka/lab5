CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(128) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (id, nickname, email) VALUES (1, 'admin', 'admin@example.com');
INSERT INTO articles (id, author_id, name, text) VALUES (1, 1, 'Первая статья', 'Текст первой статьи в блоге.');

CREATE TABLE feedback (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL, 
    body TEXT DEFAULT '',
    date DATETIME
);

INSERT INTO feedback(name, email, body, date) VALUES 
('Duong', 'phanquangduong2002@gmail.com', 'I like it', current_timestamp()),
('Trinh', 'nieve.iris@gmail.com', 'Good', current_timestamp());
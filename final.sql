-- Create database
CREATE DATABASE IF NOT EXISTS final;
USE final;

-- Create table
CREATE TABLE IF NOT EXISTS string_info (
    string_id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(50)
);


INSERT INTO string_info (message) VALUES
('Hello'),
('Test message'),
('Final exam is fun');

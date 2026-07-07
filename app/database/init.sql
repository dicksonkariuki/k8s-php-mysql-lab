CREATE DATABASE IF NOT EXISTS studentdb;

USE studentdb;

CREATE TABLE students(

id INT AUTO_INCREMENT PRIMARY KEY,

student_name VARCHAR(100),

reg_no VARCHAR(100),

email VARCHAR(100),

course VARCHAR(100)

);

INSERT INTO students(student_name,reg_no,email,course)

VALUES

('John Doe','SCT211-001','john@example.com','Computer Science'),

('Jane Smith','SCT211-002','jane@example.com','Information Technology');
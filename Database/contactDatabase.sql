/*CREATE DATABASE sherlock_contactlist;*/

USE sherlock_contactlist;

CREATE TABLE contactList (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    username VARCHAR(50),
    email VARCHAR(100),
    note TEXT
);
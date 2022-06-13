-- use university DATABASE
use university;
-- general user table
CREATE TABLE `user`(
    id INT(7) PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(50),
    mname VARCHAR(50),
    lname VARCHAR(50),
    uname VARCHAR(50),
    email VARCHAR(200),
    bdate TEXT,
    pWord TEXT,
    uState TEXT
);

SELECT * FROM user;
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

create table alumnus(

	id int(6) primary key auto_increment,
	name varchar(30),
	year_of_enrolment text, 
	year_of_graduation text, 
	headmaster_at_enrolment text,
	headmaster_at_graduation text,
	famous_teacher_graduation text, 
	results text, 
	current_occupation varchar(20), 
	address varchar(50), 
	email varchar(90),
	mobile_number text
	
);
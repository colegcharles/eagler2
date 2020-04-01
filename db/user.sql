create table user(
	user_id INT(10) NOT NULL AUTO_INCREMENT,
	fname VARCHAR(25) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL,
    email VARCHAR(25) NOT NULL,
    phone_num VARCHAR(10),
    country_code INT(3),
    bdate DATE,
    gender VARCHAR(10),
    role VARCHAR(4),
    PRIMARY KEY ( user_id )
);

create database eagler;



insert into eaglerdb.user (fname, lname, username, password, email,
	phone_num, country_code, bdate, gender) values ('cole', 'charles',
    'cc12954', 'password', 'cc12954@gsu.com', '3165733506', 7, '1997-02-24',
    'boy');

truncate table eaglerdb.user;
select * from eaglerdb.user;


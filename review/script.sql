
CREATE DATABASE movie;

USE movie;

-- ------------------------------------------------------------ create tables
CREATE TABLE user(
	id INT PRIMARY KEY,
    name varchar(20),
    user_name varchar(40),
    email varchar(40),
    password varchar(40)
);
CREATE TABLE to_watch (
	id int PRIMARY KEY,
    title varchar(20),
    user_id int,
    FOREIGN KEY(user_id) REFERENCES user(id)
);



-- ------------------------------------------------------------ inderting data


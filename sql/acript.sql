
-- user
CREATE TABLE User (
	id int PRIMARY KEY AUTO_INCREMENT,
    is_admin varchar(20),
    name varchar(50),
    user_name varchar(50),
    email varchar(100),
    password varchar(255)
);

CREATE TABLE favorite (
	user_id int,
    movie_id int,
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (movie_id) REFERENCES movie(id)
);

CREATE TABLE to_watch (
	movie_id int,
    FOREIGN KEY (movie_id) REFERENCES movie (id),
    user_id int,
    FOREIGN KEY (user_id) REFERENCES user (id)
);


INSERT INTO `user`(`is_admin`, `name`, `user_name`, `email`, `password`) 
VALUES ('false','zakaria','elkoh00','zakaria@gmail.com','12345678');
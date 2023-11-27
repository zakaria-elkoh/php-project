
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
CREATE TABLE Equipements(
	id int PRIMARY KEY,
    nom varchar(20),
    salle_id int,
    FOREIGN KEY(salle_id) REFERENCES salles(id)
);
CREATE TABLE Post(
	id int PRIMARY KEY,
    nom varchar(20)
);
CREATE TABLE Departement(
	id int PRIMARY KEY,
    nom varchar(20)
);
CREATE TABLE Employes(
	id int primary key,
    nom varchar(20),
    email varchar(20),
    post_id int,
    departement_id int,
    FOREIGN KEY (post_id) REFERENCES post(id),
    FOREIGN KEY (departement_id) REFERENCES departement(id)
);
CREATE TABLE Reservations(
	id int primary key,
    FOREIGN KEY (salle_id) REFERENCES Salles(id),
	salle_id int,
    FOREIGN KEY (employes_id) REFERENCES Employes(id),
    employes_id int,
    start_date date,
    end_date date
);

-- ------------------------------------------------------------ inderting data

-- salles
INSERT INTO salles
VALUES  (1, 'Conference room', 20),
        (2, 'Meeting rooms', 20),
        (3, 'Outdoor terraces', 16),
        (4, 'Brainstorming rooms', 6),
        (5, 'Phone rooms', 4),
        (6, 'Common area', 20);
-- Equipements
INSERT INTO Equipements
VALUES  (1, 'pc', 1),
        (2, 'board', 1),
        (3, 'chears', 1),
        (4, 'chears', 2),
        (5, 'pc', 2),
        (6, 'chears', 3),
        (7, 'board', 5);

-- post
INSERT INTO Post
VALUES  (1, 'Manager'),
        (2, 'Systems analyst'),
        (3, 'H R Manager'),
        (4, 'Software engineer'),
        (5, 'financial officer');
-- Departement
INSERT INTO Departement
VALUES  (1, 'Resting'),
        (2, 'Meeting');
-- Employes
INSERT INTO Employes
VALUES  (1, 'Zakaria Elkoh', 'zaka@gmail.com', 1, 2),
        (2, 'Ibtisam ', 'ibti@gmail.com', 2, 2),
        (3, 'Hamza Idrisi', 'hamza@gmail.com', 3, 2),
        (4, 'Abd elkodos', 'abdo@gmail.com', 4, 2),
        (5, 'Abd Jlil', 'abdejlil@gmail.com', 5, 2),
        (6, 'Nabil', 'nabil@gmail.com', 4, 1),
        (7, 'Abd Jlil', 'abdejlil@gmail.com', 5, 1);
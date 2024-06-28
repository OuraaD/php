<!-- CREER UNE BASE DE DONNEE library_db -->
CREATE DATABASE library_db;
USE library_db;
<!-- CREER UNE TABLE BOOK -->
CREATE TABLE book (
id INT PRIMARY KEY AUTO_INCREMENT ,
nom VARCHAR (255),
description TEXT,
annee_parution INT,
id_auteur INT,
FOREIGN KEY (id_auteur) REFERENCES author(id)
);
<!-- id, nom,description,anne_parution, id_auteur (clé etrangere) -->

<!-- CREER UNE TABLE AUTHOR -->
<!-- id, nom, prenom, pays_origine, date_naissance -->
CREATE TABLE author (
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255),
prenom VARCHAR(255),
pays_origine VARCHAR(255),
date_naissance DATE
);

<!-- INSERER DES DONNEE -->
<!-- 10 livres et 4 auteurs -->

INSERT INTO book (nom,description,annee_parution,id_auteur) VALUES 

('One Hundred Years of Solitude', 'Une saga épique qui retrace l\'histoire de la famille Buendía sur sept générations dans le village fictif de Macondo.', 1967, 1),
('Love in the Time of Cholera', 'Un récit d\'amour intemporel entre Fermina Daza et Florentino Ariza, qui attend plus de cinquante ans pour être avec son amour.', 1985, 1),
('Norwegian Wood', 'Une exploration de la nostalgie, de l\'amour perdu et des tourments de la jeunesse dans le Japon des années 1960.', 1987, 2),
('Kafka on the Shore', 'Un roman complexe et surréaliste qui suit deux personnages : un adolescent en fuite et un vieil homme doté de pouvoirs surnaturels.', 2002, 2),
('Half of a Yellow Sun', 'Un récit puissant sur la guerre du Biafra, vu à travers les yeux de trois personnages principaux.', 2006, 3),
('Americanah', 'L\'histoire d\'une jeune femme nigériane qui émigre aux États-Unis pour étudier, explorant les thèmes de l\'identité et de la diaspora.', 2013, 3),
('Harry Potter and the Philosopher\'s Stone', 'Le premier livre de la série Harry Potter, introduisant le jeune sorcier et ses aventures à l\'école de sorcellerie de Poudlard.', 1997, 4),
('Harry Potter and the Prisoner of Azkaban', 'Le troisième livre de la série, où Harry découvre la vérité sur son passé et son lien avec Sirius Black.', 1999, 4),
('The Casual Vacancy', 'Un roman pour adultes se déroulant dans la petite ville fictive de Pagford, explorant les luttes politiques et sociales de ses habitants.', 2012, 4),
('1984', 'Une dystopie décrivant une société totalitaire où Big Brother surveille tous les aspects de la vie des citoyens.', 1949, 5);

INSERT INTO book (nom, description, annee_parution, id_auteur)
VALUES ('Fantastic Beasts and Where to Find Them', 'Un guide de la faune magique et des créatures fantastiques dans l'univers de Harry Potter.', 2001,4); 

INSERT INTO author (nom,prenom,pays_origine,date_naissance) VALUES
('García Márquez', 'Gabriel', 'Colombie', '1927-03-06'),
('Murakami',  'Haruki', 'Japon', '1949-01-12'),
( 'Ngozi Adichie', 'Chimamanda', 'Nigeria', '1977-09-15'),
( 'Rowling','J.K.',  'Royaume-Uni', '1965-07-31'),
('Orwell','George',  'Royaume-Uni', '1903-06-25');


 <!-- AFFICHER LES LIVRES AVEC LEURS AUTEURS -->
 SELECT book.nom AS Livres, author.nom AS Auteurs, author.prenom AS Prénom
FROM book JOIN author ON book.id_auteur = author.id;

<!-- AFFICHER LE NOMBRE DE LIVRES ECRIT PAR CHAQUE AUTEUR -->

SELECT author.nom AS Auteurs, COUNT(book.id) AS Nbr_livres
FROM author JOIN book ON author.id = book.id_auteur GROUP BY author.id;
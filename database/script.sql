DROP DATABASE IF EXISTS restaurant;

CREATE DATABASE restaurant;

USE `restaurant`;

CREATE TABLE platos
(
	idplato			INT AUTO_INCREMENT PRIMARY KEY,
	tipo				VARCHAR(50),
	nombreplato		VARCHAR(50),
	precio			DECIMAL(5,2)
) ENGINE = INNODB;

INSERT INTO platos (tipo, nombreplato, precio) VALUES
	('Entrada', 'Ceviche de pescado', 7),
	('Plato de fondo', 'Arroz con mariscos', 35);


SELECT * FROM platos;
-- =============================================
-- INIT SQL - API MOVIES (Entorno DEV)
-- Base de datos: movies_db
-- =============================================

CREATE TABLE IF NOT EXISTS movies (
    id BIGSERIAL PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    year INTEGER,
    genre VARCHAR(100),
    director VARCHAR(150),
    rating DOUBLE PRECISION,
    synopsis TEXT
);

INSERT INTO movies (title, year, genre, director, rating, synopsis) VALUES
('Inception', 2010, 'Sci-Fi', 'Christopher Nolan', 8.8, 'Un ladron que roba secretos corporativos a traves de la tecnologia de los suenos recibe la tarea inversa: implantar una idea en la mente de un CEO.'),
('The Shawshank Redemption', 1994, 'Drama', 'Frank Darabont', 9.3, 'Dos hombres encarcelados forjan una amistad a lo largo de los anos, encontrando consuelo y eventual redencion a traves de actos de decencia comun.'),
('Pulp Fiction', 1994, 'Thriller', 'Quentin Tarantino', 8.9, 'Las vidas de dos sicarios, un boxeador, la esposa de un gangster y un par de bandidos se entrelazan en cuatro historias de violencia y redencion.'),
('The Matrix', 1999, 'Sci-Fi', 'Lana Wachowski', 8.7, 'Un hacker descubre que la realidad tal como la conoce es una simulacion creada por maquinas, y se une a una rebelion para liberar a la humanidad.'),
('Interstellar', 2014, 'Sci-Fi', 'Christopher Nolan', 8.6, 'Un equipo de exploradores viaja a traves de un agujero de gusano en el espacio en un intento de asegurar la supervivencia de la humanidad.');

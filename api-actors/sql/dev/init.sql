-- =============================================
-- INIT SQL - API ACTORS (Entorno DEV)
-- Base de datos: actors_db
-- =============================================

CREATE TABLE IF NOT EXISTS actors (
    id BIGSERIAL PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    character_name VARCHAR(200),
    movie_id BIGINT NOT NULL
);

-- Actores de "Inception" (movie_id = 1)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Leonardo DiCaprio', 'Dom Cobb', 1),
('Joseph Gordon-Levitt', 'Arthur', 1),
('Elliot Page', 'Ariadne', 1),
('Tom Hardy', 'Eames', 1);

-- Actores de "The Shawshank Redemption" (movie_id = 2)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Tim Robbins', 'Andy Dufresne', 2),
('Morgan Freeman', 'Ellis Red Redding', 2),
('Bob Gunton', 'Warden Norton', 2);

-- Actores de "Pulp Fiction" (movie_id = 3)
INSERT INTO actors (name, character_name, movie_id) VALUES
('John Travolta', 'Vincent Vega', 3),
('Uma Thurman', 'Mia Wallace', 3),
('Samuel L. Jackson', 'Jules Winnfield', 3),
('Bruce Willis', 'Butch Coolidge', 3);

-- Actores de "The Matrix" (movie_id = 4)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Keanu Reeves', 'Neo', 4),
('Laurence Fishburne', 'Morpheus', 4),
('Carrie-Anne Moss', 'Trinity', 4),
('Hugo Weaving', 'Agent Smith', 4);

-- Actores de "Interstellar" (movie_id = 5)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Matthew McConaughey', 'Cooper', 5),
('Anne Hathaway', 'Brand', 5),
('Jessica Chastain', 'Murph', 5),
('Michael Caine', 'Profesor Brand', 5);

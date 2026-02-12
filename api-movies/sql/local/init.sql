-- =============================================
-- INIT SQL - API MOVIES (Entorno LOCAL)
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
('El Algoritmo Perdido', 2024, 'Sci-Fi', 'Brahim', 8.5, 'Un programador descubre un algoritmo que puede predecir el futuro, pero cada prediccion tiene un coste inesperado.'),
('Despliegue Mortal', 2023, 'Thriller', 'Cipri', 7.8, 'Un equipo de desarrolladores debe desplegar una aplicacion critica en produccion antes de medianoche o las consecuencias seran fatales.'),
('La Base de Datos Infinita', 2024, 'Sci-Fi', 'Antonio', 9.1, 'En un mundo donde los recuerdos se almacenan en bases de datos, un hacker descubre una tabla oculta con secretos que cambiaran la humanidad.'),
('Docker Island', 2022, 'Action', 'Iker', 7.2, 'Atrapados en una isla donde cada zona es un contenedor aislado, un grupo de supervivientes debe encontrar la forma de orquestar su escape.'),
('El Commit Final', 2025, 'Drama', 'Estefania', 8.9, 'La historia de una desarrolladora que debe elegir entre su ultimo gran proyecto y las personas que ama.'),
('Puerto 443', 2023, 'Thriller', 'Marina', 8.0, 'Una experta en seguridad informatica descubre una brecha en el puerto 443 que podria exponer los secretos de medio mundo.');

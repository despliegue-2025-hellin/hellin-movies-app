-- =============================================
-- INIT SQL - API ACTORS (Entorno LOCAL)
-- Base de datos: actors_db
-- =============================================

CREATE TABLE IF NOT EXISTS actors (
    id BIGSERIAL PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    character_name VARCHAR(200),
    movie_id BIGINT NOT NULL
);

-- Actores de "El Algoritmo Perdido" (movie_id = 1)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Brahim Martinez', 'Neo Turing', 1),
('Marina Lopez', 'Dra. Ada Code', 1),
('Cipri Garcia', 'El Arquitecto', 1);

-- Actores de "Despliegue Mortal" (movie_id = 2)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Antonio Ruiz', 'DevOps Master', 2),
('Iker Sanchez', 'El Sysadmin', 2),
('Estefania Torres', 'La Product Owner', 2);

-- Actores de "La Base de Datos Infinita" (movie_id = 3)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Marina Lopez', 'Query', 3),
('Brahim Martinez', 'Index', 3),
('Antonio Ruiz', 'DBA Supreme', 3),
('Cipri Garcia', 'El Normalizer', 3);

-- Actores de "Docker Island" (movie_id = 4)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Iker Sanchez', 'Captain Container', 4),
('Estefania Torres', 'Volume', 4),
('Brahim Martinez', 'Bridge Network', 4);

-- Actores de "El Commit Final" (movie_id = 5)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Estefania Torres', 'Elena Merge', 5),
('Marina Lopez', 'Sara Branch', 5),
('Antonio Ruiz', 'El Reviewer', 5);

-- Actores de "Puerto 443" (movie_id = 6)
INSERT INTO actors (name, character_name, movie_id) VALUES
('Marina Lopez', 'Agent TLS', 6),
('Cipri Garcia', 'Firewall', 6),
('Iker Sanchez', 'Packet Sniffer', 6),
('Brahim Martinez', 'Zero Day', 6);

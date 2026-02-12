package com.hellin.actors.repository;

import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
import com.hellin.actors.model.Actor;

@Repository
public interface ActorRepository extends JpaRepository<Actor, Long> {

    /**
     * Busca actores por el ID de la película.
     * @param movieId identificador de la película
     * @return lista de actores de esa película
     */
    List<Actor> findByMovieId(Long movieId);
}

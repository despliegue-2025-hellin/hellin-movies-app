package com.hellin.actors.model;

import jakarta.persistence.*;

/**
 * Entidad que representa un actor de una película.
 * Se corresponde con la tabla "actors" en la base de datos.
 */
@Entity
@Table(name = "actors")
public class Actor {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;

    @Column(name = "character_name")
    private String character;

    @Column(name = "movie_id")
    private Long movieId;

    public Actor() {}

    // Getters y Setters

    public Long getId() { return id; }
    public void setId(Long id) { this.id = id; }

    public String getName() { return name; }
    public void setName(String name) { this.name = name; }

    public String getCharacter() { return character; }
    public void setCharacter(String character) { this.character = character; }

    public Long getMovieId() { return movieId; }
    public void setMovieId(Long movieId) { this.movieId = movieId; }
}

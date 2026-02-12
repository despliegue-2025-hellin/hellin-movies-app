package com.hellin.movies.controller;

import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.hellin.movies.model.Movie;
import com.hellin.movies.repository.MovieRepository;

@RestController
@RequestMapping("/api/movies")
/**
 * Controlador REST que expone los endpoints de películas.
 */
public class MovieController {

    private MovieRepository movieRepository;

    public MovieController(MovieRepository movieRepository) {
        this.movieRepository = movieRepository;
    }

    /**
     * Devuelve el listado completo de películas.
     * @return List<Movie> listado de películas.
     */
    @GetMapping("/list")
    public List<Movie> listAll() {
        return movieRepository.findAll();
    }

}

package com.hellin.actors.controller;

import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.hellin.actors.model.Actor;
import com.hellin.actors.repository.ActorRepository;

@RestController
@RequestMapping("/api/actors")
/**
 * Controlador REST que expone los endpoints de actores.
 */
public class ActorController {

    private ActorRepository actorRepository;

    public ActorController(ActorRepository actorRepository) {
        this.actorRepository = actorRepository;
    }

    /**
     * Devuelve el listado de actores de una película concreta.
     * Si no se proporciona movie, devuelve todos los actores.
     * @param movie ID de la película (opcional).
     * @return List<Actor> listado de actores.
     */
    @GetMapping("/list")
    public List<Actor> listByMovie(@RequestParam(required = false) Long movie) {
        if (movie != null) {
            return actorRepository.findByMovieId(movie);
        }
        return actorRepository.findAll();
    }

}

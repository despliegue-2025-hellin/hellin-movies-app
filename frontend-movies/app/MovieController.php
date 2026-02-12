<?php

require_once __DIR__ . '/MovieApi.php';
require_once __DIR__ . '/ActorApi.php';

class MovieController
{
    private MovieApi $movieApi;
    private ActorApi $actorApi;

    public function __construct(MovieApi $movieApi, ActorApi $actorApi)
    {
        $this->movieApi = $movieApi;
        $this->actorApi = $actorApi;
    }

    /**
     * Muestra el catálogo de películas en formato grid.
     */
    public function listMovies(): void
    {
        $movies = $this->movieApi->getAllMovies();
        include __DIR__ . '/../view/movies_grid.php';
    }

    /**
     * Muestra la ficha de una película con sus actores.
     */
    public function showMovieDetail(int $movieId): void
    {
        $movie  = $this->movieApi->getMovieById($movieId);
        $actors = $this->actorApi->getActorsByMovie($movieId);
        include __DIR__ . '/../view/movie_detail.php';
    }
}

<?php

require_once __DIR__ . '/app/MovieApi.php';
require_once __DIR__ . '/app/ActorApi.php';
require_once __DIR__ . '/app/MovieController.php';

// URLs de las APIs (configurables por variable de entorno)
$moviesUrl = rtrim(getenv("API_MOVIES_URL") ?: "http://localhost:8081/api/movies", "/");
$actorsUrl = rtrim(getenv("API_ACTORS_URL") ?: "http://localhost:8082/api/actors", "/");

$movieApi = new MovieApi($moviesUrl);
$actorApi = new ActorApi($actorsUrl);
$controller = new MovieController($movieApi, $actorApi);

// Routing básico
if (isset($_GET['movie_id'])) {
    $controller->showMovieDetail((int) $_GET['movie_id']);
} else {
    $controller->listMovies();
}

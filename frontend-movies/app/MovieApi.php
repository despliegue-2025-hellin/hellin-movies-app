<?php

class MovieApi
{
    private string $baseUrl;

    /**
     * @param string $baseUrl  Ej: http://localhost:8081/api/movies
     */
    public function __construct(string $baseUrl)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * Devuelve el listado completo de películas.
     * @return array|null
     */
    public function getAllMovies(): ?array
    {
        $url  = $this->baseUrl . '/list';
        $json = @file_get_contents($url);

        if ($json === false) {
            return null;
        }

        return json_decode($json, true);
    }

    /**
     * Devuelve una película por su ID.
     * @return array|null
     */
    public function getMovieById(int $id): ?array
    {
        $url  = $this->baseUrl . '/list';
        $json = @file_get_contents($url);

        if ($json === false) {
            return null;
        }

        $movies = json_decode($json, true);
        if (!is_array($movies)) return null;

        foreach ($movies as $movie) {
            if (isset($movie['id']) && (int)$movie['id'] === $id) {
                return $movie;
            }
        }
        return null;
    }
}

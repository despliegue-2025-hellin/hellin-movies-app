<?php

class ActorApi
{
    private string $baseUrl;

    /**
     * @param string $baseUrl  Ej: http://localhost:8082/api/actors
     */
    public function __construct(string $baseUrl)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * Devuelve los actores de una película concreta.
     * @return array|null
     */
    public function getActorsByMovie(int $movieId): ?array
    {
        $url  = $this->baseUrl . '/list?movie=' . $movieId;
        $json = @file_get_contents($url);

        if ($json === false) {
            return null;
        }

        return json_decode($json, true);
    }
}

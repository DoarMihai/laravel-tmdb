<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Genres extends AbstractApi
{
    public function getGenre($genreId, array $parameters = [], array $headers = [])
    {
        $response = $this->getGenres($parameters, $headers);

        if (null !== $response && array_key_exists('genres', $response)) {
            return $this->extractGenreByIdFromResponse($genreId, $response['genres']);
        }

        return null;
    }

    public function getGenres(array $parameters = [], array $headers = [])
    {
        return array_merge_recursive(
            $this->getMovieGenres($parameters, $headers),
            $this->getTvGenres($parameters, $headers)
        );
    }

    public function getMovieGenres(array $parameters = [], array $headers = []): array
    {
        return $this->get('genre/movie/list', $parameters, $headers);
    }

    public function getTvGenres(array $parameters = [], array $headers = []): array
    {
        return $this->get('genre/tv/list', $parameters, $headers);
    }

    private function extractGenreByIdFromResponse($genreId, array $data = [])
    {
        foreach ($data as $genre) {
            if ($genreId == $genre['id']) {
                return $genre;
            }
        }

        return null;
    }

    public function getMovies($genreId, array $parameters = [], array $headers = []): array
    {
        return $this->get('genre/' . $genreId . '/movies', $parameters, $headers);
    }
}

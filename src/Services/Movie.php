<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Movie extends AbstractApi
{
    public function getMovie($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id, $parameters, $headers);
    }

    public function getAlternativeTitles($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/alternative_titles', $parameters, $headers);
    }

    public function getCredits($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/credits', $parameters, $headers);
    }

    public function getImages($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/images', $parameters, $headers);
    }

    public function getKeywords($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/keywords', $parameters, $headers);
    }

    public function getReleases($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/releases', $parameters, $headers);
    }

    public function getTrailers($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/trailers', $parameters, $headers);
    }

    public function getTranslations($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/translations', $parameters, $headers);
    }

    public function getSimilar($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/similar', $parameters, $headers);
    }

    public function getRecommendations($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/recommendations', $parameters, $headers);
    }

    public function getReviews($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/reviews', $parameters, $headers);
    }

    public function getLists($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/lists', $parameters, $headers);
    }

    public function getChanges($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/changes', $parameters, $headers);
    }

    public function getLatest(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/latest', $parameters, $headers);
    }

    public function getUpcoming(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/upcoming', $parameters, $headers);
    }

    public function getNowPlaying(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/now_playing', $parameters, $headers);
    }

    public function getPopular(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/popular', $parameters, $headers);
    }

    public function getTopRated(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/top_rated', $parameters, $headers);
    }

    public function getVideos($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/videos', $parameters, $headers);
    }

    public function getWatchProviders($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/watch/providers', $parameters, $headers);
    }

    public function getExternalIds($movie_id, array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/' . $movie_id . '/external_ids', $parameters, $headers);
    }
}

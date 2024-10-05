<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Search extends AbstractApi
{
    public const SEARCH_MOVIES = 'search/movie';
    public const SEARCH_COLLECTION = 'search/collection';
    public const SEARCH_TV = 'search/tv';
    public const SEARCH_PERSONS = 'search/person';
    public const SEARCH_COMPANY = 'search/company';
    public const SEARCH_KEYWORD = 'search/keyword';
    public const SEARCH_MULTI = 'search/multi';

    public function searchMovies($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_MOVIES, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchCollection($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_COLLECTION, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchTv($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_TV, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchPersons($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_PERSONS, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchCompany(string $query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_COMPANY, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchKeyword($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_KEYWORD, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }

    public function searchMulti($query, array $parameters = [], array $headers = []): array
    {
        return $this->get(self::SEARCH_MULTI, array_merge($parameters, [
            'query' => $query
        ], $headers));
    }
}

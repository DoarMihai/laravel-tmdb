<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Keyword extends AbstractApi
{
    public function getKeyword(int $keywordId, array $parameters = [], array $headers = []): array
    {
        return $this->get('keyword/' . $keywordId, $parameters, $headers);
    }

    public function getMovies(int $keywordId, array $parameters = [], array $headers = []): array
    {
        return $this->get('keyword/' . $keywordId . '/movies', $parameters, $headers);
    }
}

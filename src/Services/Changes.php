<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Changes extends AbstractApi
{
    public function getMovieChanges(array $parameters = [], array $headers = []): array
    {
        return $this->get('movie/changes', $parameters, $headers);
    }

    public function getPersonChanges(array $parameters = [], array $headers = []): array
    {
        return $this->get('person/changes', $parameters, $headers);
    }

    public function getTvChanges(array $parameters = [], array $headers = []): array
    {
        return $this->get('tv/changes', $parameters, $headers);
    }
}

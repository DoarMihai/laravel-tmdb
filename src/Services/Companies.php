<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Companies extends AbstractApi
{
    public function getCompany(int $companyId, array $parameters = [], array $headers = []): array
    {
        return $this->get('company/' . $companyId, $parameters, $headers);
    }

    public function getMovies(int $companyId, array $parameters = [], array $headers = []): array
    {
        return $this->get('company/' . $companyId . '/movies', $parameters, $headers);
    }
}

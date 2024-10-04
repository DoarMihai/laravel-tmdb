<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Certification extends AbstractApi
{
    /**
     * @param array $parameters
     * @param array $headers
     * @return array
     */
    public function getMovieList(array $parameters = [], array $headers = []): array
    {
        return $this->get('certification/movie/list', $parameters, $headers);
    }

    /**
     * @param array $parameters
     * @param array $headers
     * @return array
     */
    public function getTvList(array $parameters = [], array $headers = []): array
    {
        return $this->get('certification/tv/list', $parameters, $headers);
    }
}

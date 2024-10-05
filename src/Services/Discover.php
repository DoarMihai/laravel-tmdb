<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Discover extends AbstractApi
{
    public function movies(array $parameters = [], array $headers = [])
    {
        $this->get('discover/movie', $parameters, $headers);
    }

    public function tv(array $parameters = [], array $headers = [])
    {
        $this->get('discover/tv', $parameters, $headers);
    }
}

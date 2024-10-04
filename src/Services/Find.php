<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Find extends AbstractApi
{
    public function findBy(string $id, array $parameters = [], array $headers = []): array
    {
        return $this->get('find/' . $id, $parameters, $headers);
    }
}

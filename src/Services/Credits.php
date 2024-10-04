<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Credits extends AbstractApi
{
    public function getCredit($creditId, array $parameters = [], array $headers = []): array
    {
        return $this->get('credit/' . $creditId, $parameters, $headers);
    }
}

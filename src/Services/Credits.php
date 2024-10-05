<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Credits extends AbstractApi
{
    public function getCredit($creditId, array $parameters = [], array $headers = []): array
    {
        return $this->get('credit/' . $creditId, $parameters, $headers);
    }
}

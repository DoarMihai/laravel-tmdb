<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Network extends AbstractApi
{
    public function getNetwork(int $networkId, array $parameters = [], array $headers = []): array
    {
        return $this->get('network/'. $networkId, $parameters, $headers);
    }
}

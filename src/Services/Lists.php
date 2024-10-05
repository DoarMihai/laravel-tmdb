<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Lists extends AbstractApi
{
    public function getList(int $listId, array $parameters = [], array $headers = []): array
    {
        return $this->get('list/' . $listId, $parameters, $headers);
    }
}

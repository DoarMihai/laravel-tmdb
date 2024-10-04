<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Jobs extends AbstractApi
{
    public function getJobs(array $parameters = [], array $headers = []): array
    {
        return $this->get('job/list', $parameters, $headers);
    }
}

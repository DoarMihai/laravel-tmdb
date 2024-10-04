<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Collections extends AbstractApi
{
    public function getCollection(int $collectionId, array $parameters = [], array $headers = []): array
    {
        return $this->get('collection/' . $collectionId, $parameters, $headers);
    }

    public function getImages(int $collectionId, array $parameters = [], array $headers = []): array
    {
        return $this->get('collection/' . $collectionId . '/images', $parameters, $headers);
    }

    public function getTranslations(int $collectionId, array $parameters = [], array $headers = []): array
    {
        return $this->get('collection/' . $collectionId . '/translations', $parameters, $headers);
    }
}

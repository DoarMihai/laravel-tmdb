<?php

namespace MihaiStefanescu\TmdbApi\Services;

class People extends AbstractApi
{
    public const PERSON_URI = 'person/%s';
    public const COMBINED_CREDITS_URI = 'person/%s/combined_credits';
    public const MOVIE_CREDITS_URI = 'person/%s/movie_credits';
    public const TV_CREDITS_URI = 'person/%s/tv_credits';
    public const IMAGES_URI = 'person/%s/images';
    public const CHANGES_URI = 'person/%s/changes';
    public const EXTERNAL_IDS_URI = 'person/%s/external_ids';
    public const TAGGED_IMAGES_URI = 'person/%s/tagged_images';
    public const POPULAR_URI = 'person/popular';
    public const LATEST_URI = 'person/latest';

    public function getPerson(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::PERSON_URI, $personId), $parameters, $headers);
    }

    public function getCombinedCredits(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::COMBINED_CREDITS_URI, $personId), $parameters, $headers);
    }

    public function getMovieCredits(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::MOVIE_CREDITS_URI, $personId), $parameters, $headers);
    }

    public function getTvCredits(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::TV_CREDITS_URI, $personId), $parameters, $headers);
    }

    public function getImages(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::IMAGES_URI, $personId), $parameters, $headers);
    }

    public function getChanges(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CHANGES_URI, $personId), $parameters, $headers);
    }

    public function getExternalIds(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::EXTERNAL_IDS_URI, $personId), $parameters, $headers);
    }

    public function getTaggedImages(int $personId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::TAGGED_IMAGES_URI, $personId), $parameters, $headers);
    }

    public function getPopular(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::POPULAR_URI, $parameters, $headers);
    }

    public function getLatest(): array
    {
        return $this->get(self::LATEST_URI);
    }
}

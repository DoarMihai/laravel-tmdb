<?php

namespace MihaiStefanescu\TmdbApi\Services;

class TvSeason extends AbstractApi
{
    public const TV_SEASON_URI = 'tv/%s/season/%s';
    public const CREDITS_URI = 'tv/%s/season/%s/credits';
    public const EXTERNAL_IDS_URI = 'tv/%s/season/%s/external_ids';
    public const IMAGES_URI = 'tv/%s/season/%s/images';
    public const VIDEOS_URI = 'tv/%s/season/%s/videos';
    public const CHANGES_URI = 'tv/%s/season/%s/changes';

    public function getSeason(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::TV_SEASON_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }

    public function getCredits(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CREDITS_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }

    public function getExternalIds(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::EXTERNAL_IDS_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }

    public function getImages(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::IMAGES_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }

    public function getVideos(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::VIDEOS_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }

    public function getChanges(int $tvShowId, $seasonNumber, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CHANGES_URI, $tvShowId, $seasonNumber), $parameters, $headers);
    }
}

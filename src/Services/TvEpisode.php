<?php

namespace MihaiStefanescu\TmdbApi\Services;

class TvEpisode extends AbstractApi
{
    public const EPISODE_URI = 'tv/%s/season/%s/episode/%s';
    public const CREDITS_URI = 'tv/%s/season/%s/episode/%s/credits';
    public const EXTERNAL_IDS_URI = 'tv/%s/season/%s/episode/%s/external_ids';
    public const IMAGES_URI = 'tv/%s/season/%s/episode/%s/images';
    public const TRANSLATIONS_URI = 'tv/%s/season/%s/episode/%s/translations';
    public const VIDEOS_URI = 'tv/%s/season/%s/episode/%s/videos';
    public const CHANGES_URI = 'tv/%s/season/%s/episode/%s/changes';

    public function getEpisode(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::EPISODE_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getCredits(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::CREDITS_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getExternalIds(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::EXTERNAL_IDS_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getImages(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::IMAGES_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getTranslations(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::TRANSLATIONS_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getVideos(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::VIDEOS_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }

    public function getChanges(
        int $tvShowId,
        int $seasonNumber,
        int $episodeNumber,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::CHANGES_URI,
                $tvShowId,
                $seasonNumber,
                $episodeNumber
            ),
            $parameters,
            $headers
        );
    }
}

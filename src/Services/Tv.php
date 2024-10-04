<?php

namespace MihaiStefanescu\TmdbApi\Services;

class Tv extends AbstractApi
{
    public const TV_SHOW_URI = 'tv/%s';
    public const CREDITS_URI = 'tv/%s/credits';
    public const CONTENT_RATINGS_URI = 'tv/%s/content_ratings';
    public const EXTERNAL_IDS_URI = 'tv/%s/external_ids';
    public const IMAGES_URI = 'tv/%s/images';
    public const TRANSLATIONS_URI = 'tv/%s/translations';
    public const VIDEOS_URI = 'tv/%s/videos';
    public const WATCH_PROVIDERS_URI = 'tv/%s/watch/providers';
    public const CHANGES_URI = 'tv/%s/changes';
    public const KEYWORDS_URI = 'tv/%s/keywords';
    public const SIMILAR_URI = 'tv/%s/similar';
    public const RECOMMENDATIONS_URI = 'tv/%s/recommendations';
    public const ALTERNATIVE_TITLES_URI = 'tv/%s/alternative_titles';
    public const EPISODE_GROUPS_URI = 'tv/%s/episode_groups';
    public const POPULAR_URI = 'tv/popular';
    public const TOP_RATED_URI = 'tv/top_rated';
    public const ON_THE_AIR_URI = 'tv/on_the_air';
    public const AIRING_TODAY_URI = 'tv/airing_today';
    public const LATEST_URI = 'tv/latest';

    public function getTvshow(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::TV_SHOW_URI, $tvShowId), $parameters, $headers);
    }

    public function getCredits(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CREDITS_URI, $tvShowId), $parameters, $headers);
    }

    public function getContentRatings(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CONTENT_RATINGS_URI, $tvShowId), $parameters, $headers);
    }

    public function getExternalIds(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::EXTERNAL_IDS_URI, $tvShowId), $parameters, $headers);
    }

    public function getImages(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::IMAGES_URI, $tvShowId), $parameters, $headers);
    }

    public function getPopular(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::POPULAR_URI, $parameters, $headers);
    }

    public function getTopRated(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::TOP_RATED_URI, $parameters, $headers);
    }

    public function getTranslations(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::TRANSLATIONS_URI, $tvShowId), $parameters, $headers);
    }

    public function getOnTheAir(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::ON_THE_AIR_URI, $parameters, $headers);
    }

    public function getAiringToday(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::AIRING_TODAY_URI, $parameters, $headers);
    }

    public function getVideos(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::VIDEOS_URI, $tvShowId), $parameters, $headers);
    }

    public function getWatchProviders(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::WATCH_PROVIDERS_URI, $tvShowId), $parameters, $headers);
    }

    public function getChanges(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::CHANGES_URI, $tvShowId), $parameters, $headers);
    }

    public function getLatest(array $parameters = [], array $headers = []): array
    {
        return $this->get(self::LATEST_URI, $parameters, $headers);
    }

    public function getKeywords(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::KEYWORDS_URI, $tvShowId), $parameters, $headers);
    }

    public function getSimilar(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::SIMILAR_URI, $tvShowId), $parameters, $headers);
    }

    public function getRecommendations(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::RECOMMENDATIONS_URI, $tvShowId), $parameters, $headers);
    }

    public function getAlternativeTitles(int $tvShowId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::ALTERNATIVE_TITLES_URI, $tvShowId), $parameters, $headers);
    }
    public function getEpisodeGroups($tvShowId): array
    {
        return $this->get(sprintf(self::EPISODE_GROUPS_URI, $tvShowId));
    }
}

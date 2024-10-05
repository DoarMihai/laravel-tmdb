<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class TvEpisodeGroup extends AbstractApi
{
    public const EPISODE_GROUP_URI = 'tv/episode_group/%s';

    public function getEpisodeGroup(
        int $episodeGroup,
        array $parameters = [],
        array $headers = []
    ): array
    {
        return $this->get(
            sprintf(
                self::EPISODE_GROUP_URI,
                $episodeGroup
            ),
            $parameters,
            $headers
        );
    }
}

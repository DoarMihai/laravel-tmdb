<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class TvEpisodeGroup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\TmdbApi\Services\TvEpisodeGroup::class;
    }
}

<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class TvEpisodeGroup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\LaravelTmdb\Services\TvEpisodeGroup::class;
    }
}

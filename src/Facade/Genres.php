<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class Genres extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\TmdbApi\Services\Genres::class;
    }
}

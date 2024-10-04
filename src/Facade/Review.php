<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class Review extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\TmdbApi\Services\Review::class;
    }
}

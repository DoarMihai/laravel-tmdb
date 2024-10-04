<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class Find extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\TmdbApi\Services\Find::class;
    }
}

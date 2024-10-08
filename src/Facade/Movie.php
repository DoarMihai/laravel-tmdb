<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class Movie extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\LaravelTmdb\Services\Movie::class;
    }
}

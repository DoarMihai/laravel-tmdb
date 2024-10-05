<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class Find extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\LaravelTmdb\Services\Find::class;
    }
}

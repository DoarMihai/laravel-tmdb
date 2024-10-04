<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class Certification extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MihaiStefanescu\TmdbApi\Services\Certification::class;
    }
}

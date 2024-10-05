<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class Certification extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MihaiStefanescu\LaravelTmdb\Services\Certification::class;
    }
}

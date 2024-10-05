<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class Keyword extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\LaravelTmdb\Services\Keyword::class;
    }
}

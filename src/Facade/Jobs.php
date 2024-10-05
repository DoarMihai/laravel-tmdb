<?php

namespace MihaiStefanescu\LaravelTmdb\Facade;

use Illuminate\Support\Facades\Facade;

class Jobs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\LaravelTmdb\Services\Jobs::class;
    }
}

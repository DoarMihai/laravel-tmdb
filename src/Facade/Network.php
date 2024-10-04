<?php

namespace MihaiStefanescu\TmdbApi\Facade;

use Illuminate\Support\Facades\Facade;

class Network extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MihaiStefanescu\TmdbApi\Services\Network::class;
    }
}

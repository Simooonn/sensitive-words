<?php

namespace HashyooWordsSafe\Facade;

use Illuminate\Support\Facades\Facade;

class WordsSafe extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'WordsSafe';
    }
}
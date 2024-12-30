<?php

namespace Strapony;

use Illuminate\Support\Facades\Facade;

class Strapony extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'strapony';
    }

}

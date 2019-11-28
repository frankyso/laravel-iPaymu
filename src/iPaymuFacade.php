<?php

namespace frankyso\iPaymu\Laravel;

use Illuminate\Support\Facades\Facade;

class iPaymuFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iPaymu';
    }
}

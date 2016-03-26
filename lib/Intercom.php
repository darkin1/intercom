<?php

namespace App\Custom\Intercom;


use Illuminate\Support\Facades\Facade;

class Intercom extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'intercom';
    }
}
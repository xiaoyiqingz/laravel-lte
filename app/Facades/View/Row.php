<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class Row extends Facade
{
    public static function getFacadeAccessor()
    {
        return new \App\Libraries\View\Row;
    }
}

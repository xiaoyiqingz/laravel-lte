<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class Row extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Libraries\View\Row::class;
    }
}

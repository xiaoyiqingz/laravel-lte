<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class Column extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Libraries\View\Column::class;
    }
}

<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class ViewMenu extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Libraries\ViewMenu::class;
    }
}

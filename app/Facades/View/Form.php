<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class Form extends Facade
{
    public static function getFacadeAccessor()
    {
        return new \App\Libraries\View\Form;
    }
}

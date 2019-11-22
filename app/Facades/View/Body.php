<?php

namespace App\Facades\View;

use Illuminate\Support\Facades\Facade;

class Body extends Facade
{
    public static function getFacadeAccessor()
    {
        //return \App\Libraries\View\Body::class;
        // see AppServiceProvider
        return 'body';
    }
}

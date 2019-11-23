<?php

namespace App\Contracts;

interface JsExtender
{
    public function extendjs(string $data);

    public function getJsData();
}

<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;
use App\Contracts\JsExtender;

class Column implements Renderable
{
    public $columns = [];

    public $jsdata = [];

    public function append($item)
    {
        if ($item instanceof Renderable) {
            $content = $item->render();
        } else {
            $content = $item;
        }

        $this->columns[] = ['content' => $content];

        if ($item instanceof JsExtender) {
            $this->jsdata = array_merge($this->jsdata, $item->getJsData());
        }

        return $this;
    }

    public function getJsData()
    {
        return $this->jsdata;
    }

    public function render()
    {
        return $this->columns;
    }
}

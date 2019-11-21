<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Column implements Renderable
{
    public $columns = [];

    public function append($item)
    {
        if ($item instanceof Renderable) {
            $content = $item->render();
        } else {
            $content = $item;
        }

        $this->columns[] = ['content' => $content];

        return $this;
    }

    public function render()
    {
        return $this->columns;
    }
}

<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;
use App\Contracts\JsExtender;

class Row implements Renderable
{
    public $columns = [];
    public $jsdata = [];

    public function column($colWidth, $column)
    {
        $this->columns[] = ['colWidth' => $colWidth, 'column' => $column->render()];

        $this->jsdata = array_merge($this->jsdata, $column->getJsData());

        return $this;
    }

    public function getJsData()
    {
        return $this->jsdata;
    }

    public function render()
    {
        $datas = [
            'columns' => $this->columns,
        ];
        return view('component.row', $datas);
    }
}

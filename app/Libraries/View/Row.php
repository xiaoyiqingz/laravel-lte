<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Row implements Renderable
{
    public $columns = [];

    public function column($colWidth, $column)
    {
        $this->columns[] = ['colWidth' => $colWidth, 'column' => $column->render()];

        return $this;
    }

    public function render()
    {
        $datas = [
            'columns' => $this->columns,
        ];
        return view('component.row', $datas);
    }
}

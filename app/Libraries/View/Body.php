<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Body implements Renderable
{
    public $title = 'default title';

    public $subTitle = 'default SubTitle';

    public $body = [];

    public function body()
    {
        $this->body[] = $body;

        return $this;
    }

    public function render()
    {
        $datas = [
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'content' => view('table.table'),
        ];

        return view('component.body', $datas);
    }
}

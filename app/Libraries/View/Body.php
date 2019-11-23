<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Body implements Renderable
{
    public $title = 'default title';

    public $subTitle = 'default SubTitle';

    public $body = [];

    public $jsdata = [];

    public function row($row)
    {
        $this->body[] = $row->render();

        $this->jsdata = array_merge($this->jsdata, $row->getJsData());

        return $this;
    }

    public function body($body)
    {
        $this->body = $body;

        return $this;
    }

    public function render()
    {
        $datas = [
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'content' => $this->body,
            'jsdata' => $this->jsdata,
        ];

        return view('component.body', $datas);
    }
}

<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Table implements Renderable
{
    public $id = 'table-id';

    public $title = '';

    public $tableStyle = 'table-striped';

    public $header = [];

    public $body = [];

    public $footer = [];

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function setFooter($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    public function render()
    {
        $datas = [
            'table' => [
                'id' => $this->id,
                'title' => $this->title,
                'style' => $this->tableStyle,
                'header' => $this->header,
                'body' => $this->body,
                'footer' => $this->footer,
            ],
        ];

        return view('component.table', $datas);
    }
}

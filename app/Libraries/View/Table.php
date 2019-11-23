<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;
use App\Contracts\JsExtender;

class Table implements Renderable, JsExtender
{
    public $id = 'table-id';

    public $title = '';

    public $tableStyle = 'table-striped';

    public $header = [];

    public $body = [];

    public $footer = [];

    public $jsdata = [];

    public $paginate = true;

    public function __construct()
    {
        $this->id = 'table-id' . rand(0, 100);
        $this->paginate = true;
    }

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

    public function paginate(bool $enable)
    {
        $this->paginate = $enable;
    }

    public function extendjs(string $data)
    {
        $this->jsdata[] = $js;
    }

    public function getJsData()
    {
        if (!isset($this->jsdata['table_paginate']) && $this->paginate) {
            $data = [
                'table' => ['id' => $this->id],
            ];
            $this->jsdata['table_paginate'] = view('componentjs.table-pagination-js', $data);
        }

        return array_values($this->jsdata);
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

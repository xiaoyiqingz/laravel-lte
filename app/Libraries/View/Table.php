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

    public $paginate = [];

    public function __construct()
    {
        $this->id = 'table-id' . rand(0, 100);

        $this->paginate = [
            'table' => ['id' => $this->id],
            'enable' => true,
            'paging'      => true,
            'lengthChange'=> false,
            'searching'   => false,
            'ordering'    => false,
            'info'        => false,
            'autoWidth'   => false,
        ];
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

    public function paginate(bool $enable = true, $paging = true, $ordering = false, $searching = false)
    {
        $this->paginate['enable'] = $enable;
        $this->paginate['paging'] = $paging;
        $this->paginate['ordering'] = $ordering;
        $this->paginate['searching'] = $searching;

        return $this;
    }

    public function setPaginate($key, $val)
    {
        $this->paginate[$key] = $val;

        return $this;
    }

    public function extendjs(string $data)
    {
        $this->jsdata[] = $js;
    }

    public function getJsData()
    {
        if (!isset($this->jsdata['table_paginate']) && $this->paginate['enable']) {
            $this->jsdata['table_paginate'] = view('componentjs.table-pagination-js', $this->paginate);
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

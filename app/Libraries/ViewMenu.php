<?php

namespace App\Libraries;

class ViewMenu
{
    public function lists()
    {
        $tableChildren = [
            ['icon' => 'fa fa-table', 'title' => '普通图表', 'url' => 'http://127.0.0.1:8092/table/table'],
            ['icon' => 'fa fa-table', 'title' => '数据图表', 'url' => 'http://127.0.0.1:8092/table/data'],
        ];

        $item = [
            ['icon' => 'fa fa-area-chart', 'title' => '图表', 'url' => 'chart'],
            ['icon' => 'fa fa-table', 'title' => '表格', 'url' => '', 'children' => $tableChildren],
        ];

        return $item;
    }
}

<?php

namespace App\Libraries;

class ViewMenu
{
    public function lists()
    {
        $tableChildren = [
            ['icon' => 'fa fa-table', 'title' => '普通图表', 'url' => 'table/table'],
            ['icon' => 'fa fa-table', 'title' => '数据图表', 'url' => 'table/data'],
            ['icon' => 'fa fa-table', 'title' => '自定义图表', 'url' => 'table/new'],
        ];

        $item = [
            ['icon' => 'fa fa-area-chart', 'title' => '图表', 'url' => 'chart'],
            ['icon' => 'fa fa-table', 'title' => '表格', 'url' => '', 'children' => $tableChildren],
            ['icon' => 'fa fa-table', 'title' => '继承', 'url' => 'body'],
        ];

        return $item;
    }
}

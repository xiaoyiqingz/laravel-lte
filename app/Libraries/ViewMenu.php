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

        $formChildren = [
            ['icon' => 'fa fa-circle-o', 'title' => '常规元素', 'url' => 'form/general'],
            ['icon' => 'fa fa-circle-o', 'title' => '高级元素', 'url' => 'table/data'],
            ['icon' => 'fa fa-circle-o', 'title' => '编辑', 'url' => 'table/new'],
        ];

        $item = [
            ['icon' => 'fa fa-area-chart', 'title' => '图表', 'url' => 'chart'],
            ['icon' => 'fa fa-table', 'title' => '表格', 'url' => '', 'children' => $tableChildren],
            ['icon' => 'fa fa-pencil-square-o', 'title' => '表单', 'url' => '', 'children' => $formChildren],
            ['icon' => 'fa fa-table', 'title' => '测试', 'url' => 'body'],
        ];

        return $item;
    }
}

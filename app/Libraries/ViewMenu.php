<?php

namespace App\Libraries;

class ViewMenu
{
    public function lists()
    {
        $item = [
            ['icon' => 'fa fa-area-chart', 'title' => '图表', 'url' => 'chart'],
            ['icon' => 'fa fa-table', 'title' => '表格', 'url' => 'table'],
        ];

        return $item;
    }
}

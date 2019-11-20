<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableOri()
    {
        return view('table.table-ori');
    }

    public function table()
    {
        return view('table.table');
    }

    public function dataTableOri()
    {
        return view ('table.data-table-ori');
    }

    public function dataTable()
    {

        $table = [
            'id' => 'table1',
            'style' => 'table-hover',
            'header' => ['col1', 'col2', 'col3'],
            'body' => [
                ['r11', 'r12', 'r13'],
                ['r21', 'r22', 'r23'],
                ['r31', 'r32', 'r33'],
                ['r41', 'r42', 'r43'],
                ['r51', 'r52', 'r53'],
                ['r61', 'r62', 'r63'],
                ['r71', 'r72', 'r73'],
            ],
        ];

        $datas = [
            'table' => $table,
        ];

        return view('table.data-table', $datas);
    }
}

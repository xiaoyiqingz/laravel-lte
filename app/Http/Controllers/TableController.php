<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Facades\View\Column;
use App\Facades\View\Body;
use App\Facades\View\Row;
use App\Facades\View\Table;

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

    public function newTable(Request $request)
    {
        $header1 = ['col1', 'col2', 'col3'];

        $table1 = Table::setHeader($header1)
            ->setTitle('Table-blade1')
            ->setDataUrl(url('data/table1'))
            ->paginateOrderable();

        $header2 = ['col1', 'col2', 'col3', 'col4', 'clo5', 'col6'];

        $table2 = Table::setHeader($header2)
            ->setDataUrl(url('data/table2'));

        $row1 = Row::column(6, Column::append($table1));

        $row2 = Row::column(12, Column::append($table2));

        return Body::row($row1)->row($row2)->render();
    }

    public function data1(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');

        //  获取排序信息
        $orders = $request->get('order', []);
        $orderInfo = [];
        foreach ($orders as $order) {
            $orderInfo[] = ['key' => $order['column'], 'sort' => $order['dir']];
        }

        $body1 = [];
        for ($j = 1; $j <= $length; $j++) {
            $tmp = [];
            for ($i = 1; $i <= 3; $i++) {
                $tmp[] = 'r' . ($start  + $j) . $i;
            }

            $body1[] = $tmp;
        }

        if (!empty($orderInfo)) {
            $ordering = current($orderInfo);

            usort($body1, function ($a, $b) use ($ordering) {
                $aKey = $a[$ordering['key']];
                $bKey = $b[$ordering['key']];

                $cmp = strcmp($aKey, $bKey);

                if ($ordering['sort'] == 'desc') {
                    $cmp = $cmp * -1;
                }

                return $cmp;
            });
        }

        $result = [
            'draw' => intval($draw),
            'recordsTotal' => 89,
            'recordsFiltered' => 89,
            'data' => $body1,
        ];

        return  json_encode($result);
    }

    public function data2(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');

        $body1 = [];
        for ($j = 1; $j <= $length; $j++) {
            $tmp = [];
            for ($i = 1; $i <= 6; $i++) {
                $tmp[] = 'r' . ($start  + $j) . $i;
            }

            $body1[] = $tmp;
        }

        $result = [
            'draw' => intval($draw),
            'recordsTotal' => 89,
            'recordsFiltered' => 89,
            'data' => $body1,
        ];

        return  json_encode($result);
    }
}

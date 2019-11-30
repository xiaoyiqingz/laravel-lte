<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Facades\View\Column;
use App\Facades\View\Body;
use App\Facades\View\Row;
use App\Facades\View\Table;

class BodyController extends Controller
{
    public function index(Request $request)
    {
        $item1 = "<div><span> item1 </span></div>";
        $item2 = "<div><span> item2 </span></div>";
        $item3 = "<div><span> item3 </span></div>";
        $column = Column::append($item1)
            ->append($item2)
            ->append($item3);

        $header1 = ['col1', 'col2', 'col3'];
        $body1 = [
            ['r11', 'r12', 'r13'],
            ['r21', 'r22', 'r23'],
            ['r31', 'r32', 'r33'],
            ['r41', 'r42', 'r43'],
            ['r51', 'r52', 'r53'],
            ['r61', 'r62', 'r63'],
            ['r71', 'r72', 'r73'],
        ];

        $table1 = Table::setHeader($header1)
            //->setBody($body1)
            ->setTitle('Table-blade1')
            ->setDataUrl('')
            ->paginateOrderable();

        $header2 = ['col1', 'col2', 'col3', 'col4', 'clo5', 'col6'];
        $body2 = [
            ['r11', 'r12', 'r13', 'r14', 'r15', 'r16'],
            ['r21', 'r22', 'r23', 'r24', 'r25', 'r26'],
            ['r31', 'r32', 'r33', 'r34', 'r35', 'r36'],
            ['r41', 'r42', 'r43', 'r44', 'r45', 'r46'],
            ['r51', 'r52', 'r53', 'r54', 'r55', 'r56'],
            ['r61', 'r62', 'r63', 'r64', 'r65', 'r66'],
            ['r71', 'r72', 'r73', 'r74', 'r75', 'r76'],
        ];

        $table2 = Table::setHeader($header2);
            //->setBody($body2)

        $row1 = Row::column(6, Column::append($table1))
            ->column(6, $column);

        $row2 = Row::column(12, Column::append($table2));

        return Body::row($row1)->row($row2)->render();
    }

    public function data(Request $request)
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

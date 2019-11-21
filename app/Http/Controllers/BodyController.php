<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Facades\View\Body;
use App\Facades\View\Row;
use App\Facades\View\Column;

class BodyController extends Controller
{
    public function index()
    {
        $item1 = "<div><span> item1 </span></div>";
        $item2 = "<div><span> item2 </span></div>";
        $item3 = "<div><span> item3 </span></div>";
        $column1 = Column::append($item1)
            ->append($item2)
            ->append($item3);

        $item4 = "<div><span> item3 </span></div>";
        $item5 = "<div><span> item4 </span></div>";
        $item6 = "<div><span> item5 </span></div>";
        $column2 = Column::append($item4)
            ->append($item5)
            ->append($item6);

        $item7 = "<div><span> item7 </span></div>";
        $item8 = "<div><span> item8 </span></div>";
        $item9 = "<div><span> item9 </span></div>";
        $column3 = Column::append($item7)
            ->append($item8)
            ->append($item9);

        $row1 = Row::column(6, $column1)
            ->column(6, $column2);

        $row2 = Row::column(12, $column3);

        return Body::row($row1)->row($row2)->render();
    }
}

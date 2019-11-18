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
        return view('table.data-table');
    }
}

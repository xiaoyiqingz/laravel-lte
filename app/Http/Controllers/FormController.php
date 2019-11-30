<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function general(Request $request)
    {
        return view('form.general');
    }

    public function advanced(Request $request)
    {
        return view('form.advanced');
    }

    public function editor(Request $request)
    {
        return view('form.editors');
    }
}

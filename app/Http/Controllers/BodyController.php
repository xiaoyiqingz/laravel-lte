<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Facades\View\Body;

class BodyController extends Controller
{
    public function index()
    {
        return Body::render();
    }
}

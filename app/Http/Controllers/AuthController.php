<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //dd($request->all());

        return redirect('/admin');
    }

    public function getLogout(Request $request)
    {
        Auth::logout();

        return redirect('login');
    }
}

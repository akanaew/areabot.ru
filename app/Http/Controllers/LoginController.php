<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function IndexAction(Request $request)
    {
        return view('pages.login');
    }
}

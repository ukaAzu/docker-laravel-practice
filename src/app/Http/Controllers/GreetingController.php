<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
    {
        return view('greeting.index');
    }

    public function welcome(Request $request)
    {
        $username = $request->input('username');
        return view('greeting.welcome',['username' => $username]);
    }
}

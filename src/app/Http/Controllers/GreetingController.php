<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GreetingRequest;

class GreetingController extends Controller
{
    public function index()
    {
        return view('greeting.index');
    }

    public function welcome(GreetingRequest $request)
    {
        // $rule = [
        //     'username' => 'required|max:20'
        // ];
        // $request->validate($rule);

        $username = $request->input('username');
        return view('greeting.welcome',['username' => $username]);
    }
}

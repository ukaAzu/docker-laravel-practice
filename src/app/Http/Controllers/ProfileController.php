<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function confirm(ProfileRequest $request)
    {
        $data = $request->all();
    }
}

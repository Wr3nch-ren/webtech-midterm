<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function activities()
    {
        return view('user.activities');
    }

    public function certificates()
    {
        return view('user.certificates');
    }
}

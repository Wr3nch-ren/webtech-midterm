<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function participatingEvents()
    {
        return view('user.events');
    }

    public function certificates()
    {
        return view('user.certificates');
    }

    public function editProfile()
    {
        return view('user.edit-profile');
    }

    public function notification()
    {
        return view('user.notification');
    }

    public function organize()
    {
        return view('user.organize');
    }
}

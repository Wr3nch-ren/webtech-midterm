<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizeController extends Controller
{
    public function __construct()
    {
        // $this-> middleware('auth')->only(['index', 'store']);
        $this->middleware('auth');
    }

    public function home()
    {
        return view('organize.index');
    }
    public function dashboard()
    {
        return view('organize.dashboard');
    }
    public function tasks()
    {
        return view('organize.tasks');
    }
    public function info()
    {
        return view('organize.info');
    }
    public function create()
    {

        return view('organize.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        return view('activities.index');
    }

    public function showDetail() {
        return view('activities.detail');
    }
}

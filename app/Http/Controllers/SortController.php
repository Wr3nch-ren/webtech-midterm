<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function volunteers()
    {
        $events = Activity::get()->where('activity_type', 'อาสา');
        return view('activities.index', ['events' => $events]);
    }
    public function technical()
    {
        $events = Activity::get()->where('activity_type', 'วชาการ');
        return view('activities.index', ['events' => $events]);
    }
    public function recreations()
    {
        $events = Activity::get()->where('activity_type', 'สันทนาการ');
        return view('activities.index', ['events' => $events]);
    }
}

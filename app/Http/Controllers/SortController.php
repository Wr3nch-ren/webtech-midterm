<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function volunteers()
    {
        $events_verify = Activity::where('verify', 1)->get();
        $events = $events_verify->where('activity_type', 'อาสา');
        return view('activities.index', ['events' => $events]);
    }
    public function technical()
    {
        $events_verify = Activity::where('verify', 1)->get();
        $events = $events_verify->where('activity_type', 'วิชาการ');
        return view('activities.index', ['events' => $events]);
    }
    public function recreations()
    {
        $events_verify = Activity::where('verify', 1)->get();
        $events = $events_verify->where('activity_type', 'สันทนาการ');
        return view('activities.index', ['events' => $events]);
    }
}

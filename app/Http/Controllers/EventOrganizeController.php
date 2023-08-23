<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Registry;
use App\Models\Enum\RoleAccessibility;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class EventOrganizeController extends Controller
{
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

    public function store(Request $request)
    {
        $activity = new Activity();

        $image = $request->file('poster');
        $file_name = now()->getTimestamp() . "." . $image->getClientOriginalExtension();
        $file_path = 'storage/' . $file_name;
        $image->storeAs('public/' . $file_name);

        $activity->activity_name = $request->activity_name;
        $activity->deadline = $request->deadline;
        $activity->activity_type = $request->activity_type;
        $activity->activity_category = $request->activity_category;
        $activity->activity_start = $request->activity_start;
        $activity->activity_end = $request->activity_end;
        $activity->participant_number = $request->participant_number;
        $activity->activity_fee = $request->activity_fee;
        $activity->organizer_id = Auth::user()->id;
        $activity->organizer_name = $request->organizer_name;
        $activity->activity_place = $request->activity_place;
        $activity->description = $request->description;
        $activity->contact = $request->contact;
        $activity->poster_path = $file_path;

        $activity->save();

        return redirect()->route('organize.home', ['event' => $activity]);
    }
}

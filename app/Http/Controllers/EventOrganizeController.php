<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventOrganizeController extends Controller
{
    public function __construct()
    {
        // $this-> middleware('auth')->only(['index', 'store']);
        $this->middleware('auth');
    }

    public function home(Activity $event)
    {
        return view('organize.index', ['event' => $event]);
    }
    public function dashboard()
    {
        return view('organize.dashboard');
    }
    public function tasks()
    {
        return view('organize.tasks');
    }
    public function info(Activity $event)
    {
        return view('organize.info', ['event' => $event]);
    }
    public function create()
    {
        return view('organize.create');
    }

    public function store(Request $request) {
        $activity = new Activity();

        $image = $request->file('poster');
        $file_name = now()->getTimestamp() . "." . $image->getClientOriginalExtension();
        $file_path = 'storage/'. $file_name;
        $image->storeAs('public/'. $file_name);

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

    public function destroy(Activity $event) {
        $event->delete();
        $events = Activity::get()->where('organizer_id', Auth::user()->id);
                return redirect()->route('user.organize', ['events' => $events]);
    }
}
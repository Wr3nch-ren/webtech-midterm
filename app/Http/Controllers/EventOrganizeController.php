<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Enum\RoleAccessibility;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
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
        $team = Team::get()->where('activity_id', $event->id)->first();
        $team_members = TeamMember::get()->where('team_id', $team->id);
        $user = array();

        foreach($team_members as $member){
            array_push($user,User::get()->where('id',$member->user_id)->first());
        }

        return view('organize.info', ['event' => $event, 'team' => $user, 'team_member' => $team_members]);
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

        $team = new Team();
        $team->activity_id = $activity->id;
        $team->name_activity_team = $activity->activity_name;
        $team->organizer_id = Auth::user()->id;
        $team->save();

        $user = Auth::user();
        $user->role = RoleAccessibility::HOST;
        $user->save();

        return redirect()->route('organize.home', ['event' => $activity]);
    }

    public function destroy(Activity $event) {
        $event->delete();
        $events = Activity::get()->where('organizer_id', Auth::user()->id);
                return redirect()->route('user.organize', ['events' => $events]);
    }

    public function addUser(Request $request, Activity $event) {
        $user = User::get()->where('user_email', $request->email)->first();
        $user->role = RoleAccessibility::ORGANIZER;
        $team = Team::get()->where('activity_id', $event->id)->first();
        $team_member = new TeamMember();
        $team_member->team_id = $team->id;
        $team_member->user_id = $user->id;
        $team_member->role_in_team = $request->role;
        $team_member->save();
        
        return redirect()->route('organize.info', ['event' => $event]);
    }
}
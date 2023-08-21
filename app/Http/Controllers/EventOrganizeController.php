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
    public function __construct()
    {
        // $this-> middleware('auth')->only(['index', 'store']);
        $this->middleware('auth');
    }

    public function home(Activity $event)
    {
        // Gate::authorize('viewAny', Activity::class); //ไม่ใช่ organizer ไม่ให้เข้า

        return view('organize.index', ['event' => $event]);
    }
    public function dashboard()
    {
        $user = Auth::user();
        // $events = $user->Activities->where('is_organizer', true);
        $event = Activity::whereHas('users', function ($query) use ($user) {
            $query->where('is_organizer', true);
        })->first();        //หา activity ที่ คนนี้จัดการอยู่

        $team = $user->Team;    // team ที่คนนี้ดูแล

        $registries = $team->registries();
        // $registry = Registry::whereHas('team', function ($query) use ($team){});

        $users_registered_ids = $registries->pluck('user_id')->where('status', 'REGISTERED');
        $users_confirm_ids = $registries->pluck('user_id')->where('status', 'CONFIRM');
        $users_decline_ids = $registries->pluck('user_id')->where('status', 'DECLINE');

        // $users_registered_ids = DB::table('registries')->pluck('user_id')->where('status', 'REGISTERED');
        // $users_confirm_ids = DB::table('registries')->pluck('user_id')->where('status', 'CONFIRM');
        // $users_decline_ids = DB::table('registries')->pluck('user_id')->where('status', 'DECLINE');

        $users_registereds = User::whereIn('id', $users_registered_ids)->get();
        $users_confirms = User::whereIn('id', $users_confirm_ids)->get();
        $users_declines = User::whereIn('id', $users_decline_ids)->get();


        return view('organize.dashboard', [
            // 'event' => $event,
            // 'team' => $team,
            // 'registry' => $registry,
            'users_registereds' => $users_registereds,
            'users_confirms' => $users_confirms,
            'users_declines' => $users_declines
        ]);
    }
    public function tasks()
    {
        // Gate::authorize('viewAny', Activity::class); //ไม่ใช่ organizer ไม่ให้เข้า

        return view('organize.tasks');
    }
    public function info(Activity $event)
    {
        // Gate::authorize('viewAny', Activity::class); //ไม่ใช่ organizer ไม่ให้เข้า

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
        // Gate::authorize('delete', Auth::user(), $event); //ไม่ใช่ organizer ไม่ให้เข้าไปลบ

        $event->delete();
        $events = Activity::get()->where('organizer_id', Auth::user()->id);
                return redirect()->route('user.organize', ['events' => $events]);
    }

    public function addUser(Request $request, Activity $event) {
        $user = User::get()->where('email', $request->get("e-mail"))->first();
        $user->role = RoleAccessibility::ORGANIZER;
        $team = Team::get()->where('activity_id', $event->id)->first();
        $team_member = new TeamMember();
        $team_member->team_id = $team->id;
        $team_member->user_id = $user->id;
        $team_member->role_in_team = $request->role;
        $team_member->save();
        return redirect()->route('organize.info', ['event' => $event]);
    }

    public function deleteUser(Activity $event, string $name) {
        $user = User::get()->where('name', $name)->first();
        $team_mem = $event->team->team_members->where('user_id', $user->id)->first();
        $team_mem->delete();
        return redirect()->route('organize.info', ['event' => $event]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\RegisteredList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event_verified = Activity::get()->where('verify', '1');
        return view('activities.index', ['events' => $event_verified]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $event)
    {
        $registered_list = RegisteredList::with('activities')->where('user_id', Auth::user()->id)->get();


        $exists = $registered_list[0]->activities->contains('id', $event->id);


        return view('activities.detail', ['event' => $event, 'is_registered' => $exists]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function registerEvent(Request $request, Activity $event)
    {
        $user = $request->user();
        $registered_list = RegisteredList::with('activities')->where('user_id', $user->id)->get();
        $registered_list[0]->activities()->attach($event);
        return redirect()->route('registered.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

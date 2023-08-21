<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\RegisteredList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $events = RegisteredList::with('activities')->whereBelongsTo($user)->get();
        return view('user.events', [
            'events' => $events
        ]);
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
    public function show(string $id)
    {
        //
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
    public function update(Request $request, Activity $event)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addEvent(Activity $event)
    {
        $registered_list = RegisteredList::with('activities')->whereBelongsTo(Auth::user())->get()->first();
        $registered_list->activities()->attach($event->id);
        return redirect()->route('registered.index');
    }
}

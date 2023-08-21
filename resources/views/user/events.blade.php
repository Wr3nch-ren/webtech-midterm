@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container mt-20">

        <div class="h-full  w-full px-16 pr-48">

            <h1 class="text-3xl font-semibold pb-6">กิจกรรมที่เข้าร่วม</h1>

            <div class="grid grid-cols-2 gap-5">
                @foreach ($events as $event)
                    <x-event-post :event="$event"></x-event-post>
                @endforeach
            </div>



        </div>

    </div>



    </div>
@endsection

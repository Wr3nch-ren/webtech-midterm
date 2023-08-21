@extends('layouts.main')

@section('content')
    <div class="flex justify-center container mt-20">

        @include('layouts.subviews.user-sidebar')

        <div class="h-full w-3/5">

            <h1 class="text-3xl font-semibold pb-6">กิจกรรมที่ดูแล</h1>

            <div class="grid grid-cols-2 gap-5">
                @foreach ($events as $event)
                <x-organize-event-item event-name="{{ $event->activity_name }}"
                    img-path="{{ $event->poster_path }}" id="{{ $event->id }}"/>
                @endforeach
                
            </div>

        </div>



    </div>
@endsection

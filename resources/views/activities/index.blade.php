@extends('layouts.main')

@section('content')
    <div class="flex ">
        @include('layouts.subviews.event-post-sidebar')
        <div class="flex w-full justify-center">
            <div class="flex flex-col items-center gap-5 p-8 w-10/12 bg-transparent h-full min-h-screen">

                <div class="grid grid-cols-2 gap-8">
                    @foreach ($events as $event)
                        <x-event-post :event="$event"></x-event-post>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection

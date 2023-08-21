@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container mt-20">

        <div class="h-full  w-full px-16 pr-48">

            <h1 class="text-3xl font-semibold pb-6">กิจกรรมที่เข้าร่วม</h1>

            @foreach ($events as $event)


                  <div class="grid grid-cols-2 gap-5">
                  <x-event-item event-name="{{ $event->activity_name }}" img-path="{{ $event->poster_path }}" />
                  </div>


            @endforeach


        
      </div>

        </div>



    </div>
@endsection

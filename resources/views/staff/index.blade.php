@extends('layouts.main')

@section('content')
    <div class="flex ">
        <aside id="default-sidebar" class=" w-1/5 ml-16 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar">

            <div class="h-full py-8 overflow-y-auto flex flex-col items-center">

                <div class="font-normal text-sm">
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('events.index') }}">
                            <h1 class="text-2xl">กิจกรรมทั้งหมด</h1>
                        </a>
                    </div>
                </div>

        </aside>
        <div class="flex w-full justify-center">
            <div class="flex flex-col items-center gap-5 p-8 w-10/12 bg-transparent h-full min-h-screen">

                <div class="grid grid-cols-2 gap-8">
                    @foreach ($events as $event)
                        <x-staff-post :event=$event></x-staff-post>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection

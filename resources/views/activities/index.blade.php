@extends('layouts.main')

@php
    function remainDate($deadline) {
        $now = new DateTime();
        $diff = date_diff($now, $deadline);
        return $diff->format('%a');
    }
@endphp

@section('content')
    <div class="flex flex-col items-center gap-5 p-8 max-w-4xl mx-auto bg-white h-full">

        <!-- title -->
        <h1 class="mb-2 text-2xl font-bold">กิจกรรมทั้งหมด</h1>
        <hr class="h-px my-2 bg-gray-800 border-0 w-4/5">
        
        @foreach ($activities as $activity)
        
        <a href="{{ route('activities.showDetail',[ 'activity' => $activity ]) }}" class="flex items-center bg-white border border-gray-800 rounded-lg shadow md:max-w-3xl hover:bg-gray-100 h-full md:h-64 md:justify-around">
                
                <div class="flex-none border-y-1 w-56 h-full">
                    <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full" src="{{ $activity->poster }}" alt="poster">
                </div>

                <div class="flex justify-around py-6 md:p-0">
                    
                    <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                        <!-- camp name -->
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{ $activity->activity_name }}</h5>
                        
                        <!-- camp detail -->
                        <p class="mb-3 text-sm font-normal text-gray-700 text-ellipsis">
                            {{ $activity->description }} 
                        </p>

                        <div>
                            <!-- tag -->
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                        </div>
                    </div>

                <!-- day countdown -->
                <div class="border border-l-black hidden md:block"></div>

                <div class="hidden md:flex flex-col items-center justify-center md:mr-8">
                    <h5 class="mb-2 text-xl tracking-tight text-gray-900">อีก</h5>

                    <!-- day -->
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">{{ 
                         remainDate($activity->deadline)
                    }}</h5>
                    <p class="font-normal text-gray-700 text-sm">วัน</p>
                    <p class="mb-3 font-normal text-gray-700 text-sm">ปิดสมัคร</p>
                </div>
                
            </div>
        </a>
            
        @endforeach
       
    </div>
@endsection

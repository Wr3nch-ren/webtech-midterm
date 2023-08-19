@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center gap-5 p-8 mx-auto bg-white h-full max-w-4xl">
        
        <h1 class="mb-2 text-2xl font-bold">{{ $activity->activity_name }}</h1>
        <hr class="h-px my-2 bg-gray-800 border-0 w-4/5">

        <div>
            <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
        </div>

        <img src="{{ $activity->poster }}" alt="poster">

        <div class="grid grid-cols-2">
                <div>
                    <div class="p-5">
                        <h3 class="font-semibold">รูปแบบกิจกรรม</h3>
                        <p>{{ $activity->activity_type }}</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">ชั่วโมงจิตอาสา</h3>
                        <p>{{ $activity->activity_hours }} ชม.</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">จำนวนที่รับ</h3>
                        <p>{{ $activity->participant_number }} คน</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">สถานที่จัดกิจกรรม</h3>
                        <p>{{ $activity->activity_place }}</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">ผู้จัดกิจกรรม</h3>
                        <p>{{ $activity->organizer_id }}</p>
                    </div>
                </div>
                <div>
                    <div class="p-5">
                        <h3 class="font-semibold">วันที่จัดกิจกรรม</h3>
                        <p>{{ $activity->activity_date }}</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">วันที่รับสมัครวันสุดท้าย</h3>
                        <p>{{ $activity->deadline }}</p>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">ค่าใช้จ่าย</h3>
                        <p>{{ $activity->activity_fee }} บาท</p>
                    </div>
                </div>
            </div>

        <div>
            <div class="p-5">
                <h3 class="font-semibold">คำอธิบายกิจกรรม</h3>
                <p>
                    {{ $activity->description }}
                </p>
            </div>
            <div class="p-5">
                <h3 class="font-semibold">ช่องทางการติดต่อ</h3>
                <p>
                    {{ $activity->contact }}
                </p>
            </div>
        </div>

        <img src="{{ $activity->poster }}" alt="poster">
    
    </div>  
@endsection
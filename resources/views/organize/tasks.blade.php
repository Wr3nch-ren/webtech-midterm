@extends('layouts.organize')
@section('content')
    <div class="w-5/6 h-screen p-6 pl-12 bg-slate-100 overflow-scroll">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" class="self-center"
                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
            </svg>
            <h1 class="text-2xl font-bold ml-3">จัดการงาน</h1>
        </div>

        <div class="flex flex-row space-x-10 mt-10">
            <x-tasks-checkbox title="สิ่งที่ต้องทำ"></x-tasks-checkbox>
            <x-tasks-checkbox title="กำลังทำ"></x-tasks-checkbox>
            <x-tasks-checkbox title="เสร็จสิ้น"></x-tasks-checkbox>

        </div>
{{-- 
        <div class="mt-8">
            <h1>สรุปผล</h1>
        </div> --}}

    </div>
@endsection

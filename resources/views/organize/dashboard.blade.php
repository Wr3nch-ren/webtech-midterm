@extends('layouts.organize')
@section('content')
    <div class="w-5/6 h-screen p-6 pl-12 bg-slate-100 overflow-scroll">
        <div class="flex items-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"
                viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
            </svg>
            <h1 class="text-2xl font-bold ml-3">การรับสมัคร</h1>

        </div>

        <div class="pr-16">
            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">ผู้สมัคร</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">ยืนยัน</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">ปฏิเสธ</button>
                    </li>
                </ul>
            </div>

            <div id="myTabContent">
                <div class="hidden flex-col space-y-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- @foreach ($users_registereds as $user)

                        <x-register-event-list nametitle="{{ $user->name_title }}" name="{{ $user->name }}"
                            surname="{{ $user->surname }}"></x-register-event-list>
                        
                        
                    @endforeach --}}
                </div>
                <div class="hidden flex-col space-y-3" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    {{-- @foreach ($users_confirms as $user)
                        <x-accept-decline-register-event nametitle="{{ $user->name_title }}"
                            name="{{ $user->name }}"
                            surname="{{ $user->surname }}"></x-accept-decline-register-event>
                    @endforeach --}}
                </div>
                <div class="hidden flex-col space-y-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    {{-- @foreach ($users_declines as $user)
                        <x-accept-decline-register-event nametitle="{{ $user->name_title }}"
                            name="{{ $user->name }}"
                            surname="{{ $user->surname }}"></x-accept-decline-register-event>
                    @endforeach --}}
                </div>
            </div>
        </div>


    </div>
@endsection

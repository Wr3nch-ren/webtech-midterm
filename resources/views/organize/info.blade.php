@extends('layouts.organize')
@section('content')
    <div class="w-5/6 h-screen p-6 pl-12 bg-slate-100 overflow-scroll">
        <div class="flex items-bottom  pr-16">
            {{-- <div class="flex">
            </div> --}}
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"
                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
            </svg>
            <h1 class="text-2xl font-bold ml-3">ข้อมูลงาน</h1>


        </div>

        <div class="pr-16">
            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">รายละเอียด</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">สมาชิก</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">งบประมาณ</button>
                    </li>
                </ul>
            </div>

            <div id="myTabContent">
                <div class="hidden flex-col space-y-3"" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <x-event-info-org :event="$event"></x-event-info-org>
                </div>
                <div class="hidden flex-col space-y-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="flex flex-col w-full">

                        <form method="POST" action="{{ route('organize.addUser', ['event' => $event]) }}">
                            @csrf
                            <input type="text" class="" placeholder="email" name="e-mail">
                            <input type="text" class="" placeholder="หน้าที่" name="role">
                            <button type="submit" class="bg-black text-white rounded-md p-4 py-2">เพิ่มสมาชิก</button>
                        </form>

                        <div class="flex flex-col w-full gap-5 pt-10">
                            <x-register-event-list nameTitle="{{ Auth::user()->name_title }}"
                                name="{{ Auth::user()->name }}" surname="{{ Auth::user()->surname }}" role="HOST"
                                :event="$event" />

                            {{-- @if (sizeof($team) != 1)
                                 @for ($i = 0; $i < sizeof($team); $i++)
                                    <x-register-event-list 
                                        nameTitle="{{ $team[$i]->name_title }}" 
                                        name="{{ $team[$i]->name }}" 
                                        surname="{{ $team[$i]->surname }}" 
                                        role="{{ $team_member[$i]->role_in_team }}" 
                                        :event="$event"
                                    ></x-register-event-list>
                                @endfor --}}
                        </div>
                        {{-- @endif --}}

                    </div>

                </div>
                <div class="hidden flex-col space-y-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <x-budget-list></x-budget-list>
                </div>
            </div>
        </div>




    </div>
@endsection

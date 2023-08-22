@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center gap-5 p-8 pb-6 mx-auto bg-white h-full w-10/12 rounded-md shadow-md">
        <h1 class="mb-1 text-2xl font-bold">{{ $event->activity_name }}</h1>
        <hr class="h-px bg-gray-800 border-0 w-4/5">

        {{-- <div>
            <span
                class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
        </div> --}}

        <div class="flex justify-between">
            <div class="mr-10 w-11/12">
                <img src="{{ asset($event->poster_path) }}"
                    alt="{{ $event->poster_path }}">
            </div>
            <div>
                {{-- <img src="https://flowbite.com/docs/images/blog/image-4.jpg" alt=""> --}}
                <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm w-full">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">ชื่อ</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_name }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">รูปแบบ</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_type }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">วันที่จัด</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_start }} -
                                {{ $event->activity_end }} </dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">วันที่ปิดรับสมัคร</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->deadline }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">จำนวนที่รับ</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->participant_number }} คน</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">ชั่วโมงจิตอาสา</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_hours }} ชม.</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">สถานที่จัด</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_place }}</dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">ค่าใช้จ่ายในการเข้าร่วมกิจกรรม</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->activity_fee }} บาท</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">งบประมาณสำหรับกิจกรรม</dt>
                            <dd class="text-gray-700 sm:col-span-2">{{ $event->budget }} บาท</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">คำอธิบาย</dt>
                            <dd class="text-gray-700 sm:col-span-2">
                                {{ $event->description }}
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi nostrum dolor natus! Tempora
                                commodi
                                omnis provident beatae id, illum impedit, ullam reprehenderit officiis adipisci iusto animi
                                eius
                                repudiandae nihil quaerat.
                            </dd>
                        </div>
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium text-gray-900">หมวดหมู่</dt>
                            <dd class="text-gray-700 sm:col-span-2">
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">{{ $event->activity_category }}</span>
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="flex justify-between mt-6 ml-1">
                    <div class="flex item-center">
                        <div class="item-center">
                            <p class="font-medium text-sm text-gray-700">จัดโดย</p>
                        </div>
                        <div class="item-center">
                            <p class="text-gray-700 text-sm ml-2">{{ $event->organizer_name }}
                            </p>

                        </div>
{{--                        ปุ่มอนุมัติกิจกรรม ให้เปลี่ยนค่า verify ให้เป็น true--}}
                        <div class="flex item-center">
                            <div class="item-center">
                                <form action="{{ route('event.update', $event->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="approve"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        อนุมัติ
                                    </button>
                                </form>
                            </div>
                            {{--ปุ่มไม่อนุมัติ ให้เปลี่ยนค่า verify ให้เป็น false--}}
                            <div class="item-center">
                                <form action="{{ route('event.update', $event->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="disapprove"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        ไม่อนุมัติ
                                    </button>
                                </form>
                        </div>
                    </div>
                    <div class="flex item-center">

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                            </svg>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layouts.subviews.footer') --}}
@endsection

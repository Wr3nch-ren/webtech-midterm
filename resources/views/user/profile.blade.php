@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container pt-20 bg-white pr-20">

        <div class="flex flex-col">

            <img class="rounded w-48 h-48 mb-4 border-black border-2" src="{{ $user->image_path }}" alt="profile pics">
            <h2 class="text-2xl py-2 font-semibold">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
            <h4 class="text-xl py-2">{{ Auth::user()->email }}</h4>
            <button type="button"
                class="text-gray-900 bg-white border border-gray-800 focus:outline-none hover:bg-black hover:text-white hover:shadow-md focus:ring-4 focus:ring-gray-200 font-semibold rounded-full text-sm px-3 py-2.5 mr-2 my-3 ">
                <a href="{{ route('account.edit', ['account' => $user]) }}" class="w-full h-full">
                    <div class="hover:translate-x-1 w-full ease-out transition-transform">
                        แก้ไขโปรไฟล์
                        <svg class="w-3.5 h-3.5 ml-2 mb-1 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

            </button>

        </div>

        <div class="mt-6 mx-16 space-y-6">
            <h1 class="px-6 font-semibold text-3xl">ข้อมูลส่วนตัว</h1>
            <table class="table-fixed">
                <tr>
                    <td class="p-6 py-3">คำนำหน้า: {{ $user->name_title }}</td>
                    <td class="px-6 py-3">ชื่อ: {{ $user->name }} {{ $user->surname }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">ชื่อเล่น: {{ $user->nickname }}</td>
                    <td class="px-6 py-3">วันเกิด: {{ $user->date_of_birth }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">รหัสนิสิต: {{ $user->student_code }}</td>
                    <td class="px-6 py-3">ชั้นปี: {{ $user->year }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">{{ $user->faculty }}</td>
                    <td class="px-6 py-3">{{ $user->major }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">โรคประจำตัว: {{ $user->allergy }}</td>
                    <td class="px-6 py-3">อาหารที่แพ้: {{ $user->allergy }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg></i>
                        {{ $user->phone }}
                    </td>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg>
                        {{ $user->facebook }}
                    </td>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z" />
                        </svg>
                        {{ $user->line_id }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

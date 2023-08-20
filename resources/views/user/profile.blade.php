@extends('layouts.main')

@section('content')
    <div class="flex justify-center container mt-20">

        @include('layouts.subviews.user-sidebar')

        <div class="flex flex-col">

            <img class="rounded mb-4 border-black border-2" width="200px"
                src="data:image/jpeg;base64,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"
                alt="Extra large avatar">

            <h2 class="text-2xl py-2 font-semibold">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
            <h4 class="text-xl py-2">{{ Auth::user()->email }}</h4>
            <button type="button"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-semibold rounded-full text-sm px-3 py-2.5 mr-2 my-3 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                <a href="{{ route('user.editProfile') }}" class="w-full h-full">
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
                    <td class="p-6 py-3">คำนำหน้า: นางสาว</td>
                    <td class="px-6 py-3">ชื่อ: โอลิเวีย</td>
                    <td class="px-6 py-3">นามสกุล: รายอะ</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">ชื่อเล่น: โอลีฟ</td>
                    <td class="px-6 py-3">วันเกิด: 20 มี.ค. 2544</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">รหัสนิสิต: 6410406731</td>
                    <td class="px-6 py-3">ชั้นปี: 2</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">คณะ: วิทยาศาสตร​์</td>
                    <td class="px-6 py-3">สาขา: สถิติ</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">โรคประจำตัว: -</td>
                    <td class="px-6 py-3">อาหารที่แพ้: -</td>
                </tr>
                <tr>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg></i>
                        012-345-5678
                    </td>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg>
                        Olivia Rhye
                    </td>
                    <td class="px-6 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                            class="inline pr-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z" />
                        </svg>
                        oooooolive
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center gap-5 p-8 max-w-4xl mx-auto bg-white h-full">

        <!-- title -->
        <h1 class="mb-2 text-2xl font-bold">กิจกรรมทั้งหมด</h1>
        <hr class="h-px my-2 bg-gray-800 border-0 w-4/5">

        <a href="{{ route('activities.showDetail') }}"
            class="flex flex-col items-center bg-white border border-gray-800 rounded-lg shadow md:flex-row md:max-w-3xl hover:bg-gray-100 h-full md:h-48 md:justify-around">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-full md:w-2/3 md:rounded-none md:rounded-l-lg"
                src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
            <div class="flex justify-around py-6 md:p-0">

                <div class="flex flex-col w-3/4 md:w-2/3">
                    <!-- camp name -->
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">ค่ายอาสาพัฒนาชุมชน</h5>

                    <!-- camp detail -->
                    <p class="mb-3 text-sm font-normal text-gray-700 text-ellipsis">Morem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc vulputate libero et velit interdum,
                        ac . Morem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac .
                    <div>
                        <!-- tag -->
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                    </div>
                </div>

                <!-- day countdown -->
                <div class="border border-l-black hidden md:block"></div>
                <div class="hidden md:flex flex-col items-center justify-center md:mr-8">
                    <h5 class="mb-2 text-xl tracking-tight text-gray-900">อีก</h5>
                    <!-- day -->
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">7</h5>
                    <p class="font-normal text-gray-700 text-sm">วัน</p>
                    <p class="mb-3 font-normal text-gray-700 text-sm">ปิดสมัคร</p>
                </div>
            </div>
        </a>

        <a href="{{ route('activities.showDetail') }}"
            class="flex flex-col items-center bg-white border border-gray-800 rounded-lg shadow md:flex-row md:max-w-3xl hover:bg-gray-100 h-full md:h-48 md:justify-around">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-full md:w-2/3 md:rounded-none md:rounded-l-lg"
                src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=686&q=80"
                alt="">
            <div class="flex justify-around py-6 md:p-0">

                <div class="flex flex-col w-3/4 md:w-2/3">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">ค่ายอาสาพัฒนาชุมชนสุดโหด</h5>
                    <p class="mb-3 text-sm font-normal text-gray-700 text-ellipsis">Morem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc vulputate libero et velit interdum,
                        ac . Morem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac .
                    <div>
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                    </div>
                </div>

                <div class="border border-l-black hidden md:block"></div>
                <div class="hidden md:flex flex-col items-center justify-center md:mr-8">
                    <h5 class="mb-2 text-xl tracking-tight text-gray-900">อีก</h5>
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">366</h5>
                    <p class="font-normal text-gray-700 text-sm">วัน</p>
                    <p class="mb-3 font-normal text-gray-700 text-sm">ปิดสมัคร</p>
                </div>
            </div>
        </a>

        <a href="{{ route('activities.showDetail') }}"
            class="flex flex-col items-center bg-white border border-gray-800 rounded-lg shadow md:flex-row md:max-w-3xl hover:bg-gray-100 h-full md:h-48 md:justify-around">
            <img class="object-cover w-full rounded-t-lg h-48 md:h-full md:w-2/3 md:rounded-none md:rounded-l-lg"
                src="https://images.unsplash.com/photo-1604824338889-ce1c51f1af7f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                alt="">
            <div class="flex justify-around py-6 md:p-0">

                <div class="flex flex-col w-3/4 md:w-2/3">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">ค่ายอาสาพัฒนาชุมชนสุดเจ๋ง</h5>
                    <p class="mb-3 text-sm font-normal text-gray-700 text-ellipsis">Morem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nunc vulputate libero et velit interdum,
                        ac . Morem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac .
                    <div>
                        <span
                            class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                    </div>
                </div>

                <div class="border border-l-black hidden md:block"></div>
                <div class="hidden md:flex flex-col items-center justify-center md:mr-8">
                    <h5 class="mb-2 text-xl tracking-tight text-gray-900">อีก</h5>
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">1200</h5>
                    <p class="font-normal text-gray-700 text-sm">วัน</p>
                    <p class="mb-3 font-normal text-gray-700 text-sm">ปิดสมัคร</p>
                </div>
            </div>
        </a>

    </div>
@endsection

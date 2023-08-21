@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container mt-20 ">

        <div class="h-full w-full px-16 pr-48">

            <h1 class="text-3xl font-semibold pb-6">การแจ้งเตือนผลการสมัคร</h1>

            <div class="flex flex-col gap-5">
                <x-notification topic="มาสมัครค่ายหน่อยน้า" description="ถ้าไม่สมัครผมจะบึ้มบ้านคุณ" />
                <x-notification topic="มาสมัครค่ายหน่อยน้า งือ" description="ถ้าไม่สมัคร ก็เรื่องของคุณน้า" />
            </div>

        </div>

    </div>
@endsection

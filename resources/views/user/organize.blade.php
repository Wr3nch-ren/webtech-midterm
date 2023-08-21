@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container mt-20">

        <div class="h-full w-3/5">

            <h1 class="text-3xl font-semibold pb-6">กิจกรรมที่ดูแล</h1>

            <div class="grid grid-cols-2 gap-5">
                <x-organize-event-item event-name="กิจกรรมอาสาพิทักษ์ชายฝั่งทะเล"
                    img-path="https://plus.unsplash.com/premium_photo-1681823639539-8459a61eefbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" />
            </div>

        </div>



    </div>
@endsection

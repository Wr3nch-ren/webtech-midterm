@extends('layouts.organize')

@section('content')
    <div class="flex justify-center container mt-20 pb-24">

        <div class="w-full px-16 pr-48">
            <h1 class="text-3xl font-semibold pb-6">แก้ไขข้อมูลส่วนตัว</h1>
            <form action="{{ route('account.update', ['account' => $user]) }}" class="grid grid-cols-2 gap-x-5" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="block mb-2">แก้ไขรูปโปรไฟล์</h3>
                <div class="col-span-2 mb-4 bg-white p-3 border-gray-800 border rounded-md">
                    <input type="file" name="image" id="image_path">
                </div>
                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ข้อมูลส่วนตัว</h1>
                </div>
                <div class="my-2 flex flex-col">
                    <label for="name_title" class="block mb-2">คำนำหน้า</label>
                    <select id="name_title" name="name_title"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700">
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="surname" class="block mb-2">ชื่อ</label>
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->name }}">
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="surname" class="block mb-2">นามสกุล</label>
                    <input type="text" name="surname" id="surname" placeholder="Surname"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->surname }}">
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="nickname" class="block mb-2">ชื่อเล่น</label>
                    <input type="text" name="nickname" id="nickname" placeholder="Nickname"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->nickname }}">
                </div>

                <div class="my-2 flex flex-col">
                    <label for="" class="block mb-2">วันเดือนปีเกิด</label>
                    <input type="date" name="date_of_birth" id="date_of_birthl" placeholder="Date of Birth"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->date_of_birth }}">
                </div>


                <div class="my-2 flex flex-col ">
                    <label for="" class="block mb-2">รหัสนิสิต</label>
                    <input type="text" name="student_code" id="student_code" placeholder="64xxxxxxxx"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->student_code }}">
                </div>

                {{-- <div class="my-2 flex flex-col ">
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="email"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->email }}">
                </div> --}}
                {{-- @foreach ($faculties as $faculty)
                    <p>{{ $faculty }}</p>
                @endforeach --}}
                <div class="my-2 flex flex-col ">
                    <label for="faculty" class="block mb-2">คณะ</label>
                    <select id="faculty" name="faculty"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700">
                        {{-- @foreach (Config::get('data') as $keys)
                            <option value="{{ $keys }}">{{ $key }}</option>
                        @endforeach --}}
                        {{-- @foreach ($faculties as $key => $value)
                            <option value="{{ $key }}">{{ value }}</option>
                        @endforeach --}}
                        @foreach (array_keys($education) as $faculty)
                            <option value="{{ $faculty }}">
                                {{ $faculty }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="my-2 flex flex-col">
                    <label for="major" class="block mb-2">สาขา</label>
                    <select id="major" name="major"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        action="{{ route('user.editProfile') }}">
                        <!-- major -->
                        @foreach ($education as $faculty)
                            @foreach ($faculty as $major)
                                <option value="{{ $major }}">
                                    {{ array_search($faculty, $education) . ' ' . $major }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>

                <div class="my-2 flex flex-col">
                    <label for="year" class="block mb-2">ชั้นปี</label>
                    <select id="year" name="year"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="4">อื่น ๆ </option>
                    </select>
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ช่องทางติดต่อ</h1>
                </div>

                <div class="my-2 flex flex-col">
                    <label for="phone" class="block mb-2">เบอร์โทร</label>
                    <input type="text" name="phone" id="phone" placeholder="โปรดกรอก (ไม่มี  -)"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->phone }}">
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="line_id" class="block mb-2">ไลน์</label>
                    <input type="text" name="line_id" id="line_id" placeholder="โปรดกรอก (ไม่มี  -)"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->line_id }}">
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="facebook" class="block mb-2">เฟสบุ๊ค</label>
                    <input type="text" name="facebook" id="facebook" placeholder="โปรดกรอก (ไม่มี  -)"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->facebook }}">
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ข้อมูลการแพ้</h1>
                </div>

                <div class="my-2 flex flex-col">
                    <label for="congenital_disease" class="block mb-2">โรคประจำตัว</label>
                    <input type="text" name="congenital_disease" id="congenital_disease"
                        placeholder="โปรดกรอก (ไม่มี  -)"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->congenital_disease }}">
                </div>

                <div class="my-2 flex flex-col ">
                    <label for="allergy" class="block mb-2">อาหารที่แพ้</label>
                    <input type="text" name="allergy" id="allerg" placeholder="โปรดกรอก (ไม่มี  -)"
                        class="rounded-md focus:ring-transparent focus:border-2 focus:border-gray-700"
                        value="{{ $user->allergy }}">
                </div>

                <button type="submit"
                    class="col-span-2 rounded-md bg-black text-white p-3 hover:bg-gray-800 hover:shadow-2xl transition-colors duration-300 w-1/2 mx-auto mt-10">Submit</button>
            </form>
        </div>
    </div>



    </div>
@endsection

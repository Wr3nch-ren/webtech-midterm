@extends('layouts.main')
@section('content')
    <div class='flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100'>

        <div class="w-full sm:max-w-3xl mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg">
            <div class="mb-8">
                <a href="#">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <h1 class="font-extrabold text-3xl text-center">
                        Sign up
                    </h1>
                </a>
            </div>

            <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-x-2">
                        <h3 class="block mb-2">รูปโปรไฟล์</h3>
                        <div class="col-span-2 mb-4 bg-white p-3 border-gray-800 border rounded-md">
                            <input type="file" name="image"/>
                        </div>
                        <div class="col-span-2 my-4">
                            <h2 class="text-xl font-semibold">ข้อมูลส่วนตัว</h1>
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="name_title" class="block mb-2">คำนำหน้า</label>
                            <select id="name_title" name="name_title" class="rounded-md">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                         <div class="my-2 flex flex-col ">            
                            <label for="surname" class="block mb-2">ชื่อ</label>
                            <input type="text" name="name" id="name" placeholder="Name" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="surname" class="block mb-2">นามสกุล</label>
                            <input type="text" name="surname" id="surname" placeholder="Surname" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="nickname" class="block mb-2">ชื่อเล่น</label>
                            <input type="text" name="nickname" id="nickname" placeholder="Nickname" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col">            
                            <label for="date_of_birth" class="block mb-2">วันเดือนปีเกิด</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" placeholder="Date of Birth" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="student_code" class="block mb-2">รหัสนิสิต</label>
                            <input type="text" name="student_code" id="student_code" placeholder="64xxxxxxxx" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="email" class="block mb-2">Email</label>
                            <input type="email" name="email" id="email" placeholder="email" class="rounded-md">
                        </div>
                       
                        <div class="my-2 flex flex-col ">            
                            <label for="faculty" class="block mb-2">คณะ</label>
                            <select id="faculty" name="faculty" class="rounded-md">
                            @foreach (array_keys($education) as $faculty)
                                <option value="{{ $faculty }}">
                                    {{ $faculty }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="my-2 flex flex-col">            
                            <label for="department" class="block mb-2">สาขา</label>
                            <select id="department" name="department" class="rounded-md">
                            <!-- department -->
                            @foreach ($education as $faculty)
                                @foreach ($faculty as $department)
                                    <option value="{{ $department }}">{{ array_search($faculty, $education) .' '. $department }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        </div>
                        <div class="my-2 flex flex-col">            
                            <label for="year_study" class="block mb-2">ชั้นปี</label>
                            <select id="year_study" name="year_study" class="rounded-md">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                         <div class="col-span-2 my-4">
                            <h2 class="text-xl font-semibold">รหัสผ่าน</h1>
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="password" class="block mb-2">Password</label>
                            <input type="password" name="password" id="password" placeholder="password" class="rounded-md">
                        </div>
                        <div class="my-2 flex flex-col ">            
                            <label for="password_confirmation" class="block mb-2">Confirmed Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password" class="rounded-md">
                        </div>
                         <div class="col-span-2 my-4">
                            <h2 class="text-xl font-semibold">ช่องทางติดต่อ</h1>
                        </div>

                    <div class="my-2 flex flex-col">            
                        <label for="phone" class="block mb-2">เบอร์โทร</label>
                        <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" name="phone">
                    </div>

                    <div class="my-2 flex flex-col ">            
                        <label for="line_id" class="block mb-2">ไลน์</label>
                        <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" name="line_id">
                    </div>

                    <div class="my-2 flex flex-col ">            
                        <label for="facebook" class="block mb-2">เฟสบุ๊ค</label>
                        <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" name="facebook">
                    </div>

                    <div class="col-span-2 my-4">
                        <h2 class="text-xl font-semibold">ข้อมูลการแพ้</h1>
                    </div>

                    <div class="my-2 flex flex-col">            
                        <label for="congenital_disease" class="block mb-2">โรคประจำตัว</label>
                        <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" name="congenital_disease">
                    </div>

                    <div class="my-2 flex flex-col ">            
                        <label for="allergy" class="block mb-2">อาหารที่แพ้</label>
                        <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" name="allergy">
                    </div>
                    </div>
                        <button class="col-span-2 bg-black text-white p-3 hover:bg-violet-900 transition-colors duration-300 w-full mx-auto mt-5">Submit</button>
                    </div>

            </form>
    </div>
@endsection

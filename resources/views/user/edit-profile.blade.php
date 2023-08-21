@extends('layouts.main')

@section('content')
<div class="flex justify-center container mt-20">

      @include('layouts.subviews.user-sidebar')
      
      <div class="w-1/2">
            <h1 class="text-3xl font-semibold pb-6">แก้ไขข้อมูลส่วนตัว</h1>
            <form action="{{ route('user.update', ['user' => $user]) }}" class="grid grid-cols-2 gap-x-5" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="block mb-2">แก้ไขรูปโปรไฟล์</h3>
                <div class="col-span-2 mb-4 bg-white p-3 border-gray-800 border rounded-md">
                    <input type="file" name="image">
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
                   <input type="text" name="name" id="name" placeholder="Name" class="rounded-md" value="{{ $user->name }}">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="surname" class="block mb-2">นามสกุล</label>
                    <input type="text" name="surname" id="surname" placeholder="Surname" class="rounded-md" value="{{ $user->surname }}">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="nickname" class="block mb-2">ชื่อเล่น</label>
                    <input type="text" name="nickname" id="nickname" placeholder="Nickname" class="rounded-md" value="{{ $user->nickname }}">
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">วันเดือนปีเกิด</label>
                    <input type="date" name="date_of_birth" id="date_of_birthl" placeholder="Date of Birth" class="rounded-md" value="{{ $user->date_of_birth }}">
                </div>


                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">รหัสนิสิต</label>
                    <input type="text" name="student_code" id="student_code" placeholder="64xxxxxxxx" class="rounded-md" value="{{ $user->student_code }}">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" class="rounded-md" value="{{ $user->email }}">
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
                    <select id="department" name="department" class="rounded-md" action="{{ route('user.editProfile') }}">
                        <!-- department -->
                        @foreach ($education as $faculty)
                            @foreach ($faculty as $department)
                                <option value="{{ $department }}">{{ array_search($faculty, $education) .' '. $department }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">ชั้นปี</label>
                    <select id="" name="" class="rounded-md">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ช่องทางติดต่อ</h1>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">เบอร์โทร</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" value="{{ $user->phone }}">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">ไลน์</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" value="{{ $user->line_id }}">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">เฟสบุ๊ค</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" value="{{$user->facebook }}">
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ข้อมูลการแพ้</h1>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">โรคประจำตัว</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" value="{{ $user->congenital_disease }}">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">อาหารที่แพ้</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md" value="{{ $user->allergy }}">
                </div>
             
                <button class="col-span-2 bg-black text-white p-3 hover:bg-violet-900 transition-colors duration-300 w-1/2 mx-auto mt-5">Submit</button>
            </form>
        </div>
    </div>

     
      
</div>


@endsection
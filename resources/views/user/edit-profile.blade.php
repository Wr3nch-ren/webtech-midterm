@extends('layouts.main')

@section('content')
<div class="flex justify-center container mt-20">

      @include('layouts.subviews.user-sidebar')
      
      <div class="w-1/2">
            <h1 class="text-3xl font-semibold pb-6">แก้ไขข้อมูลส่วนตัว</h1>
            <form action="POST" class="grid grid-cols-2 gap-x-5">
                @csrf
                <label for="" class="block mb-2">แก้ไขรูปโปรไฟล์</label>
                <div class="col-span-2 mb-4 bg-white p-3 border-gray-800 border rounded-md">
                    <input type="file">
                </div>
                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ข้อมูลส่วนตัว</h1>
                </div>
                <div class="my-2 flex flex-col">
                    <label for="" class="block mb-2">คำนำหน้า</label>
                    <select id="" name="" class="rounded-md">
                        <option value="">นาย</option>
                        <option value="saab">นาง</option>
                        <option value="fiat">นางสาว</option>
                        <option value="audi">ไม่ระบุคำนำหน้า</option>
                    </select>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">ชื่อ</label>
                    <input type="text" placeholder="Name" class="rounded-md">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">นามสกุล</label>
                    <input type="text" placeholder="Surname" class="rounded-md">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">ชื่อเล่น</label>
                    <input type="text" placeholder="Nickname" class="rounded-md">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">รหัสนิสิต</label>
                    <input type="text" placeholder="64xxxxxxxx" class="rounded-md">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">คณะ</label>
                    <select id="" name="" class="rounded-md">
                       
                    </select>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">สาขา</label>
                    <select id="" name="" class="rounded-md">
                        <!-- department -->
                    </select>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">ชั้นปี</label>
                    <select id="" name="" class="rounded-md">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5 ขึ้นไป">5 ขึ้นไป</option>
                    </select>
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ช่องทางติดต่อ</h1>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">เบอร์โทร</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">ไลน์</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md">
                </div>

                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">เฟสบุ๊ค</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md">
                </div>

                <div class="col-span-2 my-4">
                    <h2 class="text-xl font-semibold">ข้อมูลการแพ้</h1>
                </div>

                <div class="my-2 flex flex-col">            
                    <label for="" class="block mb-2">โรคประจำตัว</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md">
                </div>
            
                <div class="my-2 flex flex-col ">            
                    <label for="" class="block mb-2">อาหารที่แพ้</label>
                    <input type="text" placeholder="โปรดกรอก (ไม่มี  -)" class="rounded-md">
                </div>
             
                <button class="col-span-2 bg-black text-white p-3 hover:bg-violet-900 transition-colors duration-300 w-1/2 mx-auto mt-5">Submit</button>
            </form>
        </div>
    </div>

     
      
</div>


@endsection
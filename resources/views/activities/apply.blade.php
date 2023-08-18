@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center gap-5 p-8 mx-auto bg-white h-full max-w-4xl">
        <h1 class="mb-2 text-2xl font-bold">แบบฟอร์มสมัครค่าย</h1>
        <hr class="h-px my-2 bg-gray-800 border-0 w-4/5">
        
        <!-- ยังไม่ได้ใส่ for, id, name กับ option -->
        <div class="w-1/2">
            <form action="POST">
                @csrf
                <div class="my-2 flex flex-col">
                    <label for="" class="block mb-2">คำนำหน้า</label>
                    <select id="" name="" class="rounded-md">
                        <option value="">นาย</option>
                        <option value="saab">นาง</option>
                        <option value="fiat">นางสาว</option>
                        <option value="audi">ไม่ระบุคำนำหน้า</option>
                    </select>
                </div>

                <div class="my-2 flex flex-col ">            
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
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty }}">{{ $faculty }}</option>
                        @endforeach
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

                <button class="bg-black text-white p-3 hover:bg-violet-900 transition-colors duration-300 w-full mt-5">Submit</button>
            </form>
        </div>
    </div>
        
  
@endsection
@extends('layouts.main')
@section('content')
    <div class="bg-white border border-black rounded-md shadow relative m-10 mx-20 mt-6">

        <div class="flex items-start justify-between p-5 border-b rounded-t pb-6">
            <h3 class="text-xl font-semibold">
                สร้างกิจกรรม
            </h3>

        </div>

        <div class="p-6 space-y-6">
            <form action="{{ route('organize.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-2">
                        <label for="activity_name" class="text-sm font-medium text-gray-900 block mb-2">ชื่อกิจกรรม</label>
                        <input required type="text" name="activity_name" id="activity_name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="ชื่อกิจกรรม" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="activity_type"
                            class="text-sm font-medium text-gray-900 block mb-2">รูปแบบกิจกรรม</label>
                        <select id="activity_type" name="activity_type"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5">
                            <option value="วันเดียว">วันเดียว</option>
                            <option value="ไป-กลับหลายวัน">ไป-กลับหลายวัน</option>
                            <option value="ค้างคืน">ค้างคืน</option>
                            <option value="ออนไลน์">ออนไลน์</option>
                            <option value="ระยะยาว">ระยะยาว</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="activity_category" class="text-sm font-medium text-gray-900 block mb-2">หมวดหมู่</label>
                        <select id="activity_category" name="activity_category"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5">
                            <option value="อาสา">อาสา</option>
                            <option value="วิชาการ">วิชาการ</option>
                            <option value="สันทนาการ">สันทนาการ</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="price" class="text-sm font-medium text-gray-900 block mb-2">วันที่จัดกิจกรรม</label>

                        <div date-rangepicker class="flex items-center">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input name="activity_start" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="วันเริ่ม">
                            </div>
                            <span class="mx-4 text-gray-500">to</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input name="activity_end" type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full pl-10 p-2.5"
                                    placeholder="วันสุดท้าย">
                            </div>
                        </div>


                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="deadline" class="text-sm font-medium text-gray-900 block mb-2">วันที่ปิดรับสมัคร</label>

                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input type="date" name="deadline"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full pl-10 p-2.5 "
                                placeholder="เลือกวันที่ปิดรับสมัคร">
                        </div>

                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="activity_place"
                            class="text-sm font-medium text-gray-900 block mb-2">สถานที่จัดกิจกรรม</label>
                        <input required type="text" name="activity_place" id="activity_place"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="สถานที่จัดกิจกรรม" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="organizer_name"
                            class="text-sm font-medium text-gray-900 block mb-2">ผู้จัดกิจกรรม</label>
                        <input required type="text" name="organizer_name" id="organizer_name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="ชื่อผู้จัดกิจกรรม เช่น ชมรม, คณะ, ภาควิชา" required="">
                    </div>

                    <div class="col-span-6 sm:col-span-1">
                        <label for="participant_number" class="text-sm font-medium text-gray-900 block mb-2">จำนวนที่รับ
                            (คน)</label>
                        <input type="number" min="1" name="participant_number" id="participant_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="จำนวนที่รับได้ทั้งหมด" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-1">
                        <label for="activity_fee" class="text-sm font-medium text-gray-900 block mb-2">ค่าใช้จ่าย
                            (฿)</label>
                        <input type="number" min="0" name="activity_fee" id="activity_fee"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="ค่าสมัครกิจกรรมต่อคน" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="contact"
                            class="text-sm font-medium text-gray-900 block mb-2">ช่องทางการติดต่อ</label>
                        <input required type="text" name="contact" id="contact"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-2.5"
                            placeholder="ช่องทางการติดต่อ เช่น email, line, สำนักงาน" required="">
                    </div>
                    <div class="col-span-4">
                        <label for="description"
                            class="text-sm font-medium text-gray-900 block mb-2">คำอธิบายกิจกรรม</label>
                        <textarea required id="description" rows="4" name="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border-2 focus:border-gray-700 block w-full p-4"
                            placeholder="รายละเอียดกิจกรรม"></textarea>
                    </div>



                    <div class="col-span-6 sm:col-span-2">
                        <label for="poster" class="text-sm font-medium text-gray-500 block mb-2">poster</label>
                        <div class="col-span-2 mb-4 bg-gray-50 p-3 border-gray-300 border rounded-md">
                            <input required type="file" name="poster">
                        </div>
                    </div>


                </div>

                <div class="flex p-3 px-6 border-t border-gray-200 rounded-b justify-end mt-6">
                    <button
                        class="text-white bg-black hover:bg-cyan-400 focus:ring-4 focus:ring-black font-medium rounded-lg text-sm px-6 py-2.5 text-center"
                        type="submit">สร้าง</button>
                </div>
            </form>
        </div>


    </div>
@endsection

@extends('layouts.main')
@section('content')
    <div class="bg-white border border-black rounded-md shadow relative m-10 mx-20 mt-6">

        <div class="flex items-start justify-between p-5 border-b rounded-t pb-6">
            <h3 class="text-xl font-semibold">
                สร้างกิจกรรม
            </h3>

        </div>

        <div class="p-6 space-y-6">
            <form action="#">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-2">
                        <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">ชื่อกิจกรรม</label>
                        <input type="text" name="product-name" id="product-name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-transparent focus:border focus:border-black block w-full p-2.5"
                            placeholder="ชื่อกิจกรรม" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="category" class="text-sm font-medium text-gray-900 block mb-2">รูปแบบกิจกรรม</label>
                        {{-- <input type="text" name="category" id="category"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Electronics" required=""> --}}
                        <select id="" name=""
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                            <option value="">วันเดียว</option>
                            <option value="">ไป-กลับหลายวัน</option>
                            <option value="">ค้างคืน</option>
                            <option value="">ออนไลน์</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">หมวดหมู่</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
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
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                    placeholder="วันสุดท้าย">
                            </div>
                        </div>


                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="price" class="text-sm font-medium text-gray-900 block mb-2">วันที่ปิดรับสมัคร</label>

                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="เลือกวันที่ปิดรับสมัคร">
                        </div>

                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">สถานที่จัดกิจกรรม</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">ผู้จัดกิจกรรม</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <label for="price" class="text-sm font-medium text-gray-900 block mb-2">จำนวนที่รับ (คน)</label>
                        <input type="number" name="number" id="number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="price" class="text-sm font-medium text-gray-900 block mb-2">ค่าใช้จ่าย (฿)</label>
                        <input type="number" name="number" id="number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">line</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">facebook</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">other</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Apple" required="">
                    </div>

                    <div class="col-span-full">
                        <label for="product-details"
                            class="text-sm font-medium text-gray-900 block mb-2">คำอธิบายกิจกรรม</label>
                        <textarea id="product-details" rows="4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
                            placeholder="รายละเอียด"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <div class="flex p-3 px-6 border-t border-gray-200 rounded-b justify-end">
            <button
                class="text-white bg-black hover:bg-cyan-700 focus:ring-4 focus:ring-black font-medium rounded-lg text-sm px-6 py-2.5 text-center"
                type="submit">สร้าง</button>
        </div>

    </div>
@endsection

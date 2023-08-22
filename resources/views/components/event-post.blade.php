@props(['event'])
<div>
    <div class="flex bg-white transition hover:shadow-xl h-10/12">
        {{-- <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
            <time datetime="2022-10-10"
                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                <span>2022</span>
                <span class="w-px flex-1 bg-gray-900/10"></span>
                <span>Oct 10</span>
            </time>
        </div> --}}

        <div class="hidden sm:block sm:w-1/3">
            <img alt="Guitar"
                src="https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                class="aspect-auto h-full w-full object-cover" />
        </div>

        <div class="flex flex-1 flex-col justify-between">
            <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                <a href="{{ route('events.show', $event) }}">
                    <h3 class="font-bold text-lg uppercase text-gray-900">
                        {{ $event->activity_name }}
                    </h3>
                </a>

                <p class="mt-2 line-clamp-2 text-sm/relaxed text-gray-700">
                    {{ $event->description }} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                    dolores, possimus pariatur animi temporibus nesciunt praesentium dolore
                    sed nulla ipsum eveniet corporis quidem, mollitia itaque minus soluta,
                    voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
                    Molestias explicabo corporis voluptatem?
                </p>
            </div>

            <div class="sm:flex sm:items-end sm:justify-end">
                <a href="{{ route('events.show', $event) }}"
                    class="block bg-gray-900 px-4 py-2 text-center text-xs font-bold uppercase text-white transition hover:bg-cyan-400">
                    เหลือ 7 วัน
                </a>
            </div>
        </div>
    </div>
</div>


{{-- <a href="{{ route('events.show', $event) }}"
    class="flex items-center bg-white border border-black rounded-lg shadow md:w-full hover:bg-gray-100 h-full md:h-40">
    <div class="flex-none  w-56 h-full">
        <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full"
            src="https://www.camphub.in.th/wp-content/uploads/2023/07/8386D70E-E4A5-4C6B-ACE8-F6141C28DA3B.jpg"
            alt="">
    </div>

    <div class="flex justify-between py-6 md:p-0 w-full">

        <div class="flex flex-col pl-6 md:w-2/3 md:max-w-xl p-3">
            <!-- camp name -->
            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{ $event->activity_name }}</h5>

            <!-- camp detail -->
            <p class="mb-3 text-sm font-normal text-gray-700 line-clamp-2">
                {{ $event->description }}
                {{-- 🌳สัตว์ไรนิ x มูลนิธินิเวศวิถี ชวนเพื่อน เพื่อน พาครอบครัว ใกล้ชิดธรรมชาติ
                ทำความรู้จักเหล่าผองเพื่อนที่โผบินรอบตัวเรา
                ผ่านกิจกรรมการเดินดูนก พร้อมสำรวจจำนวนนกและ ชนิดนกระหว่างการเดิน
                ท่ามกลางสวนสาธารณะกลางเมืองสุราษฎร์ธานี ร่วมกัน --}}
{{-- </p>

            <div>
                <!-- tag -->
                <span
                    class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
            </div>
        </div>

        <!-- day countdown -->
        <div class="border border-l-black hidden md:block"></div>

        <div class="hidden md:flex flex-col items-center justify-center md:mr-8">
            <p class="font-normal text-gray-700 text-sm">อีก</p>
            <!-- day -->
            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900">7</h5>
            <p class="font-normal text-gray-700 text-sm">วัน</p>
            <p class="mb-3 font-normal text-gray-700 text-sm">ปิดสมัคร</p>
        </div>

    </div>
</a> --}}

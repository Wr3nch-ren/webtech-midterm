@props(['event'])
<div class="float float-right justify-end">
    <button class="bg-black text-white rounded-md p-4 py-2">Post</button>
</div>

<div>
    <div class="grid grid-cols-3 gap-y-4">
        <img src="{{ asset($event->poster_path) }}" class="row-span-5 w-3/4" alt="">
        <div class="col-span-2">
            <h1 class="mb-2 text-xl font-bold">{{ $event->activity_name }}</h1>
        </div>

        <div>
            <h3 class="font-normal text-blue-600 ">รูปแบบกิจกรรม</h3>
            <p>{{ $event->activity_type }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">ชั่วโมงจิตอาสา</h3>
            <p>{{ $event->activity_hours }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">จำนวนที่รับ</h3>
            <p>{{ $event->participant_number }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">สถานที่จัดกิจกรรม</h3>
            <p>{{ $event->activity_place }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">ผู้จัดกิจกรรม</h3>
            <p>{{ $event->organizer_name }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">วันที่จัดกิจกรรม</h3>
            <p>{{ date('d/n/Y', strtotime($event->activity_start)) }} -
                {{ date('d/n/Y', strtotime($event->activity_end)) }}</p>
        </div>

        <div>
            <h3 class="font-normal text-blue-600">วันที่รับสมัครวันสุดท้าย</h3>
            <p>{{ $event->deadline }}</p>
        </div>
        <div>
            <h3 class="font-normal text-blue-600">ค่าใช้จ่าย</h3>
            <p>{{ $event->activity_fee }} บาท</p>
        </div>
    </div>

</div>
<div class="flex-col space-y-4 pt-8">
    <div>
        <h3 class="font-normal text-blue-600">คำอธิบายกิจกรรม</h3>
        <p>
            {{ $event->description }}
        </p>
    </div>
    <div>
        <h3 class="font-normal text-blue-600">ช่องทางการติดต่อ</h3>
        <p>
            {{ $event->contact }}
        </p>
    </div>
</div>

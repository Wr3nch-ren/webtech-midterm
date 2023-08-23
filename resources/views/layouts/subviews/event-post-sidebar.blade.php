<!-- sidebar -->
<aside id="default-sidebar" class=" w-1/5 ml-16 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div class="h-full py-8 overflow-y-auto flex flex-col items-center">

        <div class="font-normal text-sm">
            <div class="flex flex-col gap-2">
                <a href="{{ route('events.index') }}">
                    <h1 class="text-2xl">กิจกรรมทั้งหมด</h1>
                </a>
                <h3 class="pt-5">หมวดหมู่</h3>
                <a href="{{ route('events.volunteers') }}">
                    <li>
                        <h3>อาสา</h3>
                    </li>
                </a>
                <a href="{{ route('events.technical') }}">
                    <li>
                        <h3>วิชาการ</h3>
                    </li>
                </a>
                <a href="{{ route('events.recreations') }}">
                    <li>
                        <h3>สันทนาการ</h3>
                    </li>
                </a>

            </div>
        </div>

</aside>

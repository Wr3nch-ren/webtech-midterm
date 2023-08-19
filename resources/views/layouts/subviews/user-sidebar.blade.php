<!-- sidebar -->
<aside id="default-sidebar" class="z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div class="h-full py-8 overflow-y-auto flex flex-col items-center">

        <ul class="text-md space-y-2 font-normal">

            <li>
                <a href="{{ route('user.profile') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 duration-300 transition-all ease-in-out
                    {{ Route::is('user.profile') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">ข้อมูลส่วนตัว</span>
                </a>

            </li>
            <li>
                <a href="{{ route('user.notification') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.notification') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">การแจ้งเตือนผลการสมัคร</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.certificates') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.certificates') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">เกียรติบัตร</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.participatingEvents') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.participatingEvents') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">กิจกรรมที่เข้าร่วม</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.organize') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 transition-all duration-300 ease-in-out"
                    {{ Route::is('user.organize') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">กิจกรรมที่ดูแล</span>
                </a>
            </li>

        </ul>
    </div>

</aside>

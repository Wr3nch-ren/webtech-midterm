<!-- sidebar -->
<aside id="default-sidebar"
    class="z-40 w-4/12 h-screen transition-transform -translate-x-full sm:translate-x-0 pl-28 pt-12" aria-label="Sidebar">

    <div class="h-full py-8 overflow-y-auto flex flex-col items-center">

        <ul class="text-md space-y-2 font-normal">

            <li>
                <a href="{{ route('account.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg group hover:text-cyan-400 hover:translate-x-1 duration-300 transition-all ease-in-out
                    {{ Route::is('account.index') ? 'font-semibold' : 'font-medium' }}">
                    {{-- <h1>{{ Route::is('account.index') }}</h1> --}}
                    <span class="ml-3">ข้อมูลส่วนตัว</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('user.notification') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:text-cyan-400 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.notification') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">การแจ้งเตือนผลการสมัคร</span>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('certificate.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:text-cyan-400 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.certificates') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">เกียรติบัตร</span>
                </a>
            </li>
            <li>
                <a href="{{ route('registered.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg  hover:text-cyan-400 hover:translate-x-1 transition-all duration-300 ease-in-out
                    {{ Route::is('user.participants') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">กิจกรรมที่เข้าร่วม</span>

                </a>
            </li>
            <li>
                <<<<<<< HEAD <a href="{{ route('user.organize') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg hover:text-cyan-400 hover:translate-x-1 transition-all duration-300 ease-in-out"
                    {{ Route::is('user.organize') ? 'font-semibold' : 'font-medium' }}">
                    <span class="ml-3">กิจกรรมที่ดูแล</span>
                    </a>
                    =======
                    @auth
                        @if (auth()->user()->isOrganizer())
                            <a href="{{ route('user.organize') }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-violet-700 hover:translate-x-1 transition-all duration-300 ease-in-out"
                                {{ Route::is('user.organize') ? 'font-semibold' : 'font-medium' }}">
                                <span class="ml-3">กิจกรรมที่ดูแล</span>
                            </a>
                        @endif
                    @endauth
                    >>>>>>> 6a32f2138468c38cbb7a95eba71679e292d859d2
            </li>

        </ul>
    </div>

</aside>

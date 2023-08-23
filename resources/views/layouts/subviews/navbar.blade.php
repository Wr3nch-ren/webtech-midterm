<nav class=" bg-white shadow-xl border-b-2 pb-1">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">

        <div class="flex md:order-2">
            @if (Auth::check())
                <div class="flex gap-2">
                    <div class="mx-4">
                        <a href="{{ route('account.index') }}">{{ Auth::user()->name }}</a>

                    </div>
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <button type="button" onclick="window.location.href='{{ route('login') }}'"
                    class="text-black hover:text-gray-600  bg-transparent focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log
                    in
                </button>

                <button type="button" onclick="window.location.href='{{ route('register') }}'"
                    class="text-white bg-black hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Sign up</button>
            @endif
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col items-center font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="/" class="flex items-center">
                        {{-- fixed w-full z-20 --}}
                        {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NSMTH</span>
                    </a>
                </li>
                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4 text-black hover:text-gray-600 rounded md:bg-transparent md:text-black md:p-0"
                        aria-current="page">หน้าหลัก</a>
                </li>
                <li>
                    <a href="{{ route('events.index') }}"
                        class="block py-2 pl-3 pr-4 text-black hover:text-gray-600 rounded md:bg-transparent md:text-black md:p-0"
                        aria-current="page">กิจกรรมทั้งหมด</a>

                </li>

                <li>
                    @php
                        use App\Models\Enum\RoleAccessibility;
                    @endphp

                    @auth
                        @if (auth()->user()->role === RoleAccessibility::STAFF)
                            <a href="{{ route('staff.index') }}"
                                class="block py-2 pl-3 pr-4 text-black hover:text-gray-600 rounded md:bg-transparent md:text-black md:p-0"
                                aria-current="page">จัดการงบประมาณ</a>
                        @else
                        @endif
                        @if (auth()->user()->role === RoleAccessibility::ADMIN)
                            <a href="{{ route('staff.index') }}"
                                class="block py-2 pl-3 pr-4 text-black hover:text-gray-600 rounded md:bg-transparent md:text-black md:p-0"
                                aria-current="page">จัดการโพสต์</a>
                        @endif
                        @if (auth()->user()->role === RoleAccessibility::NORMAL)
                            <a href="{{ route('organize.create') }}"
                                class="block py-2 pl-3 pr-4 text-black hover:text-gray-600 rounded md:bg-transparent md:text-black md:p-0"
                                aria-current="page">สร้างกิจกรรม</a>
                        @endif



                    @endauth
                </li>

            </ul>
        </div>
    </div>
</nav>

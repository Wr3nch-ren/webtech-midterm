<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.subviews.home-navbar')

    {{-- banner --}}
    <div class="mx-auto max-w-screen-xl px-4 pt-16 pb-5 lg:flex lg:h-auto lg:items-center">
        <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Understand User Flow.
                <strong class="font-extrabold text-red-700 sm:block">
                    Increase Conversion.
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                tenetur fuga ducimus numquam ea!
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a class="block w-full rounded-full bg-transparent border-black border hover:border-transparent px-10 py-3 text-base font-semibold text-black shadow hover:bg-black hover:text-white focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                    href="{{ route('activities.index') }}">
                    All Activity
                </a>
            </div>

        </div>

    </div>

    {{-- all activity --}}
    <div class="flex flex-nowrap justify-around p-4 px-44 w-full mb-10">

        <div class=" max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                {{-- <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" /> --}}
                <div class="flex w-full h-44 bg-gray-200">

                </div>
            </a>
            <div class="p-2 text-start">
                <a href="#">
                    <h5 class=" text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>

            </div>
        </div>
        <div class=" max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                {{-- <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" /> --}}
                <div class="flex w-full h-44 bg-gray-200">

                </div>
            </a>
            <div class="p-2 text-start">
                <a href="#">
                    <h5 class=" text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>

            </div>
        </div>
        <div class=" max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                {{-- <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" /> --}}
                <div class="flex w-full h-44 bg-gray-200">

                </div>
            </a>
            <div class="p-2 text-start">
                <a href="#">
                    <h5 class=" text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                        technology acquisitions 2021</h5>
                </a>

            </div>
        </div>

    </div>

    {{-- monthly event --}}
    <div class="bg-gray-200 pt-10 py-8 pb-5">

        <div class="justify-center">
            <h1 class=" text-black text-2xl font-bold text-center pb-10">
                Monthly Event
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-10 px-32">
            <div>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt=""> --}}
                    <div class="bg-gray-400 w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg">

                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                            <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>

                        <div>
                            <span
                                class="bg-transparent text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500">
                                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                register 3 days left
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt=""> --}}
                    <div class="bg-gray-400 w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg">

                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                            <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>

                        <div>
                            <span
                                class="bg-transparent text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500">
                                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                register 3 days left
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt=""> --}}
                    <div class="bg-gray-400 w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg">

                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                            <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>

                        <div>
                            <span
                                class="bg-transparent text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500">
                                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                register 3 days left
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    {{-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                        src="/docs/images/blog/image-4.jpg" alt=""> --}}
                    <div class="bg-gray-400 w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-l-lg">

                    </div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                            <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>

                        <div>
                            <span
                                class="bg-transparent text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500">
                                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                register 3 days left
                            </span>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="flex justify-end p-8 pr-32">
            <button type="button"
                class=" text-black bg-transparent border border-black hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium  text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                view all
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </div>

    </div>


    {{-- cat block --}}
    <div class="flex px-16 py-4 sm:px-16 sm:py-12 lg:px-32 lg:py-32">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
            <div class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
                <h2 class="text-3xl text-black font-bold sm:text-4xl">Find your Event</h2>

                <p class="mt-4 text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
                    aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
                    Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
                    Obcaecati, autem.
                </p>


            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-400 p-4 shadow-sm hover:border-red-700 hover:ring-1 hover:ring-red-700 focus:outline-none focus:ring"
                    href="/accountant">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Category</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>
            </div>
        </div>
    </div>

    @include('layouts.subviews.footer')

</body>

</html>

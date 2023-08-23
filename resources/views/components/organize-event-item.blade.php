@props(['event'])
<div>
    <div class="flex bg-white transition hover:shadow-xl h-10/12">
        <div class="hidden sm:block sm:w-1/3">
            <img alt="Guitar"
                src="https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                class="aspect-auto h-full w-full object-cover" />
        </div>

        <div class="flex flex-1 flex-col justify-between">
            <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                <a href="{{ route('organize.home', ['event' => $event]) }}">
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
                <a href="{{ route('organize.home', ['event' => $event]) }}"
                    class="block bg-gray-900 px-4 py-2 text-center text-xs font-bold uppercase text-white transition hover:bg-cyan-400">
                    เหลือ 7 วัน
                </a>
            </div>
        </div>
    </div>
</div>

<div>
    <a href="{{ route('organize.home', ['event' => $id]) }}"
        class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64">

        <div class="flex-none border-y-1 w-36 hover:w-48 transition-all duration-200 h-full">
            <img class="border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full"
                src="{{ asset($imgPath) }}" alt="{{ $imgPath }}">
        </div>

        <div class="flex justify-around py-6 md:p-0">

            <div class="flex flex-col md:w-2/3 md:max-w-xl p-0">
                <!-- camp name -->
                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900">{{ $eventName }}</h5>

                <div>
                 
                </div>
            </div>


        </div>
    </a>
</div>

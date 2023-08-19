<div class="flex h-min px-8 pl-5 pr-16">
    <div class="flex justify-center w-20 bg-transparent ">
        <div class="w-10 h-10 rounded-full bg-gray-400">

        </div>

    </div>
    <div class="w-full h-min bg-white rounded shadow-md ">
        <div class="flex items-baseline pl-4 mt-2">
            <span class="text-sm">{{ $name }} {{ $surname }}</span>
            <span class="text-xs text-gray-700 ml-4">{{ $date }} {{ $time }}</span>
        </div>

        <div class="p-4">
            <p>{{ $text }}</p>
        </div>
    </div>
</div>

<div>
    <a href="#" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64" data-modal-target="{{ $imgPath }}Modal" data-modal-toggle="{{ $imgPath }}Modal">
        <div class="flex-none border-y-1 w-36 hover:w-48 transition-all duration-200 h-full">
            <img class="border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg h-full" src="{{ $imgPath }}" alt="">
        </div>

        <div class="flex justify-around p-6">
            <div class="flex flex-col md:max-w-2xl p-3">
                <!-- camp name -->
                <h5 class="mb-2 text-lg font-bold  text-gray-900">{{ $campName }}</h5>
            </div>
         </div>
    </a>    
</div>

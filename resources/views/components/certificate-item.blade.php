<div>
    <a href="#" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64" data-modal-target="defaultModal" data-modal-toggle="defaultModal">
        <div class="flex-none border-y-1 w-56 h-full">
            <img class="border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg h-full" src="{{ $imgPath }}" alt="">
        </div>

        <div class="flex justify-around py-6 md:p-0">
            <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                <!-- camp name -->
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{ $campName }}</h5>
                <div>
                <!-- tag -->
                    <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">วิชาการ</span>
                </div>
            </div>
         </div>
    </a>    
    {{-- --}}<x-certificate-modal :camp-name="$campName" :img-path="$imgPath"/>
</div>

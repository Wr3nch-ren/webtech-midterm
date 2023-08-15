@extends('layouts.main')

@section('content')
<div class="flex justify-center container mt-20">

      @include('layouts.subviews.user-sidebar')

      <div class="h-full w-3/5">

            <h1 class="text-3xl font-semibold pb-6">กิจกรรมที่เข้าร่วม</h1>

            <div class="grid grid-cols-2 gap-5">
                
                <a href="{{ route('activities.showDetail') }}" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64 md:justify-between">
                
                    <div class="flex-none border-y-1 w-56 h-full">
                        <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full" src="https://www.camphub.in.th/wp-content/uploads/2023/07/8386D70E-E4A5-4C6B-ACE8-F6141C28DA3B.jpg" alt="">
                    </div>

                    <div class="flex justify-around py-6 md:p-0">
                    
                        <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                        <!-- camp name -->
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Bird walk Ep.15 ดูนกเกาะพู</h5>

                            <div>
                            <!-- tag -->
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                            </div>
                        </div>
               
                
                     </div>
                </a>

                <a href="{{ route('activities.showDetail') }}" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64 md:justify-between">
                
                    <div class="flex-none border-y-1 w-56 h-full">
                        <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full" src="https://www.camphub.in.th/wp-content/uploads/2023/07/8386D70E-E4A5-4C6B-ACE8-F6141C28DA3B.jpg" alt="">
                    </div>

                    <div class="flex justify-around py-6 md:p-0">
                    
                        <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                        <!-- camp name -->
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Bird walk Ep.15 ดูนกเกาะพู</h5>

                            <div>
                            <!-- tag -->
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                            </div>
                        </div>
               
                
                     </div>
                </a>

                <a href="{{ route('activities.showDetail') }}" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64 md:justify-between">
                
                    <div class="flex-none border-y-1 w-56 h-full">
                        <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full" src="https://www.camphub.in.th/wp-content/uploads/2023/07/8386D70E-E4A5-4C6B-ACE8-F6141C28DA3B.jpg" alt="">
                    </div>

                    <div class="flex justify-around py-6 md:p-0">
                    
                        <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                        <!-- camp name -->
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">FPS Game Camp (Innovation Work Space)</h5>

                            <div>
                            <!-- tag -->
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                            </div>
                        </div>
               
                
                     </div>
                </a>

                <a href="{{ route('activities.showDetail') }}" class="flex items-center bg-white border border-gray-800 rounded-lg shadow hover:bg-gray-100 h-full md:h-64 md:justify-between">
                
                    <div class="flex-none border-y-1 w-56 h-full">
                        <img class="border-y border-r border-gray-800 object-cover object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full" src="https://www.camphub.in.th/wp-content/uploads/2023/07/8386D70E-E4A5-4C6B-ACE8-F6141C28DA3B.jpg" alt="">
                    </div>

                    <div class="flex justify-around py-6 md:p-0">
                    
                        <div class="flex flex-col md:w-2/3 md:max-w-xl p-3">
                        <!-- camp name -->
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">อาสา ระบายสี ให้น้องศูนย์เด็กเล็กฯ</h5>

                            <div>
                            <!-- tag -->
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-gray-800">อาสา</span>
                            </div>
                        </div>
               
                
                     </div>
                </a>
              
            </div>
        
      </div>

     
      
</div>


@endsection
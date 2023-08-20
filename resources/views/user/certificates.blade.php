@extends('layouts.main')

@section('content')
<div class="flex justify-center container mt-20">

      @include('layouts.subviews.user-sidebar')
      <div class="h-full w-3/5 pb-6">
            <div class="pb-3 flex justify-between">
                <h1 class="text-3xl font-semibold inline">เกียรติบัตร</h1>
                <button class=" bg-black text-white hover:bg-violet-900 transition-colors duration-300 p-3" data-modal-target="addCertiModal" data-modal-toggle="addCertiModal">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline pb-1">
                        <circle cx="12" cy="12" r="10" stroke="#FFF" stroke-width="1.5"/>
                        <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#FFF" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    เพิ่มเกียรติบัตร
                </button>
            </div>

            <div class="grid grid-cols-2 gap-5">
                @if (!is_null($certificates))
                    @foreach ($certificates as $certificate)
                        <x-certificate-item camp-name="{{ $certificate->name }}" img-path="{{ asset($certificate->certificate_path) }}" />
                    @endforeach
                @endif
            </div>

             <div class="grid grid-cols-2 gap-5">
                @if (!is_null($certificates))
                    @foreach ($certificates as $certificate)
                        <x-certificate-modal camp-name="{{ $certificate->name }}" img-path="{{ asset($certificate->certificate_path) }}" />
                    @endforeach
                @endif
            </div>

            <div id="addCertiModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            เพิ่มเกียรติบัตร
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addCertiModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <form action="{{ route('user.storeCertificate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="certiImage" class="block mb-2">รูปเกียรติบัตร</label>
                            <input type="file" name="certiImage">
                            <div class="my-2">            
                                <label for="certiName" class="block mb-2">ชื่อเกียรติบัตร</label>
                                <div class="flex">
                                    <input type="text" placeholder="ชื่อเกียรติบัตร" class="rounded-md w-full" name="certiName" id="certiName">
                                    <button type="submit" class="bg-black text-white hover:bg-violet-900 transition-colors duration-300 p-2 px-4 inline ml-2 rounded-md">เพิ่ม</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
</div>

</div>

      
      

      
</div>


@endsection
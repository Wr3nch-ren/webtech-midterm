 @props(['certificate'])
 <!-- Main modal -->
 <div id="{{ $imgPath }}Modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative w-full max-w-2xl max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <!-- Modal header -->
             <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                 <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                     {{ $campName }}
                 </h3>
                 <button type="button"
                     class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                     data-modal-hide="{{ $imgPath }}Modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>
             <!-- Modal body -->
             <div class="p-6 space-y-6">
                 <img class="object-center rounded-t-lg md:rounded-none md:rounded-l-lg w-full h-full"
                     src="{{ $imgPath }}" alt="">
             </div>
             <div class="flex justify-end pr-8 pb-5">
                 <form class="inline-block" action="{{ route('certificate.destroy', ['certificate' => $certificate]) }}"
                     method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="bg-red-600 px-3 py-2 text-white rounded-md">ลบเกียรติบัตร

                     </button>
                 </form>
             </div>
         </div>
     </div>
 </div>

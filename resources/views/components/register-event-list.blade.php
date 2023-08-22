

<div>
    <form method="POST" 
    class="flex justify-between items-center p-4 rounded-lg bg-white shadow-sm max-w-2xl"
    action="{{ route('organize.deleteUser', ['user' => $name, 'event' => $event]) }}">
        @csrf
        @method('DELETE')
         <h1 class="text-sm">{{ $nameTitle }} {{ $name }}
            {{ $surname }} </h1>
        <div class="flex flex-row space-x-5">
            {{ $role }}
        </div>
            @if ($role != "HOST" && Auth::user()->role == App\Models\Enum\RoleAccessibility::HOST)
            <button type="submit" 
                class="mt-1 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 
                focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 
                py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white
                 dark:hover:bg-red-600 dark:focus:ring-red-900" >
                ลบ
            </button>
            @endif
    </form>
</div>

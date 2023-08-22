@props(['user'])

<div class="flex justify-between p-4 rounded-lg bg-white shadow-sm">

    <h1 class="text-sm">{{ $user->name_title }} {{ $user->name }}
        {{ $user->surname  }}</h1>
    <div class="flex flex-row space-x-5">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
        </button>
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </button>

    </div>
</div>

{{-- <div>
    {{-- <form method="POST" 
    class="flex justify-between items-center p-4 rounded-lg bg-white shadow-sm max-w-2xl"
    action="{{ route('organize.deleteUser', ['user' => $user, 'event' => $event]) }}"> --}}
{{-- @csrf --}}
{{-- @method('DELETE') --}}
{{-- <h1 class="text-sm">{{ $user->name_title }} {{ $user->name }}
        {{ $user->surname }} </h1> --}}
{{-- <div class="flex flex-row space-x-5">
        {{ $role }}
    </div> --}}
{{-- @if ($role != 'HOST' && Auth::user()->role == App\Models\Enum\RoleAccessibility::HOST)
        <button type="submit"
            class="mt-1 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 
                focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 
                py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white
                 dark:hover:bg-red-600 dark:focus:ring-red-900">
            ลบ
        </button>
    @endif --}}
{{-- </form> --}}
{{-- </div>  --}}

<div class="bg-red-700 h-16 m-1">
    <div class="p-2 mx-1">
        <a href="">
            <x-jurassic-park.application-logo-black class="" />
        </a>
    </div>

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-black hover:text-amber-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-black hover:text-amber-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-black hover:text-amber-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

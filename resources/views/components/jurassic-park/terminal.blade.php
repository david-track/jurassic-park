<div class="container w-80 h-80 p-1 m-4 overflow-auto bg-stone-800 font-mono shadow-xs">
    <div class="h-8 bg-stone-700 text-white ">
        <div class="m-1 leading-loose">{{ $title }} </div>
    </div>
    {{-- Overflow, fixed by 64, currently liking scroll --}}
    <div class="bg-stone-800 h-80 ">
        {{ $slot }}
    </div>
</div>

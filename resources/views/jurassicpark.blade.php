{{-- @php
    $title = 'Jurassic Park';
@endphp
<x-jurassic-park.layout :title="$title"> --}}
<x-app-layout>
    <x-jurassic-park.header />


    <div class="flex flex-row flex-wrap justify-center ">
        <a href="/dinosaurs">
            @php
                $title = 'dino';
            @endphp
            <x-jurassic-park.terminal :title="$title">

                <div class="m-1">
                    <p>> Dinosaurs </br>
                        > Status:
                        <span class="text-green-500">
                            online
                        </span></br>
                        > Expected Dinosaurs: {{ $parkDinosaursAmount }} </br>
                        > Counted Dinosaurs: 292 </br>
                        > Last count: @php
                        echo now(-1); @endphp
                        </br>

                        > Fences </br>
                        > Status:
                        <span class="text-green-500">
                            online
                        </span></br>
                        > Paddocks </br>
                        > Status:
                        <span class="text-green-500">
                            online
                        </span></br>
                    </p>
                </div>

            </x-jurassic-park.terminal>
        </a>

        <a href="#">
            @php
                $title = 'dino2';
            @endphp
            <x-jurassic-park.terminal :title="$title">

                <div class="m-1"> test2 </div>

            </x-jurassic-park.terminal>
        </a>

        <a href="#">
            @php
                $title = 'dino3';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test3 </div>
            </x-jurassic-park.terminal>
        </a>

        <a href="#">
            @php
                $title = 'dino4';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test4 </div>
            </x-jurassic-park.terminal>
        </a>
        <a href="#">
            @php
                $title = 'dino5';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test5 </div>
            </x-jurassic-park.terminal>
        </a>
        <a href="#">
            @php
                $title = 'dino6';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test6 </div>
            </x-jurassic-park.terminal>
        </a>
    </div>

    {{-- 
</x-jurassic-park.layout> --}}
</x-app-layout>

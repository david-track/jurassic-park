<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
                        > </br>
                        > Expected Dinosaurs: 292</br>
                        > Counted Dinosaurs: 292 </br>
                        > </br>
                        > Last count: @php
                        echo now(-1); @endphp
                        </br>
                        > </br>
                        > Fences </br>
                        > Status:
                        <span class="text-green-500">
                            online
                        </span></br>
                        > </br>
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
                $title = 'dino4';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test4 </div>
            </x-jurassic-park.terminal>
        </a><a href="#">
            @php
                $title = 'dino4';
            @endphp
            <x-jurassic-park.terminal :title="$title">
                <div class="m-1"> test4 </div>
            </x-jurassic-park.terminal>
        </a>
    </div>

</x-app-layout>

@php
    $title = 'Jurassic Park';
@endphp
<x-jurassic-park.layout :title="$title">

    <x-jurassic-park.header></x-jurassic-park.header>

    <div class="text-white">
        <div class="flex flex-row justify-center ">
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
                            > Expected Dinosaurs: {{ $parkDinosaursCount }} </br>
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
        </div>
    </div>

</x-jurassic-park.layout>

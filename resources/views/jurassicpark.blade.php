<x-jurassic-park.layout>

    <x-jurassic-park.header></x-jurassic-park.header>

    <div class="text-white">
        <div class="flex flex-row justify-center ">
            <x-jurassic-park.terminal>

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
                            echo now(-1);
                        @endphp
                        </br>
                        > </br>
                        > Fences:
                        <span class="text-green-500">
                            online
                        </span></br>
                    </p>
                </div>

            </x-jurassic-park.terminal>

            <x-jurassic-park.terminal>

                <div class="m-1"> test2 </div>

            </x-jurassic-park.terminal>

            <x-jurassic-park.terminal>
                <div class="m-1"> test3 </div>
            </x-jurassic-park.terminal>

            <x-jurassic-park.terminal>
                <div class="m-1"> test4 </div>
            </x-jurassic-park.terminal>
        </div>
    </div>

</x-jurassic-park.layout>

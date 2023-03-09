<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SuperUser') }}
        </h2>
    </x-slot>
    <div class="flex flex-row">

        <div class="container basis-2/5 overflow-auto">
            <div class="p-2 border-2 border-red-700 m-1">
                <span class="text-red-700">Data Management</span><br><br>

                <x-jurassic-park.crud />

            </div>
        </div>
        <div class="container basis-3/5 overflow-auto">
            <div class=" h-1/2 p-2 border-2 border-red-700 m-1 overflow-auto">
                <span class="text-red-700">Test section one</span> <br>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, harum laudantium quidem culpa nemo quam,
                molestias sint aliquid fugiat, architecto esse perferendis? Ipsum minima iste voluptas, nemo ratione
                voluptates sit!<br><br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat minus soluta odio provident. Iure
                placeat nam odio, odit repudiandae in vero obcaecati adipisci pariatur incidunt a id facilis hic cumque?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, cum fuga provident, eaque quia
                nostrum corrupti fugit eveniet, non consectetur consequatur explicabo deleniti aperiam modi vitae fugiat
                facilis ab inventore.<br><br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt a esse saepe eius, ratione, aperiam
                architecto quos consequatur ducimus fugit nemo maxime sed, voluptas consectetur eveniet quas blanditiis
                soluta magnam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptate fuga incidunt
                dolorum architecto repellat nobis! Voluptatum repellendus nulla excepturi tenetur nobis, fuga, ipsa
                repellat tempora ullam, molestias rerum. Ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque, quibusdam voluptatem. Voluptate unde labore ipsam hic, eum dignissimos, illum assumenda excepturi
                ducimus id qui impedit doloribus expedita mollitia consectetur voluptas? Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Odit odio qui fugiat porro nihil accusantium hic obcaecati dolor,
                explicabo quae sed, ducimus recusandae quos sequi neque iste provident magni distinctio!
            </div>
            <div class="h-1/2 p-2 border-2 border-red-700 m-1 overflow-auto">
                <span class="text-red-700">Test section 2</span><br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat harum autem quidem nulla, mollitia
                iusto error ut. Natus eaque quas aliquid asperiores! Cum ratione, non minus impedit molestiae temporibus
                cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium at qui laudantium
                consectetur ratione, reiciendis necessitatibus, esse numquam fugiat fugit nesciunt sequi dolorem
                eligendi reprehenderit delectus atque magni aut consequuntur.
            </div>
        </div>
    </div>
</x-app-layout>

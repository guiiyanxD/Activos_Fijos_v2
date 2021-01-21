<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                Pueden ser dos vistas diferentes
            </div>
        </div>
    </div>
    <!-- son dos vistas diferentes -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores aspernatur beatae,
                    consectetur cumque earum eligendi facere, in molestias nihil officia pariatur quas quidem quod
                    repellat similique suscipit vero voluptates.</p>
                <p>Accusamus alias cum dicta eaque eius eum expedita iste nisi officia quae quam, quo rem repellendus
                    reprehenderit temporibus veritatis voluptates voluptatum. At blanditiis dolores id incidunt nemo
                    quae totam veritatis!</p>
                <p>Accusantium aliquam at, cum, dignissimos dolorem doloribus ea eaque esse fugit inventore ipsum
                    laudantium molestiae nihil obcaecati qui quos soluta vero? Beatae delectus deserunt, hic ipsum
                    labore non quasi repudiandae.</p>
                <p>Adipisci aperiam dolore dolorum iste, itaque, porro quis quo rem repellendus, sequi soluta veritatis!
                    Asperiores dolore non porro reprehenderit voluptas. Adipisci aperiam aut culpa dicta eos officia rem
                    sed voluptatem?</p>
                <p>Et expedita minima officia sequi vitae. Ab adipisci aperiam aspernatur autem cum distinctio eveniet,
                    ex fugit ipsa iste labore nihil provident quod ratione recusandae repellendus, saepe sunt tempore
                    temporibus tenetur.</p>

            </div>
        </div>
    </div>

</x-app-layout>

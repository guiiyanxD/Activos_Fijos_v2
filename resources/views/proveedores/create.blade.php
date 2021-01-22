
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{__('Activos fijos/Proveedores/Agregar')}}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-10 lg:px-10 md:grid md:grid-cols-3 md:gap-6 ">
        <x-jet-section-title>
            <x-slot name="title">
                {{ __('Agregar nuevo proveedor') }}
            </x-slot>
            <x-slot name="description">
                {{ __('Formulario para agregar un nuevo proveedor a la lista de la empresa.)}}
            </x-slot>
        </x-jet-section-title>
        <form action="{{route('proveedores.store')}}" method="POST" class="mt-4 md:mt-0 md:col-span-2">
            @csrf
            @method("POST")
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="nombre" value="{{ __('Nombre del proveedor') }}" />
                            <x-jet-input id="nombre" name="nombre" type="text" class="mt-1 block w-full"  autocomplete="nombre" required />
                            <x-jet-input-error for="nombre" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="estado_id" value="{{ __('estado') }}" />
                            <x-jet-input id="estado_id" name="estado_id" type="text" class="mt-1 block w-full"  autocomplete="estado_id" required />
                            <x-jet-input-error for="estado_id" class="mt-2" />
                        </div>

                    <!-- TODO: Seria bueno agregar un boton ' agregar contacto' que al presionarlo se desplegue un formulario en el que se pueda añadir los datos de contacto.-->

                        <div class="col-span-6 sm:col-span-4">
                            <button type="submit"  class="inline-flex items-center px-4 py-2 bg-indigo-500 border
                                border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition
                                ease-in-out duration-150">
                                Registrar
                            </button>
                            <a type="button" href="{{route('proveedores.index')}}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border
                                border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500
                                focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
                                Cancelar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</x-app-layout>

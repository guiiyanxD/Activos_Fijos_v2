<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activos fijos/Solicitudes de movimientos') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div >
            <a type="button" href="{{route('movimientos.create')}}"
               class="inline-flex items-center px-4 py-2 bg-indigo-500 border
            border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition
            ease-in-out duration-150">
                {{__('Realizar movimiento ')}}
            </a>

        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Cod. Solicitud</th>
                <th>Cod. Compra</th>
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Acciones</th>
                <th colspan="2">&nbsp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($movimientos as $mov)
                <tr>
                    <td>{{$mov->solicitud->id_solicitud}}</td>
                    <td>{{$mov->id_sol_mov}}</td>
                    <td>{{$mov->solicitud->user->name}}  {{$mov->solicitud->user->apellido}} </td>
                    <td>{{$mov->solicitud->fecha}}</td>
                    <td>
                        <a href="{{route('movimientos.show',[$mov->id_sol_mov])}}" class="inline-flex items-center px-4 py-2 bg-green-400
                border border-gray-300 rounded-md font-semibold text-xs text-gray-50 uppercase tracking-widest shadow-sm
                hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800
                active:bg-gray-50 transition ease-in-out duration-150" >
                            Ver
                        </a>
                    </td>

                    <td>
                        <form method="POST" action="{{route('movimientos.destroy',[$mov->id_sol_mov]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border
                    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500
                    focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

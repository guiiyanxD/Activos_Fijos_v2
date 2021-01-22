<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activos fijos/Proveedores') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div >
            <a type="button" href="{{route('proveedores.create')}}"
               class="inline-flex items-center px-4 py-2 bg-indigo-500 border
            border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition
            ease-in-out duration-150">
                {{__('Agregar proveedor')}}
            </a>
            <li class="divider" style="margin: 10px"></li>
            <div>
                <select class="form-select" name="select" id="select">
                    <option value="selected">Elija una opcion</option>
                    <option class="dropdown-item" value="hola">hola</option>
                    <option class="dropdown-item" value="hola">como</option>
                    <option class="dropdown-item" value="hola">estas</option>
                    <option class="dropdown-item" value="hola">hoy</option>
                </select>
            </div>
            <li class="divider" style="margin: 10px"></li>

            <label for="select">Aqui deberia haber un select</label>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
                <th colspan="2">&nbsp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedor as $prov)
                <tr>
                    <td>{{$prov->nombre}}</td>
                    <td>
                        <a href="{{route('proveedores.show',[$prov->id_proveedor])}}" clas s="inline-flex items-center px-4 py-2 bg-green-400
                border border-gray-300 rounded-md font-semibold text-xs text-gray-50 uppercase tracking-widest shadow-sm
                hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800
                active:bg-gray-50 transition ease-in-out duration-150" >
                            Ver
                        </a>
                    </td>

                    <td>
                        <form method="POST" action="{{route('estados.destroy',[$stat->id_proveedor]) }}">
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

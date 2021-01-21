<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activos fijos') }}
        </h2>
    </x-slot>

    <div class="py-4 px-0">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col s12"><h5> Activos Fijos</h5></div>
                    <form action="#">
                        <div class="col s4">
                            <x-jet-input :disabled="false" placeholder="Ingrese el codigo" required></x-jet-input>
                            <label for="depa"></label>
                        </div>
                        <div class="col m-4">
                            <x-jet-button type="submit">
                                buscar
                            </x-jet-button>
                        </div>
                        <div class="col s12">
                            <table class="responsive-table centered highlight">
                                <thead>
                                <tr>
                                    <th>Codigo </th>
                                    <th>Nombre</th>
                                    <th>Estado </th>
                                    <th>Departamento Origen</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>
                                        <div class="float-right">
                                            <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                                            <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>
                                        <div class="float-right">
                                            <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                                            <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Borrar</button>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>787</td>
                                    <td>
                                        <div class="float-right">
                                            <a class="btn btn-primary blue darken-1">  <i class="material-icons">check</i>Asignar</a>
                                            <button class="btn btn-primary red darken-1">  <i class="material-icons">delete</i>Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



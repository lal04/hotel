@extends('layouts.Principal')
@section('titulo', 'index')
@section('contenido')

    <div class="p-5">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route('hotel.create') }}" class="">Nuevo hotel</a>

        </button>

    </div>


    <div class=" p-5 relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Direccion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pisos
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($hotels as $hotel)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $hotel->nombre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $hotel->direccion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hotel->n_pisos }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection

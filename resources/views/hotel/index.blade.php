@extends('layouts.Principal')
@section('titulo', 'index')
@section('contenido')
    <h1>Hoteles</h1>
    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a  href="#" class="">Nuevo hotel</a>

    </button>
    
    <ul>
        @foreach ($hotels as $hotel)
            <li>{{ $hotel->nombre }} - {{ $hotel->direccion }}</li>
        @endforeach
    </ul>
@endsection

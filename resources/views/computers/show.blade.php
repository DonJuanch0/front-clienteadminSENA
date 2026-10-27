@extends('layouts.app')

@section('title', 'Detalle del computador')

@section('content')
    <a class="back" href="{{ route('computers.index') }}">&larr; Volver al listado</a>

    @if (empty($computer))
        <p class="empty">No se encontró el computador.</p>
    @else
        <h1>Computador {{ $computer['number'] }}</h1>

        <p><strong>Marca:</strong> {{ $computer['brand'] }}</p>
        <p><strong>Modelo:</strong> {{ $computer['model'] }}</p>

        @if (!empty($computer['image_url']))
            <img src="{{ $computer['image_url'] }}" alt="Imagen del computador" width="200">
        @endif

        <h2>Aprendices</h2>
        @if (count($computer['apprentices'] ?? []) === 0)
            <p class="empty">No tiene aprendices.</p>
        @else
            <table>
                <thead>
                    <tr><th>Nombre</th><th>Correo</th><th>Celular</th></tr>
                </thead>
                <tbody>
                    @foreach ($computer['apprentices'] as $apprentice)
                        <tr>
                            <td>{{ $apprentice['name'] }}</td>
                            <td>{{ $apprentice['email'] }}</td>
                            <td>{{ $apprentice['cell number'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection

@extends('layouts.app')

@section('title', 'Computadores')

@section('content')
    <h1>Computadores</h1>

    @if (count($computers) === 0)
        <p class="empty">No hay computadores registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer['id'] }}</td>
                        <td>{{ $computer['number'] }}</td>
                        <td>{{ $computer['brand'] }}</td>
                        <td>{{ $computer['model'] }}</td>
                        <td><a href="{{ route('computers.show', $computer['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

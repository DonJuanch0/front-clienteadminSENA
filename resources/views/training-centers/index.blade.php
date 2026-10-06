@extends('layouts.app')

@section('title', 'Centros de formación')

@section('content')
    <h1>Centros de formación</h1>

    @if (count($trainingCenters) === 0)
        <p class="empty">No hay centros de formación registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainingCenters as $trainingCenter)
                    <tr>
                        <td>{{ $trainingCenter['id'] }}</td>
                        <td>{{ $trainingCenter['name'] }}</td>
                        <td>{{ $trainingCenter['location'] }}</td>
                        <td><a href="{{ route('trainingCenters.show', $trainingCenter['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

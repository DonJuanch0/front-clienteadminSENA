@extends('layouts.app')

@section('title', 'Áreas')

@section('content')
    <h1>Áreas</h1>

    @if (count($areas) === 0)
        <p class="empty">No hay áreas registradas.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['id'] }}</td>
                        <td>{{ $area['name'] }}</td>
                        <td><a href="{{ route('areas.show', $area['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

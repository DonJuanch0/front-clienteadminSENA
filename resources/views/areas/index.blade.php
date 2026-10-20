@extends('layouts.app')

@section('title', 'Areas')

@section('content')
    <h1>Areas</h1>

    <form method="POST" action="/areas">
        @csrf
        <input name="name" placeholder="Nombre">

        <button>Crear</button>
        </form>

    @if (count($areas) === 0)
        <p class="empty">No hay areas registradas.</p>
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
                        <td><a href="{{ route('areas.show', $area['id']) }}">Ver detalle</a>
                        
                        <form method="POST" action="/areas/{{ $area['id'] }}">
                            @csrf
                            @method('DELETE')
                            <button>Eliminar</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

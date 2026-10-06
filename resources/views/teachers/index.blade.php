@extends('layouts.app')

@section('title', 'Docentes')

@section('content')
    <h1>Docentes</h1>

    @if (count($teachers) === 0)
        <p class="empty">No hay docentes registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Área</th>
                    <th>Centro de formación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher['id'] }}</td>
                        <td>{{ $teacher['name'] }}</td>
                        <td>{{ $teacher['email'] }}</td>
                        <td>{{ $teacher['area']['name'] ?? '-' }}</td>
                        <td>{{ $teacher['trainingCenter']['name'] ?? '-' }}</td>
                        <td><a href="{{ route('teachers.show', $teacher['id']) }}">Ver detalle</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
